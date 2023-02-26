<?php
  // Initialiser la session
  
include "Connexion.php";
 session_start(); 
 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
<meta name="viewport" content="width=device-width"/>
  <title>Espace_Admin</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <link rel="icon" href="favicon.ico" />
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="espace.css">
</head>


<body>
  
<br><br><br>
 
  <!-- Menu de navigation du site -->
<ul class="navbar">

<li><a href="Facture.php"  type="link" >Proposition Facture</a></li>
<li><a href="commentaires.php"  type="link" style="color:black;" >Commentaires</a></li>
<li><a href="Message.php"  type="link" style="color:black;">Les Messages</a></li>
<li><a href="verificationPaypal.php"  type="link" style="color:black;">Vérification Paypal </a></li>

<li><a href="Admin.php"  type="link" ><span class="glyphicon glyphicon-log-out" style="color:red;">Déconnecter.</span></a></li>
  
</ul>

                       


<!-- Contenu principal -->
<h1 style="text-align: center;">Bienvenue dans votre Espace de Travail</h1>
 

<h6 style="text-align: center; color:brown">Effectuez les paramettrages privé du site.</h6>

<!-- Signer et dater la page, c'est une question de politesse! -->
<address style="text-align: center;">Service_Net <br>
  Un service plus net.</address>
</div>


</body>

</html>

<?php
if($_GET){

if($_GET['log']=="logout")
{
  session_unset();
  session_destroy();
}

}
?>