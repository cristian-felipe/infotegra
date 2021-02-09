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
    <form  action="students/{id}"  method="POST">
        @csrf
        <div class="container">
            <div class="row">
                <div class=" col-12 container-fluid bg-primary py-5 text-center" >
                    <div class="container text-white-50">
                        <h1 class="display-1"><b>Crear Carrera</b></h1>
                    </div>
                </div>
            </div>
           
            <div class="col-12">
                <div class="row">
                    <div class="col-5">
                    </div>
                    <div class="col-6 py-5">
                        <div class="form-group">
                            <label>
                                <h5> Codigo del usuario </h5>
                                <input type="integer" class="form-control form-control-lg" name="usuario">
                            </label> 
                        </div>  
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="row">
                    <div class="col-5">
                    </div>
                    <div class="col-6 py-5">
                        <div class="form-group">
                            <label>
                                <h5> contraseña </h5>
                                <input type="string" class="form-control form-control-lg" name="contrasena">
                            </label> 
                        </div>  
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="row">
                    <div class="col-5">
                    </div>
                    <div class="col-6 py-5">
                        <div class="form-group">
                            <label>
                                <h5> Ingresar Carrera </h5>
                                <input type="string" class="form-control form-control-lg" name="carrera">
                            </label> 
                        </div>  
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-5">
                    </div>
                    <div class="col-6 py-0">
                        <div class="form-group">
                            <label>
                                <h5> Ingresar Facultad </h5>
                                <input type="integer" class="form-control form-control-lg" name="usuario">
                            </label> 
                        </div>  
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-5">
                    </div>
                    <div class="col-6 py-5">
                        <div class="form-group">
                            <label>
                                <h5> Ingresar Campus </h5>
                                <input type="integer" class="form-control form-control-lg" name="usuario">
                            </label> 
                        </div>
                            
                    </div>
                </div>
            </div>
            </div>

            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-5">
                    </div> 
                    <div class="col-6 py-0">
                        <button class="btn btn-primary btn-lg" type="submit">Crear</button>
                    </div>
                </div>
            </div>
        </div>   
    </form>   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>