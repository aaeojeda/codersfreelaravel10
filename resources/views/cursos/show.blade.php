@extends('layouts.plantilla')

@section('title','Cursos - mostrando')
    
@section('content')
    <h1>Curso:: {{$curso->nombre}}</h1>
    <a href="{{route('cursos.index')}}">Regresar</a>
    <br>
    <h4>Categoria:: {{$curso->categoria}}</h4>
    <br>
    <h3>Descripción:: {{$curso->descripcion}}</h3>
@endsection