<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "username" => "admin",
            "name" => "Administrador",
            "email" => "admin@admin.cl",
            "password" => bcrypt("admin")
        ]);

        //asigna todas las opciones al usuario 1
        User::findOrFail(1)->plOptions()->sync([
            1,2,3,4,5,6
        ]);

        //asigna todos los roles al usuario 1
        User::findOrFail(1)->plRols()->sync([
            1,2,3,4,5
        ]);
    }
}
