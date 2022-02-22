<?php

namespace App\Http\Controllers\Tenant;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Http\Controllers\Controller;
use App\Models\ImpersonateToken;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Str;
use Spatie\Multitenancy\Models\Tenant;

class ImpersonateController extends Controller
{
    public function store(Request $request)
    {
        $tenant = Tenant::find($request->get('tenant_id'));
        $redirect_url = "https{$tenant->domain}";
        $impersonate = $this->impersonate($tenant,auth()->user(),$redirect_url);

        $tenant_url = "https{$tenant->domain}/admin/impersonate";

        return redirect("{$tenant_url}/{$impersonate->token}");
    }

    
}
