<?php
include "Connexion.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte</title>
    
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<link rel="stylesheet" href="Pagestyle.css">
    <link rel="icon" href="favicon.ico" />
    <link rel="stylesheet" href="compte.css">

</head>
<script>
  alert ("Si Mot de passe est oublié, Contactez Responsable");
</script>

<body>

<center>
<?php
require('Connexion.php');
session_start();
$db=mysqli_connect("localhost","root","","service_net");
$sql="SELECT *FROM user";
$resultat=$db->query($sql);
if(isset($_POST['Connexion'])){
  $username=$_POST['userName'];
  $password=$_POST['password'];


while($ligne=$resultat->fetch_array()){

  if($_POST['userName']==$ligne['email_users'] &&
  md5($_POST['password'])==$ligne['password_users']){
    header ('Location: Espace_User.php'); 
   
  } else{
    $message = "Nom d'utilisateur ou Mot de passe incorrect.";
  }
}
}
?>
</center>
<div>
<form  id="container" action="Compte.php" method="post" style="text-align: center">
<div class="wrapper">
    <div class="logo"> <img src="image/Logo/SERVICE NET (9).png" alt=""> </div>
    <div class="text-center mt-4 name"> Compte  </div><br>
    <form class="p-3 mt-3">
        <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span> <input type="text" name="userName" id="userName" placeholder="Votre Email" required> </div><br>
        <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span> <input type="password" name="password" id="pwd" placeholder="Mot de Passe"> </div> <input class="btn mt-3" type="submit" name="Connexion" required><br>
    </form>
    <div class="text-center fs-6"> <a href="Contacter.php" >  Mot de passe oublié?</a> ou <a href="users.php">Inscrivez-vous</a> </div>
    <div class="text-center fs-6"> <a href="Accueil.php" >  Retour à l'Accueil</a>  </div>

    <?php if (! empty($message)) { ?>
    <p class="errorMessage" ><?php echo $message; ?></p>
<?php } ?>
</div>

</form>

</div>
</body>
</html>