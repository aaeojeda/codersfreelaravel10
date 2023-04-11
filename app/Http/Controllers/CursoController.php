<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return "Bienvenido a la página de CURSOS";
    }

    public function create(){
        return "Esta página es para crear cursos";
    }

    public function show($curso){
        return "Bienvenido al curso: ".$curso;
    }
}
