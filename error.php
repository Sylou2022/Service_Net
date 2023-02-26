
<?php
  // Initialiser la session
  
include "Connexion.php";
 session_start(); 
 ?>


<?php
switch($_GET['code'])
{
case '404':header('Location: Accueil.php/erreur-404.php');
break;
default:header('Location: Accueil.php');
}
?>