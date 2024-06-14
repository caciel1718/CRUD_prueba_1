<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">

    <style>
        /* Opcional: Agrega estilos para el formulario */
        
    </style>

    <title>CRUD </title>
</head>
<body>

    <form action="" method="get">
        

    </form>
    
    <section class="DATOS">
       
        <table class="table table-dark">
            <thead>
                <tr class="table-primary">
                    <td>Nombre</td>
                    <td colspan="2">Apellido</td>
                    <td>Edad</td>

                </tr>
            </thead>
        @foreach ($users as $user )
            <tbody>
             
              <tr>
                <th scope="row">{{$user->name}}</th>
                <td colspan="2" class="table-active">{{$user->lastname}}</td>
                <td>{{$user->edad}}</td>
              </tr>
            </tbody>
            @endforeach
          </table>
       
    </section>
    <section>
        <form id="mainForm">
            <label for="nuevoUsuario">Ingresa nuevo usuario..!</label>
            <input type="button" value="Abrir Formulario" onclick="mostrarFormulario()">
        </form>

        <input type="button" value="ocultar furmulario" onclick="ocultarFormulario()">
        
        <form id="nuevoUsuarioForm">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <br>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required>
            <br>
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <input type="submit" value="Enviar">
        </form>
    
        <script>
            function mostrarFormulario() {
                var formulario = document.getElementById("nuevoUsuarioForm");
                formulario.style.display = "block";
            }
            function ocultarFormulario() {
            var formulario = document.getElementById("nuevoUsuarioForm");
            formulario.style.display = "none";
        }
        </script>
    </section>
</body>
</html>