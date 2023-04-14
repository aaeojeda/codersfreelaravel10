<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Http\Requests\StoreCurso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        $cursos = Curso::orderby('id','desc')->paginate(5);
        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }
    
    
    //Si la validación se hace desde un Request
    public function store(StoreCurso $request){
    //Si la validación se hace en el controlador se pone como sigue
    //public function store(Request $request){

        /*
        La validación se puede hacer aqui, pero por organización se movió
        al request app/Http/Requests/StoreCurso.php
    
        $request->validate([
            'nombre'=>'required|min:5|max:10',
            'descripcion'=>'required',
            'categoria'=>'required'
        ]);
        */

        $curso = new Curso();
        $curso->nombre = $request->nombre;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        $curso->save();
        
        return redirect()->route('cursos.show',$curso->id);
    }

    public function show($id){ 
        //se puede sustituir por el mismo métood de edit para evitar lineas 
        //de código como el FIND($ID)
        
        $curso = Curso::find($id);
        // return view('cursos.show',['curso'=>$curso]); //opcion 1
        // return view('cursos.show', compact('curso','duracion')); //opcion 2
        return view('cursos.show', compact('curso'));
    }
    public function edit(Curso $curso){
        
        return view('cursos.edit', compact('curso'));
    }
    public function update(Request $request, Curso $curso){

        $request->validate([
            'nombre'=>'required',
            'descripcion'=>'required',
            'categoria'=>'required'
        ]);

        $curso->nombre = $request->nombre;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        $curso->save();
        
        return redirect()->route('cursos.show',$curso->id);
    }
}
