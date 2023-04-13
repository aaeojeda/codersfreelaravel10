<?php

namespace Database\Seeders;

//se define que se usará el modelo CURSO
//se define que se usará el modelo CURSO
use App\Models\Curso;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Curso::factory(50)->create();
        /*
        Forma manual de crear datos para pruebas
        Forma manual de crear datos para pruebas
        $curso1 = new Curso();
        $curso1->nombre = "Php";
        $curso1->descripcion = "Curso introductorio de Php";
        $curso1->categoria = "DesWeb";
        $curso1->save();
        $curso2 = new Curso();
        $curso2->nombre = "Mysql";
        $curso2->descripcion = "Curso de base de datos con MySql";
        $curso2->categoria = "DisWeb";
        $curso2->save();
        Forma manual de crear datos para pruebas
        Forma manual de crear datos para pruebas
        */
    }
}
