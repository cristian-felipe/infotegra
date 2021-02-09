<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Estudiante</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class=" col-12 container-fluid bg-primary py-3 text-center" >
                <div class="container text-white-50">
                    <h1 class="display-3"><b>Bienvenido</b></h1>
                    <p class="lead">
                        Perfil de estudiante
                    </p>
                </div>
            </div>
        </div>

        <table class="table table-blue table-striped ">
         <thead>
             <th></th>
             <th scope="row">Nombres y Apellidos</th>
             <th>{{$student['Nombres']}} {{$student['Apellidos']}}</th>
             <th></th>
         </thead>
         <thead>
            <th></th>
            <th scope="row">Codigo</th>
            <th>{{$user['Codigo']}}</th>
            <th></th>
        </thead>
        <thead>
            <th></th>
            <th scope="row">Direccion:</th>
            <th>{{$student['Direccion']}}</th>
            <th></th>
        </thead>
        <thead>
           <th></th>
           <th scope="row">Telefono</th>
           <th>{{$student['Telefono']}}</th>
           <th></th>
       </thead>
       <thead>
           <th></th>
           <th scope="row">Ciudad de residencia</th>
           <th>{{$student['Ciudad de residencia']}}</th>
           <th></th>
       </thead>
       <thead>
        <th></th>
        <th scope="row">Ciudad de origen</th>
        <th>{{$student['Ciudad de origen']}}</th>
        <th></th>
       </thead>
       <thead>
        <th></th>
        <th scope="row">Nacionalidad</th>
        <th>{{$student['Nacionalidad']}}</th>
        <th></th>
       </thead>
     </table>
     
     <div class="container">
        <table class="table table-blue table-striped ">
            <thead>
                <th>Carrera</th>
                <th>Facultad</th>
                <th>Campus</th>
                <th>Accion</th>
            </thead>
            <tbody>
                @foreach ($areas as $area)
                    <tr>
                         <td>{{$area->Carrera}}</td>
                         <td>{{$area->Facultad}}</td>
                         <td>{{$area->Campus}}</td>
                         <td>
                             <a class="btn btn-info">Editar</a>
                             <button class="btn btn-danger">Eliminar</button>
                         </td> 
                         
                    </tr>
                @endforeach

            </tbody>

        </table>
     </div>      
        <a href="create" class="btn btn-secondary">Agregar</a>
        <a href="/Home" class="btn btn-secondary" tabindex="5">volver</a>
    </div>
     
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>