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


<body>
<div class="row my-4">
    <article class="col-12">
        <div class="card">
            <div class="card-header">
                <h1 class="text-secondary card-title justificado">Condados</h1>
            </div>
            <div class="card-body">
            <a href="<?= route("condados.create") ?>" class="btn btn-sm btn-success float-right my-2">Agregar Condado</a>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm fs-90">
                        <thead class="thead-light text-center">
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Imágen</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody class="text-center">

                            <?php
                            
                           foreach($condados as $county):
                        ?>
                                <tr>
                                    <td class="py-3"><h2><?= $county->nombre;?></h2></td>
                                    <td class="py-3"><p><?= $county->descripcion; ?></p>
                                    </td>
                                    <td class="py-3"><img width="200" src="<?php print_r($county->imagen) ?>" alt="<?= $county->nombre; ?>"></td>
                                    <td class="py-3">
                                            <div class="separador2">
                                                    <a href="<?= route("condados.edit",$county->id); ?>" class="btn btn-sm btn-primary">Editar</a>
                                            </div>
                                            <form action="<?=route("condados.delete",$county->id);?>" method="post">
                                                    <input type="hidden" name="_token" value="<?= csrf_token() ?>">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit"  class="btn btn-sm btn-danger">Borrar</button>
                                            </form>
                                    </td>
                                </tr>
                            <?php
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </article>
</div>
</section>
</body>

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