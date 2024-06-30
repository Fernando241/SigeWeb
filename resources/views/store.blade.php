<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba</title>
</head>
<body>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-body">
                    <h4>Crear nuevo estudiante</h4>
                    <form action="{{  }}" method="POST">
                    @csrf token de seguridad
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" required>
                        <label for="apellido">Apellido</label>
                        <input type="text" name="apellido" id="apellido" class="form-control" required>
                        <label for="cedula">Cédula</label>
                        <input type="text" name="cedula" id="cedula" class="form-control" required>
                        <label for="telefono">Teléfono</label>
                        <input type="text" name="telefono" id="telefono" class="form-control" required>
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" required>
                        <label for="direccion">Dirección</label>
                        <input type="text" name="direccion" id="direccion" class="form-control" required>
                        <input type="submit" value="Crear" class="btn btn-primary">
                    </form>
                </div>
    </div>
</body>
</html>