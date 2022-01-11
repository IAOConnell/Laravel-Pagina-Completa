<!DOCTYPE html>

<base href="<?= asset(""); ?>">
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Parcial</title>

    <!--Bootstrap y CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilotres.css">

    <!-- JS-->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

<!-- Fuentes -->
<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Abel&display=swap" rel="stylesheet">


</head>
<body class="pb-5">
    <nav class="navbar bg-primary navbar-expand-lg navbar-dark navbar-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>   
        </button>
        
       
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="navbar-nav mr-auto">
            <ul class="navbar-nav mr-auto">

            <li class="nav-item">
                <a class="nav-link" href="<?= url("/"); ?>">Inicio</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= url("/galeria"); ?>">Galeria</a>
            </li>

        </ul>
            </ul>
            
            
            
                        <?php
                if(empty($_SESSION["usuario"])):
            ?>
                <ul class="navbar-nav mr-0">
                    <li class="nav-item">
                        <a href="registrarse.php" class="nav-link">Registrarse</a>
                    </li>
                
                    <li class="nav-item">
                        <a href="ingresar.php" class="nav-link">Conectarse</a>
                    </li>
                </ul>

            <?php
                else:
            ?>
                <ul class="navbar-nav mr-0">
                    <li class="nav-item">
                        <span class="nav-link"><?= $_SESSION["usuario"]["usuario"]; ?></span>
                    </li>
                    
                     <li class="nav-item">
                            <a href="panel/index.php" class="nav-link">Panel de Control</a>
                        </li>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link">Salir</a>
                    </li>

                </ul>   
            <?php
                endif;
            ?>
            
            
        </div>
            
    </nav>
    
    <header>
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-2 my-4">
                    <a href="index.php"><img src="imagen/general/logoir.png" alt="logo" class="img-fluid"></a>
                </div>
            </div>
        </div>
    </header>

    <!--- CONTENIDO ---->
    

<div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1 class="justificado">Editar Condado</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-12 col-md-6 col-xl-4 mx-5 mt-1 mb-3">
                <div class="card">
                    <div class="card-body">
                        <form action="<?= route("condados.update", $condado->id); ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="<?= csrf_token() ?>">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="nombreviejo" value="<?= str_replace(" ","_",$condado->nombre);?>">
                            <div class="form-group">
                                <label class="justificado" for="nombre">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del Condado" value="<?= $condado->nombre ?>">
                            </div>


                            <div class="form-group">
                                <label for="descripcion">Descripción</label>
                                <textarea type="text" class= "form-control" name="descripcion" id="descripcion" placeholder="Descripción" ><?= $condado->descripcion ?></textarea>


                            <div class="form-group">
                                <div class="form-group">
                                  <label for="imagen"></label>
                                  <input type="file" class="form-control-file" name="imagen" id="imagen" aria-describedby="fileHelpId">
                                    <small id="fileHelpId" class="form-text text-muted">El formato de la imágen debe ser <b>.png</b></small>
                                </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="<?= $condado->imagen; ?>" alt="<?= $condado->nombre;  ?>" class="img-fluid">
                                        </div>
                                    </div>
                            </div>
                           
                            <button type="submit" class="btn btn-secondary btn-block">Editar</button>
                                </div>
                        </form>
                </div>
            </div>
        </div>
        
    </div>
    </div>
    
<!---------------FIN CONTENIDO -------------------->
    

    <div class="container-fluid px-0">
        <footer class="page-footer font-small blue">

    <div> <p>Redes sociales</p>  
        <img src="imagen/general/facebook.png" alt="facebook logo"> 
    <img src="imagen/general/twitter.png" alt="twitter logo">
    <img src="imagen/general/instagram.png" alt="instagram logo">
    <img src="imagen/general/tumblr.png" alt="tumblr logo"></div> 
    <div class="footer"></div>
</footer>
    </div>
</body>
</html>