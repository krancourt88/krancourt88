<!DOCTYPE html>
<html lang="fr-ca">
<head>
    <meta charset="UTF-8">
    <title>Piscine</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport"  content="width=device-width,initial-scale=1, shrink-to-fit=no">

</head>
<body>

<?php
include "header.php"
?>

<nav class="navbar navbar-expand-lg fixed-top">
    <a class="navbar-brand" href="#">L'ÉTÉ</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="index.php">Accueil<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="Piscine.php">Piscine</a>
            <a class="nav-item nav-link" href="LaPlage.php">Drink</a>
        </div>
    </div>
</nav>


<!--- Entete ---->
<div class="container-fluid bg h-100">
    <div class="row text-center align-items-center h-100">
        <div class="offset-xl-3 col-xl-6">
            <h1>LA PISCINE</h1>
            <p class="titre">Un indispensable pour l'été !</p>
        </div>
    </div>
</div>

<!--- Jumbotron ---->
<div class="jumbotron jumbotron-fluid">
    <div class="container-fluid">
        <h1 class="display-4">VIVE L'EAU</h1>
        <p class="lead">Parfait pour la nage, des réunions d'amis et un p'tit drink</p>
    </div>
</div>

<!--- Carrousel --->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/matelas.jpg" height="1000" width="1920"/>
        </div>
        <div class="carousel-item">
            <img src="img/nager.jpg" height="1000" width="1920"/>
        </div>
        <div class="carousel-item">
            <img src="img/drink.jpg" height="1000" width="1920"/>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>

<!--- Formulaire --->

<div class="row text-center py-5">
    <div class="col-xl-10 offset-1">
        <h2>Inscription forfait piscine illimitée</h2>
    </div>
</div>

<div class="container-fluid py-5">
    <form>
        <div class="row">
            <div class="form-group col-md-3">
                <input type="email" class="form-control" id="inputEmail4" placeholder="Nom">
            </div>
            <div class="form-group col-md-3">
                <input type="password" class="form-control" id="inputPassword4" placeholder="Prénom">
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control" id="inputAddress" placeholder="Adresse">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <input type="email" class="form-control" id="inputEmail4" placeholder="Ville">
            </div>
            <div class="form-group col-md-3">
                <input type="password" class="form-control" id="inputPassword4" placeholder="Code postal">
            </div>
            <div class="form-group col-md-3">
                <input type="text" class="form-control" id="inputAddress" placeholder="Téléphone">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress2">Message</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="texte">
        </div>
    </form>
</div>

<?php
include "footer.php"
?>


<meta name = "description" content = "Se baigner dans une piscine l'été">
<meta name = " keywords " content = " Piscine, nager, drink " >
<meta name = " author " content = "Karine Rancourt" >



<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.js"></script>


</body>
</html>
