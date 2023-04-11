@extends('layouts.plantilla')

@section('title','Cursos - mostrando')
    
@section('content')
    <h1>El curso seleccionado es <?php echo $curso; ?> con una duración de <?php echo $duracion; ?></h1>
@endsection