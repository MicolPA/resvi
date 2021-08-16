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

        // Asignando permisos
            //permisos para los servicios
        Permission::create(['name'=>'servicios.index'])->syncRoles([$roleAdmin,$roleUsuario]);
        Permission::create(['name' => 'servicios.Normales'])->syncRoles([$roleAdmin,$roleDeveloper,$roleUsuario]);
        Permission::create(['name' => 'servicios.Personalizados'])->syncRoles([$roleAdmin,$roleDeveloper,$roleUsuario]);
        Permission::create(['name' => 'servicios.Pro'])->syncRoles([$roleAdmin,$roleDeveloper,$roleUsuario]);
        Permission::create(['name' => 'servicios.Envio'])->syncRoles([$roleAdmin,$roleDeveloper,$roleUsuario]);
            //permisos para los Conductores
        Permission::create(['name'=>'conductores.index'])->syncRoles([$roleAdmin,$roleDeveloper,$roleConductor]);
        Permission::create(['name' => 'conductores.VerLista'])->syncRoles([$roleAdmin,$roleDeveloper,$roleConductor]);
            //permisos para los Usuario
        Permission::create(['name'=>'usuario.index'])->syncRoles([$roleAdmin,$roleDeveloper]);
        Permission::create(['name' => 'usuario.Lista'])->syncRoles([$roleAdmin,$roleDeveloper]);
        Permission::create(['name' => 'usuario.Rol'])->syncRoles([$roleAdmin,$roleDeveloper]);
            // permisos para la documentacion
        Permission::create(['name' => 'documentacion.index'])->syncRoles([$roleAdmin,$roleDeveloper,$roleUsuario,$roleConductor]);

    }
}
