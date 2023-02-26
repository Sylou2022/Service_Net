<?php
  // Initialiser la session
  
include "Connexion.php";
 session_start(); 
 ?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message_du_Client</title>
    
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="favicon.ico" />
    <link rel="stylesheet" href="message.css">
</head>
<style>
   .sucess{
  text-align: center;
  color: white;
}
.sucess a {
  text-decoration: none;
  color: green;
}
p.errorMessage {
    background-color: #58aef7;
    border: #AA4502 1px solid;
    padding: 5px 10px;
    color: #FFFFFF;
    border-radius: 3px;
}
</style>

<body>
  
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="FacturesClient.php">Factures</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Message</a></li>
     
      <li><a href="PayPalPaiement.php">Paiement</a></li>
      <li><a href="Espace_User.php">Portail</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
     
      <li><a href="Compte.php?log=logout"><span class="glyphicon glyphicon-log-out"></span> Déconnecter</a></li>
    </ul>
  </div>
</nav>
    
<br>

<center>
<?php
$db=mysqli_connect("localhost","root","","service_net");

if(isset($_POST['envoyer'])){
  
   $name=$_POST['name'];
   $email=$_POST['email'];
   $date=($_POST['date']);
   $subject=$_POST['subject'];
   $message=$_POST['message'];
   $sql="INSERT INTO texto (name_Client,email_Client,date_message,subject_message,message_text) VALUES ('$name','$email','$date','$subject','$message')";
   $resultat=$db->query($sql);
   if($resultat){
      
       $message = "Message envoyé avec succès";

   }else{
       echo "<h4>Attention! Une Erreur s'est produite!</h4>";
      
   }
}
?>
</center>
     <br><br>
<h3 style="color:black; text-align:center;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif ">Envoyer Message</h3>


<center>
<form action="Message_Client.php" method="POST" style="border-radius:10px; width: 700px; text-align: center;background-color:blanchedalmond;">
<br>
<br>
<div class="form-floating mb-4">
<label for="name">Nom : </label>
<input type="name" name="name" class="form-control" placeholder="Nom" required>
</div>
<br>
<br>
<div class="form-floating mb-4">
<label for="Email">Email: </label>
<input type="email" name="email" class="form-control" placeholder="exemple@gmail.com" required></div>
<br>
<br>
<div class="form-floating mb-4">
<label for="Date">Date : </label>
<input type="date" name="date" class="form-control"  required></div>
<br>
<br>
<div class="form-floating mb-4">
<label for="Object">Objet : </label>
<input type="text" name="subject" class="form-control" placeholder="Besoin Personnel " required></div>
<br>
<br>
<div class="form-floating mb-4">
<label for="Message">Message : </label>
<textarea  name="message" class="form-control" placeholder="Saisir votre message ici" cols="25" rows="10" required></textarea></div>
<br>
<br>

<input type="submit" name="envoyer" value="Envoyer"  class="btn btn-outline-warning" style="color: black;">
&nbsp;
<input type="reset" name="reset" value="Réinitialiser"  class="btn btn-outline-warning" style="color: black;"> 
<?php if (! empty($message)) { ?>
 <p class="errorMessage"><?php echo $message; ?></p>
   <?php } ?>
<br><br>
</form>
</center>




   
</body>
</html>