@extends('estudiante/template')

@section('title','MostrarTodos')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<h1>Lista Estudiantes</h1>

<table class="table">
    <thead>
        <tr>
        <th>Cedula</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Direccion</th>
        <th>Telefono</th>
        </tr>
    </thead>

    <tbody>
        @foreach($estudiantesArray AS $estudiante)
        <tr>
            <td> {{ $estudiante['cedula']}}</td>
            <td> {{ $estudiante['nombre']}}</td>
            <td> {{ $estudiante['apellido']}}</td>
            <td> {{ $estudiante['direccion']}}</td>
            <td> {{ $estudiante['telefono']}}</td>
            
            <td>
            <form action="{{url('estudiantes/'.$estudiante['cedula'])}}" method ="post">
                @method("DELETE")
                @csrf
                <button type ="submit" class ="btn btn-warning">Eliminar</button>
            </form>
            </td>
            <td>
                <a href="{{ url('estudiantes/'.$estudiante['cedula'].'/edit') }}" class="btn btn-secondary">Editar</a>
            </td>

        </tr>@endforeach
    </tbody>
</table>

<a href="{{url('/estudiantes/create')}}" class = "btn btn-success"> Crear Nuevo Estudiantes</a>