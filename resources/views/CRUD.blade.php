<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <title>CRUD</title>
</head>
<body>
    <form action="" method="get">
    </form>
    
    <section class="DATOS">
        <div class="col-md-8">
            <table class="table table-dark">
                <thead>
                    <tr class="table-primary">
                        <td>Nombre</td>
                        <td colspan="2">Apellido</td>
                        <td>Edad</td>
                    </tr>
                </thead>
                @foreach ($users as $user)
                <tbody>
                    <tr>
                        <th scope="row">{{$user->name}}</th>
                        <td colspan="2" class="table-active">{{$user->lastname}}</td>
                        <td>{{$user->edad}}</td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </section>
    
    <section class="col-md-4">
        <form id="mainForm">
            <label for="nuevoUsuario">Ingresa nuevo usuario..!</label>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formularioModal">
                Abrir Formulario
            </button>
        </form>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="formularioModal" tabindex="-1" aria-labelledby="formularioModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formularioModalLabel">Nuevo Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @include('formulario')
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
