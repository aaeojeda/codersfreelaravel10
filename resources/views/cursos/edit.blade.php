@extends('layouts.plantilla')

@section('title','Cursos - creación')
    
@section('content')
    <a href="{{route('cursos.index')}}">Lista de cursos</a>&nbsp;|&nbsp;
    <a href="{{route('cursos.show',$curso->id)}}">Ver curso</a>
    <h1>Editando un curso</h1>
    <form action="{{route('cursos.update',$curso->id)}}" method="POST">
        @csrf
        @method('put')
        <label>
            Nombre
            <br>
            <input type="text" name="nombre" value="{{$curso->nombre}}">
        </label>
        <br><br>
        <label>
            Descripcion
            <br>
            <textarea name="descripcion" rows="5">{{$curso->descripcion}}</textarea>
        </label>
        <br><br>
        <label>
            Categoria
            <br>
            <input type="text" name="categoria" value="{{$curso->categoria}}">
        </label>
        <br><br><br>
        <input type="submit" value="Actualizar">
    </form>
@endsection