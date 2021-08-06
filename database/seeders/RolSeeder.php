<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Agregando roles
        $roleAdmin = Role::create(['name' => 'Administrador']);
        $roleConductor = Role::create(['name' => 'Conductor']);
        $roleUsuario = Role::create(['name' => 'Usuario']);
        $roleDeveloper = Role::create(['name' => 'Developer']);

    }
}
