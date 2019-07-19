<!DOCTYPE html>
<html lang="fr-ca" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>L'été</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport"  content="width=device-width,initial-scale=1, shrink-to-fit=no">

</head>
<body>

<?php
    include "header.php"
?>


<div class="container-fluid bgAccueil h-100">
    <div class="row align-items-center text-center h-40">
        <div class="offset-xl-3 col-xl-6">
            <h1>Passions de l'été</h1>
            <p>Quel sport pratiques tu?</p>
        </div>
    </div>
</div>


<!--- Jumbotron ---->
<div class="jumbotron jumbotron-fluid">
    <div class="container-fluid">
        <h1 class="display-4">La natation</h1>
        <p class="lead">Mon sport de prédilection</p>
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
            <img src="img/nager-dans-un-lac.jpg" height="900" width="1920"/>
        </div>
        <div class="carousel-item">
            <img src="img/natation-eau-libre.jpg" height="900" width="1920"/>
        </div>
        <div class="carousel-item">
            <img src="img/nageur-de-lac.jpg" height="900" width="1920"/>
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
<div class="container-fluid py-5">

    <div class="row text-center py-5">
        <div class="col-xl-10 offset-1">
            <h2>Pour toutes questions</h2>
        </div>
    </div>
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


<meta name = "description" content = "La natation">
<meta name = " keywords " content = " Baignade, eau, sport " >
<meta name = " author " content = "Karine Rancourt" >


<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.js"></script>


</body>
</html>
