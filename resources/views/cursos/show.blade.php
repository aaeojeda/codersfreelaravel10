@extends('layouts.plantilla')

@section('title','Cursos - mostrando')
    
@section('content')
<a href="{{route('cursos.index')}}">Regresar</a>&nbsp;|&nbsp;
<a href="{{route('cursos.edit',$curso->id)}}">Editar curso</a>
    <h1>Curso:: {{$curso->nombre}}</h1>
    <br>
    <h4>Categoria:: {{$curso->categoria}}</h4>
    <br>
    <h3>Descripción:: {{$curso->descripcion}}</h3>
@endsection