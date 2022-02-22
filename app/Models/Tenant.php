<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Spatie\Multitenancy\Models\Tenant as ModelsTenant;
use Illuminate\Support\Str;

class Tenant extends ModelsTenant
{
    use HasFactory;

    protected $guarded = [];

    public static function booted(){
        static::creating(fn (Tenant $tenant) => $tenant->createDataBase($tenant));
        static::created(fn (Tenant $tenant) => $tenant->createDataBase($tenant));
    }

    public function migration($tenant){
        $this->createDataBase($tenant);
    }

    public function createDataBase($tenant){
        $database_name = parse_url(config('app.url'),PHP_URL_HOST).'_'.Str::random(4);
        $database = Str::of($database_name)->replace('.','_')->lower()->__toString();

        $query = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = ?";

        $db = DB::select($query,[$database]);

        if(empty($db)){
            DB::connection('tenant')->statement("CREATE DATABASE {$database};");
            $tenant->database = $database; 
        }

        return $database;
    }

    public function runMigrationsSeeds($tenant){
        $tenant->refresh();

        Artisan::call('tenants:artisan',[
            'artisanCommand' => "migrate --database=tenant --seed --force",
            '--tenant' => "{$tenant->id}"
        ]);
    }
}
