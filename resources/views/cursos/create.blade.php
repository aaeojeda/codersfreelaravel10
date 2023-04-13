@extends('layouts.plantilla')

@section('title','Cursos - creación')
    
@section('content')
    <h1>Creando un nuevo curso</h1>
    <form action="{{route('cursos.store')}}" method="POST">
        @csrf
        <label>
            Nombre
            <br>
            <input type="text" name="nombre">
        </label>
        <br><br>
        <label>
            Descripcion
            <br>
            <textarea name="descripcion" rows="5"></textarea>
        </label>
        <br><br>
        <label>
            Categoria
            <br>
            <input type="text" name="categoria">
        </label>
        <br><br><br>
        <input type="submit" value="Registar">
    </form>
@endsection