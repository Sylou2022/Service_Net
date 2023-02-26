

<?php
$host     = 'localhost';
$username = 'root';
$password = '';
$dbname   ='service_net';

$conn = new mysqli($host, $username, $password, $dbname);
if(!$conn){
    die("Cannot connect to the database.". $conn->error);
}
?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <title>Présentation</title>
    
  

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="favicon.ico" />

<link rel="stylesheet" href="footer.css">
    </head>

        
    <style>
  .texte{
    text-align: center;
    color: black;
    text-align: justify;
  }
</style>


<body  > 
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="Accueil.php">Accueil</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="Presentation.php">Présentation</a></li>
      <li><a href="Service.php">Services</a></li>
    
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="users.php"><span class="glyphicon glyphicon-user"></span> S'inscrire</a></li>
      <li><a href="Compte.php"><span class="glyphicon glyphicon-log-in"></span> Compte</a></li>
    </ul>
  </div>
</nav>
    <br><br><br>
    


<div class="texte">

<h2 style="color: black;text-align:center; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">QUI SOMMES NOUS?</h2>
    <br>
    <p style="color: black;text-align:justify; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; width: 900px;margin-left:300px;">Services Net est une entreprise qui permet à tout le monde un accès rapide et 
        fiable <br> aux différentes demandes de services. Elle est constituée de multiples spécialistes </p>
        <p style="color: black;text-align:justify; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; width: 900px;margin-left:300px;"> dans des domaines qui regorgent notre vie quotidienne.</p>
         
<p class="texte" style="color: black;text-align:justify; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; width: 900px;margin-left:300px;">Les artisans requis pour vous favorez un meilleur sevice, sont des specialistes <br> et professsionnels
     du métier. L'objectif est de vous octroyer un excellent service <br> à travers un contact direct et rapide
      dans le site. Vous pouvez désormais accèder <br> à tous les métiers qui vous sont présentés afin de vous 
      proccurer un service parmi <br> d'autres: réparation, contruction, location, vérification etc ... </p>
    
    <br>
    
    <h2 style="color: black;text-align:center; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Fonctionnement</h2>
    
    <p class="fonct" style="color: black;text-align:justify; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; width: 900px;margin-left:300px;">  Service a été constitué pour vous permettre un accès rapide aus différents <br> professionnels et spécialistes 
        du métiers. Vérifiez le planning de nos professionnels <br> et contactez-les pour avoir un rendez-vous et préciser un dévis.
    </p>
   <br>
    
    <h2 style="color: black;text-align:center; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Evolution</h2>
    
    <p class="fonct-1" style="color: black;text-align:justify; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; width: 900px;margin-left:300px;"> Service net s'agrandit grace à la forte adhésion de la clientèle.<br> professionnels et spécialistes 
      Cette dernière participe grandement à l'évolutionde de  <br> l'entreprise car elle a pour objectif d'assister tout le monde<br> aussi bien dans la construction, les réfectionnements
      ou plutot dans la location. 
    </p>
<br>
    <h2 style="color: black;text-align:center; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Etapes à suivre</h2>
    
    <p class="fonct-1" style="color: black;text-align:justify; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; width: 900px;margin-left:300px;" > Allez sur la page Service et choisissez votre service selon votre besoin.<br> Ensuite, Vérifiez la proximité du professionnel sur le tableau 
     <br> Consultez la disponibilité du technicien et contactez-nous<br> N'oubliez pas de créez votre compte pour garder l'historique de vos factures et paiement.
    
    </p>
    
    <div  style="text-align: center;">
     <img src="image/06 38 44 54 42.png" alt="" class="image" width="200" height="170"></div>
    <br>
   </div>
 
   <div class="footer-basic">
    <footer>
        <div class="social"><a href="https://www.instagram.com/?hl=fr"><i class="icon ion-social-instagram"></i></a><a href="https://www.snapchat.com/l/fr-fr/download"><i class="icon ion-social-snapchat"></i></a><a href="https://twitter.com/?lang=fr"><i class="icon ion-social-twitter"></i></a><a href="https://fr-fr.facebook.com/"><i class="icon ion-social-facebook"></i></a></div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="Accueil.php">Accueil</a></li>
            <li class="list-inline-item"><a href="#">Présentation</a></li>
            <li class="list-inline-item"><a href="Metiers.php">Métiers</a></li>
            <li class="list-inline-item"><a href="Documentation.html">Documentation</a></li>
            <li class="list-inline-item"><a href="PolitiqueConf.html">Politique confidentialité</a></li>
        </ul>
        <p class="copyright">Service Net © 2022</p>
    </footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>


  </body>

</html>

<!-- credit to https://epicbootstrap.com/snippets/footer-basic -->
