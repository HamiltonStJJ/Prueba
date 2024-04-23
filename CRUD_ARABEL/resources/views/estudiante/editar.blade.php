@extends('estudiante/template')
@section('title','EditarEstudiante')
@section('content')
<h1>Editar Estudiante</h1>
<form action="{{ url('estudiantes/'.$estudiante['cedula']) }}" method="post">
    @method("PUT")
    @csrf
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" value="{{ $estudiante['nombre'] }}" required>
    <label for="nombre">Apellido:</label>
    <input type="text" name="apellido" value="{{ $estudiante['apellido'] }}" required>
    <label for="nombre">Direccion:</label>
    <input type="text" name="direccion" value="{{ $estudiante['direccion'] }}" required>
    <label for="nombre">Telefono:</label>
    <input type="text" name="telefono" value="{{ $estudiante['telefono'] }}" required>
    <!-- Repite lo mismo para los demás campos del estudiante -->
    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
</form>

@endsection
