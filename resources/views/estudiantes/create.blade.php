@extends('templates.template')

@section('title', 'Crear nuevo Estudiante')

@section('titulo', 'Crear nuevo Estudiante')

@section('contenido')
    {{-- crear formulario para ingresar Datos --}}
    <div class="formulario">
        <h2>Crear nuevo Estudiante</h2>
        <form action="{{ route('estudiantes.store') }}" method="POST">
            @csrf {{-- token de seguridad - obligatorio --}}
            <div class="datoEstu">
                <label for="documento" class="columna">Documento</label>
                <input type="text" class="form-control" id="documento" name="documento" required>
            </div>
            <div class="datoEstu">
                <label for="nombres" class="columna">Nombres</label>
                <input type="text" class="form-control" id="nombres" name="nombres" required>
            </div>
            <div class="datoEstu">
                <label for="apellidos" class="columna">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" required>
            </div>
            <div class="datoEstu">
                <label for="telefono" class="columna">Telefono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" required>
            </div>
            <div class="datoEstu">
                <label for="direccion" class="columna">Dirección</label>
                <input type="text" class="form-control" id="direccion" name="direccion" required>
            </div>
            <div class="datoEstu">
                <label for="acudiente" class="columna">Acudiente</label>
                <input type="text" class="form-control" id="acudiente" name="acudiente" required>
            </div>
            <div class="datoEstu">
                <input type="submit" name="btn_guardar" class="icon1" value="Guardar Datos">
             </div>
        </form>
    </div>
@endsection