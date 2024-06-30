@extends('templates.template')

@section('title', 'Datos Estudiante')

@section('titulo', 'Datos Estudiante')

@section('contenido')
    <div class="formulario">
        <h2>Editar datos del Estudiante</h2>
        <form action="{{ route('estudiantes.update', $estudiante) }}" method="POST">
            @csrf {{-- token de seguridad - obligatorio --}}
            @method('put') {{-- metodo para modificar los datos --}}
            <div class="datoEstu">
                <label for="documento" class="columna">Documento</label>
                <input type="text" class="form-control" id="documento" name="documento" required value="{{ $estudiante->documento }}">
            </div>
            <div class="datoEstu">
                <label for="nombres" class="columna">Nombres</label>
                <input type="text" class="form-control" id="nombres" name="nombres" required value="{{ $estudiante->nombres }}">
            </div>
            <div class="datoEstu">
                <label for="apellidos" class="columna">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" required value="{{ $estudiante->apellidos }}">
            </div>
            <div class="datoEstu">
                <label for="telefono" class="columna">Telefono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" required value="{{ $estudiante->telefono }}">
            </div>
            <div class="datoEstu">
                <label for="direccion" class="columna">Dirección</label>
                <input type="text" class="form-control" id="direccion" name="direccion" required value="{{ $estudiante->direccion }}">
            </div>
            <div class="datoEstu">
                <label for="acudiente" class="columna">Acudiente</label>
                <input type="text" class="form-control" id="acudiente" name="acudiente" required value="{{ $estudiante->acudiente }}">
            </div>
            <div class="datoEstu">
                <a href="{{ Route('estudiantes.datosEstudiante') }}" class="icon1">Volver</a>
            </div>
        </form>
    </div>
@endsection
