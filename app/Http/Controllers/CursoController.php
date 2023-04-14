<?php

namespace App\Http\Controllers;

use App\Models\Curso;
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
    public function store(Request $request){

        $request->validate([
            'nombre'=>'required',
            'descripcion'=>'required',
            'categoria'=>'required'
        ]);

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

        $curso->nombre = $request->nombre;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        $curso->save();
        
        return redirect()->route('cursos.show',$curso->id);
    }
}
