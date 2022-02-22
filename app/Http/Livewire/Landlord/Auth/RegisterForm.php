<?php

namespace App\Http\Livewire\Landlord\Auth;




use Spatie\Multitenancy\Models\Tenant;
use Illuminate\Support\Str;
use App\Models\ImpersonateToken;
use App\Models\Tenant as ModelsTenant;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Livewire\Component;

class RegisterForm extends Component
{

    public $name;
    public $email;
    public $domain;
    public $phone;
    public $password;

    public function render()
    {
        return view('landlord.auth.register-form');
    }

    public function save(){

       $tenant = ModelsTenant::create([
            'name' => $this->name,
            'domain' => $this->domain
        ]);

        return redirect($this->domain, 301);
    }

}
