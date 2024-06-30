@extends('templates.template')

@section('title', 'Lista de Estudiantes')

@section('contenido')
    
    <h2>Lista de Estudiantes</h2>
    <div class="contUno">
        <div class="contDos">
            <br>
            <a href="{{ url('estudiantes/create')}}" class="icon1">Crear nuevo Estudiante</a>
            <br><br>
            <table class="contTres">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Telefono</th>
                        <th>Acudiente</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($estudiantes as $estu)
                        <tr>
                            <td>{{ $estu->idEstudiante }}</td>
                            <td>{{ $estu->nombres }}</td>
                            <td>{{ $estu->apellidos }}</td>
                            <td>{{ $estu->telefono }}</td>
                            <td>{{ $estu->acudiente }}</td>
                            <td class="lineEdit">
                                <a href="{{ Route('estudiantes.show', $estu)}}" class="icon1"><i class='bx bxs-user-detail'></i></a>  
                                <a href="{{ Route('estudiantes.edit', $estu)}}" class="icon2"><i class='bx bxs-edit-alt' ></i></a>
                                <form action="{{ Route('estudiantes.destroy', $estu)}}" method="POST" class="FormularioEliminar">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="icon3" onclick="mostrarAlerta()">
                                        <i class='bx bxs-trash'></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <div class="pagination"> {{-- para avanzar y retroceder entre los datos listados --}}
                @if ($estudiantes->previousPageUrl())
                    <a href="{{ $estudiantes->previousPageUrl() }}" class="icon2"><i class='bx bx-chevrons-left'></i>Previous</a>
                @endif
            
                @if ($estudiantes->nextPageUrl())
                    <a href="{{ $estudiantes->nextPageUrl() }}" class="icon2">Next<i class='bx bx-chevrons-right'></i></a>
                @endif
            </div>
            <br>
        </div>
    </div>

    {{-- //script a partir de aqui --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function mostrarAlerta() {
        Swal.fire({
            title: '¿Estás seguro?',
            text: "No podrás revertir esto.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, borrarlo'
        }).then((result) => {
            if (result.isConfirmed) {
                // Envía el formulario para eliminar el registro
                document.querySelector('.FormularioEliminar').submit();
            }
        });
    }
</script>
    
@endsection