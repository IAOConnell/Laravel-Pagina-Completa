<!DOCTYPE html>

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

            <?php if (Auth::check())
            { ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= route("condados.index"); ?>">Panel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= route("login"); ?>">Mi Sesión</a>
            </li>
            <?php } else { ?>

            <li class="nav-item">
                <a class="nav-link" href="<?= route("login"); ?>">Iniciar Sesión</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= route("register"); ?>">Registrarse</a>
                <?php } ?>
            </li>

        </ul>
            </ul>

            
            
        </div>
            
    </nav>
    
    <header>
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-2 my-4">
                    <a href="<?= url("/"); ?>"><img src="imagen/general/logoir.png" alt="logo" class="img-fluid"></a>
                </div>
            </div>
        </div>
    </header>

    <!--- CONTENIDO ---->
<div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1 id="galeria">Galería</h1>
            </div>
        </div>


        <div class="row">
        <?php
                            
                            foreach($condado as $county):
                         ?>
            <div class="col-12 col-md-3 my-3">
                <div class="card-deck">
                    <div class="card border-default">
                        <div class="card-body">
                            <h2><?php print_r($county->nombre) ?></h2>
                            <img img width="200" src="<?php print_r($county->imagen) ?>" alt="<?= $county->nombre; ?>">
                            <div style="height:100px;width:200px;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;">
                            <p><?php print_r($county->descripcion) ?></p>
</div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                             endforeach;
                             ?>
            

            
            
            

        </div>

        
    </div>
 <div class="col-sm-6"><p class="text-right"><?php
    echo date('l jS \of F Y h:i:s A');
                    ?></div>
    
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