<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name'=>'Enderson',
            'email'=>'ender@resvi.com',
            'password'=>bcrypt('123456')
        ])->assignRole('Administrador');
        User::create([
            'name'=>'Willian',
            'email'=>'micol"resvi.com',
            'password'=>bcrypt('123456')
        ])->assignRole('Administrador');
        User::create([
            'name'=>'Willian',
            'email'=>'willian@resvi.com',
            'password'=>bcrypt('123456')
        ])->assignRole('Administrador');
        User::create([
            'name'=>'Usuario',
            'email'=>'usuario@resvi.com',
            'password'=>bcrypt('123456')
        ])->assignRole('Usuario');
        User::create([
            'name'=>'Conductor',
            'email'=>'conductor@resvi.com',
            'password'=>bcrypt('123456')
        ])->assignRole('Conductor');
    }
}
