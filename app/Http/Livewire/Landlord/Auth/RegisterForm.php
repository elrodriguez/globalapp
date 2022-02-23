<?php

namespace App\Http\Livewire\Landlord\Auth;




use Spatie\Multitenancy\Models\Tenant;
use App\Models\Tenant as ModelsTenant;
use App\Models\User;
use Livewire\Component;
use Elrod\MultitenancyImpersonate\Traits\CanImpersonate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterForm extends Component
{
    use CanImpersonate;

    public $name = 'rodriguez';
    public $email = 'rodriguez@gmail.com';
    public $domain = 'rodriguez.globalapp.test';
    public $telephone = '921008708';
    public $password = '12345678';

    public function render()
    {
        return view('landlord.auth.register-form');
    }

    public function save(){

        $this->validate([
            'name' => 'required|min:3|max:255',
            'domain' => 'required|string|max:255',
            'password' => 'required|string',
            //'email' => 'required|regex:/(.+)@(.+)\.(.+)/i|min:3|max:255|unique:tenants,email',
            'telephone' => 'required|min:3|max:255',
        ]);

       $tenant = ModelsTenant::create([
            'name' => $this->name,
            'domain' => $this->domain,
            'email' => $this->email,
            'telephone' => $this->telephone
        ]);

        $tenant->makeCurrent();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);

        Auth::login($user);

        $this->redirectTenant($tenant->id);
    }

    public function redirectTenant($id)
    {
        $tenant = Tenant::find($id);
        
        $redirect_url = "http://{$tenant->domain}/admin";

        $token = $this->createToken($tenant,auth()->user(),$redirect_url);

        //return redirect($redirect_url, 301);

        $this->impersonate($tenant,$token->token,auth()->user());
            
        $tenant_url = "http://{$tenant->domain}/admin/impersonate";

        return redirect("{$tenant_url}/{$token->token}");
    }

    
}
