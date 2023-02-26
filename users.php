<?php
include "Connexion.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  
    <link rel="icon" href="favicon.ico" />
    <link rel="stylesheet" href="compte.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="footer.css">
</head>
<style>
  .Formu{
    color: black;
    position: relative;
    font-family: "Lucida Console";

  }
  input{
    width: 50%;
    bottom: auto;

  }
</style>

<body>
    <br><br>
<h2 style="color:black; text-align:center;font-family: Lucida Console ">Inscription</h2> <br>
<div class="Formu">
<center>
<form action="users.php" method="post" style="border-radius:10px; width: 700px; text-align: center; background-color:rgba(185, 181, 181, 0.676);">
<br><br>
<div class="form-floating mb-3" style="text-align:left;">
<label for="name">Nom Client : </label>
<input type="name" name="name" class="form-control" placeholder="Nom" required>
<div>
<br>
<br>
<div class="form-floating mb-3">
<label for="prenom">Prénom Client : </label>
<input type="text" name="prenom" class="form-control" placeholder="Prénom" required><div>
<br>
<br>
<div class="form-floating mb-3">
<label for="adresse">Adresse complète : </label>
<input type="adress" name="adresse" class="form-control" placeholder="exemple(12, av Moulay, Casablanca)  " required><div>
<br>
<br>
<div class="form-floating mb-3">
<label for="telephone">Téléphone : </label>
<input type="number" name="telephone" class="form-control" placeholder="exemple(0637456569) " required> </div>

<br>
<br>
<div class="form-floating mb-3">
<label for="email">Email Client : </label>
<input type="email" name="email" id="userName" class="form-control" placeholder="nomeexemple@gmail.com" required></div>
<br>
<br>
<div class="form-floating mb-3">
<label for="pwd">Mot de Passe :</label>
<input type="password" name="password" id="pwd" class="form-control" placeholder="min 8caractères (*#&)" required></div>
<br>
<br>
<input type="submit" name="Inscrire" value="Inscrire"  class="btn btn-warning btn-lg btn-block" style="background-color: orange; color:aliceblue;"><br>

<input type="reset" name="reset" value="Réinitialiser" class="btn btn-dark btn-lg btn-block" style="background-color:bisque;"> 

</div>
<br><br>
<div class="text-center fs-6"> <a href="Compte.php">J'ai déjà un compte</a> ou <a href="Accueil.php">Accueil</a> </div>

<?php if (! empty($message)) { ?>
    <p class="errorMessage" ><?php echo $message; ?></p>
<?php } ?>

</form>

</div>

</center>

<?php

if(isset($_POST['Inscrire'])){
    $mail=$_POST['email'];   
$select = mysqli_query($db, "SELECT * FROM user WHERE email_users = '".$_POST['email']."'");
if(mysqli_num_rows($select)) {
    exit('<h5 style="text-align:center;background-color:#e66262;max-width:300px; color: #FFFFFF;margin-left:450px;border-radius: 3px;border: #AA4502 1px solid;"> Cette adresse email est déjà utilisée </h5>');
   
}
}
?>

<center>
<?php
$db=mysqli_connect("localhost","root","","service_net");

if(isset($_POST['Inscrire'])){
    $name=$_POST['name'];
    $prenom=$_POST['prenom'];
    $adresse=($_POST['adresse']);
    $telephone=$_POST['telephone'];
    $mail=$_POST['email'];
    $mdp=md5($_POST['password']);
    $sql="INSERT INTO user (Nom_Client,Prenom_Client,Adresse,Telephone,email_users,password_users) VALUES ('$name','$prenom','$adresse','$telephone','$mail','$mdp')";
    $resultat=$db->query($sql);
    if($resultat){
        
       echo "<h5 >Inscription réussie avec succès</h5>";
      

    }else{
        $message = "Erreur dans la saisie.";
    }
}
?>

</center> 

<br><br><br>

<div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="Accueil.php">Accueil</a></li>
                <li class="list-inline-item"><a href="Presentation.php">Présentation</a></li>
                <li class="list-inline-item"><a href="Metiers.php">Métiers</a></li>
                <li class="list-inline-item"><a href="Documentation.html">Documentation</a></li>
                <li class="list-inline-item"><a href="PolitiqueConf.html">Politique confidentialité</a></li>
            </ul>
            <p class="copyright">Service Net © 2022</p>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

</div>


</body>
</html>
