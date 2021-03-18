<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>-->
    <link rel="stylesheet"  href="css/style.css">
    <link rel=”stylesheet” href=”css/bootstrap.css”>
    <link rel=”stylesheet” href=”css/bootstrap-responsive.css”>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>EBIBLIO-home</title>
</head>

<body>

    <!--LOGIN-->
    <section class="h5" style="margin-bottom:0px"> 
        <div>
            <nav class="navbar navbar-expand-md bg-light navbar-light">
                <span class="border border-info">
                    <img src="img/logo.jpg" class="img-fluid rounded" alt="Responsive image">
                </span>
                 
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!--link navbar-->
                <div class="collapse navbar-collapse navbar-expand-sm text-right" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="list-inline-item font-weight-light">
                            <a href="#" class= "text-decoration-none text-secondary">LOGIN</a>
                            <br>
                            <em>Utente non registrato? </em><a href="#"class= "text-decoration-none text-secondary">REGISTRAZIONE</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>


    <!---IMMAGINE HOME-->
    <section style="margin-top:0px">
        <div class="bg-imag" style="
        background-image: url('img/home.jpg');
        height: 125px; Responsive image"></div>
    </section>

    <!--BIBLIOTECHE/LIBRI/STATISTICHE-->
    <section class="container.fluid" style="margin-bottom:0x">
            <div class="color-turquoise-box text-white">
                <h1 class="text-center"> Benvenuti in EBIBLIO!<h1>
                <h5 style="margin-left:10px;">
                    <em>Accedi alle nostre biblioteche, visualizza il catalogo dei libri o le statistiche:</em>
                <h5>
                <br>
            </div>
        
        <div id="accordion" class="card text-center">
        <!--biblioteche-->
            <div class="card">
                <div class="card-header">
                    <a class="card-link" data-toggle="collapse" href="#biblioteche">
                        <h2 class="text-secondary">BIBLIOTECHE<h2>
                    </a>
                </div>
                <div id="biblioteche" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        <ul style="list-style: none" >
                            <li class="h4 font-weight-light">
                                <em>Lista completa delle biblioteche: </em>
                                <a href="biblioteche.php"class= "text-decoration-none text-secondary">BIBLIOTECHE</a>
                            </li>
                        </ul> 
                </div>    
            </div>

            <!--libri-->
            <div class="card">
                <div class="card-header">
                    <a class="card-link" data-toggle="collapse" href="#libri">
                        <h2 class="text-secondary">LIBRI<h2>
                    </a>
                </div>
                <div id="libri" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        <ul style="list-style: none" >
                            <li class="h4 font-weight-light">
                                <em>Lista completa dei libri: </em>
                                <a href="#"class= "text-decoration-none text-secondary">LIBRI</a>
                            </li>
                        </ul> 
                </div>    
            </div>

            <!--statistiche-->
            <div class="card">
                <div class="card-header">
                    <a class="card-link" data-toggle="collapse" href="#statistiche">
                        <h2 class="text-secondary">STATISTICHE<h2>
                    </a>
                </div>
                <div id="statistiche" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        <ul style="list-style: none" >
                            <li class="h4 font-weight-light">
                                <em>Accedi alle statistiche delle biblioteche: </em>
                                <a href="#"class= "text-decoration-none text-secondary">STATISTICHE</a>
                            </li>
                        </ul> 
                </div>    
            </div>



            
        </div>


    </section>

    <!--COPYRIGHT-->
    <?php
        include('C:\xampp\htdocs\prova_bootstrap\footer.php');
    ?>

</body>
</html>