<?php
  // Initialiser la session
  
include "Connexion.php";
 session_start(); 
 ?>

 


  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Factures_Clients</title>
   
   <link rel="icon" href="favicon.ico" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="footer.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
 </head>


 <script>
var downloadAttrSupported = ("download" in document.createElement("a"))
if (!downloadAttrSupported){
   $('img.media').unwrap();
}
</script>
<style>
  .facture{
    background-color: lightgrey;
    
  }
</style>
 <body>
                           
   <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="Message_Client.php">Messages</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="FacturesClient.php">Factures</a></li>
      <li ><a href="PayPalPaiement.php">Paiement</a></li>
      <li><a href="Espace_User.php">Portail</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="Admin.php"><span class="glyphicon glyphicon-log-out"></span> Déconnecter</a></li>
    </ul>
  </div>
</nav>
    <br>

  



  <div  style="text-align:center; margin-right: 800px; position: relative; " class="facture">
  <h2 style="text-align: right;color:green; margin-right:30px;">Télécharger depuis votre PC</h2>
<br>
<form action="FacturesClient.php" method="POST">
  <input type="file"  name="filename" class="btn btn-outline-warning" style="color: black;position:absolute;"><br><br><br><br> <p style="color: black">Je garde mon dossier</p> <img src="image/fichier.png" alt="fichier" width="40"></input>
  <label for="date" style="color: black;">Date</label>
  <input type="date"  name="date" id="Date" style="color: black;margin-right:40px;" required>
  <input type="submit" value="Garder" name="Garder"  class="btn btn-warning" style="background-color: orange;" required></input>
  <a href="Historique_Client.php"><span title="Historique" style=" margin-right:40px;"><img src="image/histo.png" alt="Submit" width="50"></span></a>
</form>
</div>
<div style="text-align:center; margin-right: 520px; position: relative; color:blue">
<?php
$db=mysqli_connect("localhost","root","","service_net");

if(isset($_POST['Garder'])){
  
   $filename=$_POST['filename'];
   $date=$_POST['date'];
   
   $sql="INSERT INTO historique_client (facture,date_histo) VALUES ('$filename','$date')";
   $resultat=$db->query($sql);
   if($resultat){
       echo "<h3 >Dossier bien gardé dans l'historique</h3>";

   }else{
       echo "Erreur s'est produite!";
   }
}
?>
</div>

<br><br><br><br><br><br>

<div class="footer-basic">
    <footer>
        
        <p class="copyright">Service Net © 2022</p>
    </footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>



</body>
 
 </html>