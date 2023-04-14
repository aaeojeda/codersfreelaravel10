@extends('layouts.plantilla')

@section('title','Cursos - creación')
    
@section('content')
    <a href="{{route('cursos.index')}}">Regresar</a>
    <h1>Creando un nuevo curso</h1>
    <form action="{{route('cursos.store')}}" method="POST">
        @csrf
        <label>
            Nombre
            <br>
            <input type="text" name="nombre" value="{{old('nombre')}}">
        </label>
        @error('nombre')
            <br><small><i>*{{$message}}</i></small><br>
        @enderror
        <br><br>
        <label>
            Descripcion
            <br>
            <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
        </label>
        @error('descripcion')
        <br><small><i>*{{$message}}</i></small><br>
        @enderror
        <br><br>
        <label>
            Categoria
            <br>
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>
        @error('categoria')
        <br><small><i>*{{$message}}</i></small><br>
        @enderror
        <br><br><br>
        <input type="submit" value="Registar">
    </form>
@endsection