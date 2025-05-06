<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Clase principal para ejecutar todos los seeders de la base de datos
class DatabaseSeeder extends Seeder
{
     /**
     * Ejecuta los seeders de la base de datos.
     *
     * Este método se llama cuando se ejecuta el comando: php artisan db:seed
     * Aquí define cuántos registros se crearán y qué modelos se llenarán con datos de prueba.
     */
    public function run(): void
    {
        // Crea 10 usuarios ficticios utilizando la fábrica del modelo User
        \App\Models\User::factory(10)->create();
        // Crea 50 sedes (locations) ficticias utilizando la fábrica del modelo Location
        \App\Models\location::factory(50)->create();
    }
}
