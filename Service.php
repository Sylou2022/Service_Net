
<?php
// Informations d'identification
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'service_net');
 
// Connexion à la base de données MySQL 
$conn = mysqli_connect("localhost", "root", "", "service_net");
 
// Vérifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>

 


 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
  <head>
    <meta charset="utf-8">
    
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Services</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="icon" href="favicon.ico" />
        <link rel="stylesheet" href="footer.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">




    <script type="text/javascript">
    $(document).ready(function(){
      $("select.service").change(function(){
        var service = $(this).children("option:selected").val();
        alert("Vous avez choisi le : " + service + " ; puis VALIDER");
       
        
      });
    });
           
 
    </script>

 
<style>
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
</style>
    


</head>
<body>

 
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="Accueil.php">Accueil</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="Service.php">Services</a></li>
      <li><a href="Presentation.php">Présentation</a></li>
    
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="users.php"><span class="glyphicon glyphicon-user"></span> S'inscrire</a></li>
      <li><a href="Compte.php"><span class="glyphicon glyphicon-log-in"></span> Compte</a></li>
    </ul>
  </div>
</nav>
   <br><br>
        </head>
     
        <body>
 
       
    
<div style="text-align: right;margin-right: 5px">
            <form action="Professionnels.php" method="post">
            <label style="color: black;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Sélectionner un service:</label>  
            <select class="service" style="color: red;" required>
           <option value=""> </option>
              <option value="Service Traiteur"style="color: red;">Service Traiteur</option>
              <option value="Service Menuiserie"style="color: red;">Service Menuiserie</option>
              <option value="Service Carrelage"style="color: red;">Service Carrelage</option>
              <option value="Service Maçon"style="color: red;">Service Maçon</option>
              <option value="Service Couture"style="color: red;">Service Couture</option>
              <option value="Service Transport"style="color: red;">Service Transport</option>
              <option value="Service Peinture"style="color: red;">Service Peinture</option>
              <option value="Service Plomberie"style="color: red;">Service Plomberie</option>
              <option value="Service Informatique"style="color: red;">Service Informatique</option>
              <option value="Service Electrique"style="color: red;">Service Electricien</option>
              <option value="Service Electrique"style="color: red;">Service Mécanique</option>
              <option value="Service Electrique"style="color: red;">Service Tapissier</option>
                     
           <input type="hidden"  id="service" name="service" value= "services" disabled/>
           <button onclick="enable()" name="submit" type="submit"  id="btn_envoyer"  class="btn btn-outline-warning mb-2" style="background-color: orange; color:black;" required>OK</button>        

          
        </form>        
            </div>
<h2 style="color: black;text-align:center; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Les Différents Services</h2>
<br><br>
<div class="responsive">
  <div class="gallery">   
      <img src="image/Services/carlage26.jpg" alt="Cinque Terre" width="600" height="400">
    </a>
    <div class="desc" style="color: red;">Service Carrelage</div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">    
      <img src="image/Services/elctric12.jpg" alt="Forest" width="600" height="400">
    </a>
    <div class="desc"style="color: red;"> Electricien Batiment</div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">   
      <img src="image/Services/Macn.jpg" alt="Northern Lights" width="600" height="400">
    </a>
    <div class="desc"style="color: red;">Service Maçonnerie</div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">    
      <img src="image/Services/PNT5.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc"style="color: red;">Service Peinture</div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">    
      <img src="image/Services/RTT1.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc"style="color: red;">Service Traiteur</div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">   
      <img src="image/Services/voiturage2.png" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc"style="color: red;">Service Transport</div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">    
      <img src="image/Services/Service_tailleur1.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc"style="color: red;">Service Couture</div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">    
      <img src="image/Services/repordi68.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc"style="color: red;">Service Informatique</div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">    
      <img src="image/Services/mecannn2.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc"style="color: red;">Service Mécanique</div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">   
      <img src="image/Services/tapissier2.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc"style="color: red;">Service Tapissier</div>
  </div>
</div>
<div class="clearfix"></div>
<br><br><br>
<div class="footer-basic">
    <footer>
        <div class="social"><a href="https://www.instagram.com/?hl=fr"><i class="icon ion-social-instagram"></i></a><a href="https://www.snapchat.com/l/fr-fr/download"><i class="icon ion-social-snapchat"></i></a><a href="https://twitter.com/?lang=fr"><i class="icon ion-social-twitter"></i></a><a href="https://fr-fr.facebook.com/"><i class="icon ion-social-facebook"></i></a></div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="Accueil.php">Accueil</a></li>
            <li class="list-inline-item"><a href="Presentation.php">Présentation</a></li>
            <li class="list-inline-item"><a href="Metiers.php">Métiers</a></li>
            <li class="list-inline-item"><a href="Documentation.html">Documentation</a></li>
            <li class="list-inline-item"><a href="#">Politique confidentialité</a></li>
        </ul>
        <p class="copyright">Service Net © 2022</p>
    </footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</div>
</body>
</html>
<!-- credit to https://epicbootstrap.com/snippets/footer-basic -->   
</body>

</html>



