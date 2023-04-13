<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        $cursos = Curso::paginate(5);
        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }
    public function store(Request $request){
        
        return $request;
        //return view('cursos.create');
    }

    public function show($id){
        $curso = Curso::find($id);
        // return view('cursos.show',['curso'=>$curso]); //opcion 1
        // return view('cursos.show', compact('curso','duracion')); //opcion 2
        return view('cursos.show', compact('curso'));
    }
}
