@extends('layouts.plantilla')

@section('title','Cursos - Inicio')
    
@section('content')
    <h1>Lista de cursos disponibles</h1>
    <!-- se usa el ROUTE para definir la ruta del link -->
    <a href="{{route('cursos.create')}}">Crear un curso</a>
    <ul>
        @foreach ($cursos as $curso)
            <li>[ <a href="{{route('cursos.edit',$curso->id)}}">edit</a> ] - <a href="{{route('cursos.show',$curso->id)}}">{{$curso->nombre}}</a></li>
        @endforeach
    </ul>
    <!-- se usa links para que de forma automatica haga la paginación -->
    {{$cursos->links()}}
@endsection