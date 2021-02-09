<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Inicio</title>
</head>
<body>
    <form  action="{{ route('Home/store')}}"  method="POST">
        @csrf
        <div class="container">
            <div class="row">
                <div class=" col-12 container-fluid bg-primary py-3 text-center" >
                    <div class="container text-white-50">
                        <h1 class="display-3"><b>Universidad margarita</b></h1>
                        <p class="lead">
                            Bienvenido a la margarita
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-5">
                    </div> 
                    <div class="col-6 py-3">
                        <label>
                            usuario
                            <input type="integer" class="form-control"name="usuario">
                        </label>
                    </div>  
                    <div class="col-3">
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-5">
                    </div> 
                    <div class="col-6 py-0">

                        <label>
                            contraseña
                            <input type="string" class="form-control" name="contrasena">
                        </label>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-5">
                    </div> 
                    <div class="col-6 py-2">
                        <button class="btn btn-primary btn-lg" type="submit">Entrar</button>
                    </div>
                </div>
            </div>

            

        </div>   
    </form>   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>