<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "administrador",
            'email' => "admin@usach.cl",
            'password' => bcrypt("admin123"),
            'rut' => "00.000.000-0",
            'tipo_usuario' => "administrador",
        ]);
    }
}
