<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tenant\AuthController;
use App\Models\User;
use Elrod\MultitenancyImpersonate\Models\ImpersonateToken;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin/impersonate/{token}', function ($token) {

    $impersonate = ImpersonateToken::where('token',$token)->first();

    $user = User::find($impersonate->user_id);

    Auth::login($user);

    return redirect()->route('admin');

})->name('redirect_domain');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin', function () {
    return 'Llegaste al dashboard';
})->name('admin');

Route::get('login', function () {
    return view('tenant.auth.login');
})->name('login');

Route::get('logout', [AuthController::class, 'logout'])->name('logout');