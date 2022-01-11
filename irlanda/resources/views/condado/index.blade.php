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

<div class="container">
<div class="box">
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center" style="font-size:3vw;" id="irlanda">Irlanda</h1>
            </div>
        </div>
    </div>
    
    <div class="row">
    <div class="col-sm-2"></div>
  <div class="col-sm-4">
    <p class="text-center" style="font-size:1vw;">
Irlanda (irlandés: Éire, pronunciado [ˈeːɾʲə]; inglés: Ireland, pronunciado /ˈaɪəɹlənd/) oficialmente la República de Irlanda (en irlandés: Poblacht na hÉireann; en inglés: Republic of Ireland) para diferenciarla de Irlanda del Norte, es un país soberano, miembro de la Unión Europea, que ocupa la mayor parte de la isla homónima. Su capital es Dublín, situada en el este de la isla. El país tiene una única frontera terrestre, con Irlanda del Norte, una de las naciones constitutivas del Reino Unido. La isla está rodeada por el océano Atlántico y tiene el mar Céltico al sur, el canal de San Jorge
    </p></div>
  <div class="col-sm-4"><img src="imagen/main/dublin.jpg" alt="dublin" style="width:400px;height:300px;"></div>
</div>
<div class="col-sm-2"></div>

<br>

<div class="container my-5" >
        <div class="row">
            <div class="col-12">
            <h3 class="text-center" style="font-size:1.5vw;"> Explora la isla de Irlanda</h3>
            </div>
        </div>
    </div>

    <div class="row">
    <div class="col-sm-2"></div>
  <div class="col-sm-4">
      <br>
      <p class="text-center" style="font-size:1vw;">
                            Sigue los pasos de los gigantes en la costa de la Calzada; disfruta del mosaico de sabores irlandeses en Cork; déjate cautivar por las historias que las gentes de Dublín tienen que contarte; capitanea un barco por el Río Shannon; revive la maravilla del Titanic en Belfast; o atrapa un momento mágico en la ruta costera del Atlántico. Irlanda es algo más que un destino. Es un sentimiento. Es la emoción de encontrarte en lo alto de imponentes acantilados y atreverte a mirar hacia abajo. Es la calidez de una sesión de música tradicional en un pub donde los lugareños te sacan a bailar. Es el tacto
                        </p>
                </div>
                <div class="col-sm-4"><img src="imagen/main/mapa.jpg" alt="mapa" style="width:266px;height:325px;"></div>

</div>
<div class="col-sm-2"></div>


<br>
<br>


<div class="row">
  <div class="col-sm-6"><p class="text-right"><?php
    echo date('l jS \of F Y h:i:s A');
                    ?></div>

<br>
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