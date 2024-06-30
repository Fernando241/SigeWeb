<?php

namespace Database\Seeders;

use App\Models\Estudiante;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        /* $estudiante = new Estudiante();
        $estudiante->documento = "89765765";
        $estudiante->nombres = "Jose Luis";
        $estudiante->apellidos = "Rojas Espitia";
        $estudiante->telefono = "3112223445";
        $estudiante->direccion = "Calle 1 12-39 Comuneros";
        $estudiante->acudiente = "Maribel Espitia";
        $estudiante->save();

        $estudiante2 = new Estudiante();
        $estudiante2->documento = "88243555";
        $estudiante2->nombres = "Karla Vanessa";
        $estudiante2->apellidos = "Barbosa Suarez";
        $estudiante2->telefono = "3221223300";
        $estudiante2->direccion = "Carrera 5 este 21-12 Ibague";
        $estudiante2->acudiente = "Carlos Barbosa";
        $estudiante2->save(); */

        Estudiante::factory()->count(200)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
