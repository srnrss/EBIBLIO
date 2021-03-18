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
    

    <title>EBIBLIO-biblioteche</title>
</head>

<!--BIBLIOTECA-->
<body>

<!--COPYRIGHT-->
    <?php
        include('C:\xampp\htdocs\prova_bootstrap\header.php');
    ?>

      <!---IMMAGINE BIBLIOTECHE-->
      <section class= "margin-top:0px">
        <div class="bg-image" style="
        background-image: url('img/biblioteca.jfif');
        height: 125px;"></div>
    </section>

<!--ELENCO BIBLIOTECHE-->
    <section class="containerfluid" style="margin-bottom:0x">
    <div class="color-turquoise-box text-white">
        <h1 class="text-center"> BIBLIOTECHE<h1>
        <h5 style="margin-left:10px;">
            <em>Lista completa delle biblioteche e delle relative informazioni:</em>
        <h5>
        <br>
    </div>

    <div id="accordion" class="card text-center">

        <div class="card">
            <div class="card-header">
                <a class="card-link" data-toggle="collapse" href="#collapseOne">
                    <h2 class="text-secondary">Biblioteca 1</h2>
                </a>
            </div>
            <div id="collapseOne" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    Posti totali:
                    <br>Posti disponibili:
                    <br>Rete ethernet:
                    <br>Presa corrente:
                    <br>telefono:
                    <br>Indirizzo:
                        <ul style="list-style-type:none">
                            <li>
                                <a>Libri disponibili:</a>
                                <br>    
                                <a>Galleria foto:</a>
                            </li>
                        </ul>
                    <button class="btn btn-success" type="submit">Prenota un posto </button>
                </div>    
            </div>
        </div>
            
        <div class="card">
            <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                    <h2 class="text-secondary">Biblioteca 2</h2>
                </a>
            </div>
            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    Posti totali:
                    <br>Posti disponibili:
                    <br>Rete ethernet:
                    <br>Presa corrente:
                    <br>telefono:
                    <br>Indirizzo:
                        <ul style="list-style-type:none">
                            <li>
                                <a>Libri disponibili:</a>
                                <br>    
                                <a>Galleria foto:</a>
                            </li>
                        </ul>
                    <button class="btn btn-success" type="submit">Prenota un posto </button>

                </div>    
        </div>

        <div class="card">
            <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                    <h2 class="text-secondary">Biblioteca 3</h2>
                </a>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    Posti totali:
                    <br>Posti disponibili:
                    <br>Rete ethernet:
                    <br>Presa corrente:
                    <br>telefono:
                    <br>Indirizzo:
                        <ul style="list-style-type:none">
                            <li>
                                <a>Libri disponibili:</a>
                                <br>    
                                <a>Galleria foto:</a>
                            </li>
                        </ul>
                    <button class="btn btn-success" type="submit">Prenota un posto </button>
                </div>    
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                    <h2 class="text-secondary">Biblioteca 4</h2>
                </a>
            </div>
            <div id="collapseFour" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    Posti totali:
                    <br>Posti disponibili:
                    <br>Rete ethernet:
                    <br>Presa corrente:
                    <br>telefono:
                    <br>Indirizzo:
                        <ul style="list-style-type:none">
                            <li>
                                <a>Libri disponibili:</a>
                                <br>    
                                <a>Galleria foto:</a>
                            </li>
                        </ul>
                    <button class="btn btn-success" type="submit">Prenota un posto </button>
                </div>    
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">
                    <h2 class="text-secondary">Biblioteca 5</h2>
                </a>
            </div>
            <div id="collapseFive" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    Posti totali:
                    <br>Posti disponibili:
                    <br>Rete ethernet:
                    <br>Presa corrente:
                    <br>telefono:
                    <br>Indirizzo:
                        <ul style="list-style-type:none">
                            <li>
                                <a>Libri disponibili:</a>
                                <br>    
                                <a>Galleria foto:</a>
                            </li>
                        </ul>
                    <button class="btn btn-success" type="submit">Prenota un posto </button>
                </div>    
            </div>
        </div>

    </div>
    
    </section>

 <!--COPYRIGHT-->
<?php
  include('C:\xampp\htdocs\prova_bootstrap\footer.php');
  ?>
</body>
    
</body>
</html>