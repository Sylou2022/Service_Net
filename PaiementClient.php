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
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <title>Paiement</title>
   
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
 
     <link rel="stylesheet" href="paiement.css">
     <link rel="icon" href="favicon.ico" />


 </head>
 <body>
                             
     <nav class="navbar navbar-inverse" >
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="FacturesClient.php">Factures</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Paiement</a></li>
      
      <li><a href="Message_Client.php">Message</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="Compte.php?log=logout"><span class="glyphicon glyphicon-log-out"></span> Déconnecter</a></li>
    </ul>
  </div>
</nav>

<br><br>

  <center>
<div class="row" >
  <div class="col-75">
    <div class="container">

      <form action="PaiementClient.php" method="Post">
      
        <div class="row">
          <div class="col-50">
            <h3 style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif ;">Informations</h3>

            <label for="fname"><i class="fa fa-user"></i> Nom Complet *</label>
            <input type="text" id="fname" name="name" placeholder="Mamadou Ba" required>

            <label for="email"><i class="fa fa-envelope"></i> Email *</label>
            <input type="text" id="email" name="email" placeholder="Mamadou@example.com" required>

            <label for="adr"><i class="fa fa-address-card-o"></i> Addresse *</label>
            <input type="text" id="adr" name="address" placeholder="66 Oqba, Agdal"required>

            <label for="city"><i class="fa fa-institution"></i> Ville *</label>
            <input type="text" id="city" name="city" placeholder="Rabat"required>

            <div class="row">
              <div class="col-50">
                <label for="state">Pays *</label>
                <input type="text" id="state" name="state" placeholder="Maroc" required>
              </div>
              <div class="col-50">
                <label for="zip">Code Postal</label>
                <input type="text" id="zip" name="zip" placeholder="10000" >
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3 style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif ;">Paiement</h3>
            <label for="fname" style="text-align: center;">Cartes Acceptées</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Identifiant *</label>
            <input type="text" id="cname" name="cardname" placeholder="560" required>

            <label for="ccnum">Numéro carte crédit *</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>

            <label for="expmonth">Mois Expiration </label>
            <input type="text" id="expmonth" name="expmonth" placeholder="Septembre" >
            <div class="row">
              <div class="col-50">
                <label for="expyear">Date Expiration </label>
                <input type="text" id="expyear" name="expyear" placeholder="2023">
              </div>
              <div class="col-50">
                <label for="cvv">Date-Paiement *</label>
                <input type="date" id="start" name="date" required>
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr" required> Adresse de livraison identique à celle de la facturation
        </label>
        <input type="submit" name="Payer" value="Payer" class="btn"> <br>
        <input type="reset" name="reset" value="Réinitialiser" class="btn" style="background-color: grey;">
      </form>
      <center>
<?php
$db=mysqli_connect("localhost","root","","service_net");

if(isset($_POST['Payer'])){
  
   $name=$_POST['name'];
   $email=$_POST['email'];
   $address=($_POST['address']);
   $city=$_POST['city'];
   $state=$_POST['state'];
   $zip=$_POST['zip'];
   $cardname=$_POST['cardname'];
   $cardnumber=$_POST['cardnumber'];
   $expmonth=$_POST['expmonth'];
   $expyear=$_POST['expyear'];
   $date=$_POST['date'];
   $sameadr=$_POST['sameadr'];
   $sql="INSERT INTO payement (nom,email,adresse,ville,pays,code_postal,Reference,numero_carte,mois,date_expire,date_paie,checked) VALUES ('$name','$email','$address','$city','$state', '$zip','$cardname','$cardnumber','$expmonth','$expyear','$date',' $sameadr')";
   $resultat=$db->query($sql);
   if($resultat){
       echo "<h4 >Paiement effectué</h4>";

   }else{
       echo "Erreur s'est produite!";
   }
}
?>
</center>



    </div>
  </div>
</div>
  
</center>

</div>




 </body>
 </html>