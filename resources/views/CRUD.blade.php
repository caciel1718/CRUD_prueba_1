<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">


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
        <form action="">
            <label for="">Ingresa nuevo usuario..!</label>
            <input  type="button" value="submit">
        </form>
    </section>
</body>
</html>