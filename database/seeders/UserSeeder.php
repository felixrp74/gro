<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */ 
    public function run()
    {
        User::create([
            'name'=> 'Administrador Software',
            'email'=> 'fer@fer',
            'escuela'=> 'ingenieria-sistemas',
            'password'=> bcrypt('fer@fer'),
        ])->assignRole('Admin'); // 'Admin' de la linea 20 de archivo 'RoleSeeder.php'
 
        User::create([
            'name'=> 'Mg. Sc. PABLO PARI HUARCAYA',
            'email'=> 'ppari@unap.edu.pe',
            'escuela'=> 'ingenieria-mecanica',
            'password'=> bcrypt('Pablo.1mecanica'),
        ])->assignRole('Admin'); // 'Responsable' de la linea 21 de archivo 'RoleSeeder.php'

        User::create([
            'name'=> 'Mg. Sc. CESAR PAUL LAQUI VILCA',
            'email'=> 'cesarlaqui@unap.edu.pe',
            'escuela'=> 'ingenieria-electronica',
            'password'=> bcrypt('Cesar.2electronica'),
        ])->assignRole('Responsable'); // 'Responsable' de la linea 21 de archivo 'RoleSeeder.php'

        // User::factory(2)->create(); // de la linea 21 'RoleSeeder.php'
    }
}
