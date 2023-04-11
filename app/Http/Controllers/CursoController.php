<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return view('cursos.index');
    }

    public function create(){
        return view('cursos.create');
    }

    public function show($curso){
        $duracion = "2 meses";
        // return view('cursos.show',['curso'=>$curso]); //opcion 1
        return view('cursos.show', compact('curso','duracion')); //opcion 2
    }
}
