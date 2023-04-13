<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //le digo a laravel que se cargará una clase con los seeders
        //le digo a laravel que se cargará una clase con los seeders
        //se puede hacer así si necesitamos tener seeders complejos(relaciones)
        //$this->call(CursoSeeder::class);

        Curso::factory(50)->create();
        User::factory(50)->create();
    }
}
