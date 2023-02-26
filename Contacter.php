
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
    <title>Contact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
  <link rel="icon" href="favicon.ico" />
</head>
<style>
    .container{
        background-color:blanchedalmond;
    }
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

<center>
                                     <?php
$db=mysqli_connect("localhost","root","","service_net");

if(isset($_POST['Envoyer'])){
  
   $name=$_POST['nom'];
   $email=$_POST['email'];
   $phone=($_POST['phone']);
   $date=$_POST['date'];
   $message=$_POST['message'];
   $sql="INSERT INTO commentaires (nom_com,email_com,phone_com,date_com,message_com) VALUES ('$name','$email','$phone','$date','$message')";
   $resultat=$db->query($sql);
   if($resultat){
    
       $message = "Message envoyé avec succès";

   }else{
       
       $message = "Une Erreur s'est produite!";
   }
}
?>
</center>
   
<section class="bg-light py-5">
                             <div class="container px-5 my-5 px-5">
                                 <div class="text-center mb-5">
                                     <div class="feature  bg-gradient text-black rounded-3 mb-3" ><i class="bi bi-envelope-fill"></i></div>
                                     <h2 class="fw-bolder">Entrer en Contact</h2>
                                     <p class="lead mb-0">Nous sommes ravis de votre visite</p>
                                 </div>
<div class="row gx-5 justify-content-center">
                                     <div class="col-lg-6">
                                         
                 
                                         <form id="contactForm" data-sb-form-api-token="API_TOKEN"  action ="#" method="post">
                                             <!-- saisie du Nom-->
                                             <div class="form-floating mb-3">
                                                 <input class="form-control" name="nom" type="text" placeholder="Entrer votre nom..." required >
                                                 <label for="name">Nom complet *</label>
                                                 <div class="invalid-feedback" data-sb-feedback="name:required">Un nom est requis</div>
                                             </div>
                                             <!-- Saisie de l'adresse email-->
                                             <div class="form-floating mb-3">
                                                 <input class="form-control" name="email" type="email" placeholder="nom@exemple.com" required >
                                                 <label for="email">Email * </label>
                                                 <div class="invalid-feedback" data-sb-feedback="email:required">Un email est requis</div>
                                                 <div class="invalid-feedback" data-sb-feedback="email:email">Email invalide</div>
                                             </div>
                                             <!-- Saisie du numero telephone -->
                                             <div class="form-floating mb-3">
                                                 <input class="form-control" name="phone" type="tel" placeholder="(0)6- 45-67-89-80" required>
                                                 <label for="phone">Telephone *</label>
                                                 <div class="invalid-feedback" data-sb-feedback="phone:required">Un numéro telephone est requis</div>
                                                 
                                                 <div class="form-floating mb-3">
                                                
                                                 <input class="form-control" type="date" id="start" name="date"  required>
                                                 <label for="date">Date *</label>
                                             </div>
                                             </div>
                                             <!-- Message input-->
                                             <div class="form-floating mb-3">
                                                 <textarea class="form-control" name="message" type="text" placeholder="Saisir votre message ici..." style="height: 10rem" required></textarea>
                                                 <label for="message">Message *</label>
                                                 <div class="invalid-feedback" data-sb-feedback="message:required">Un message est requis</div>
                                             </div>
                                            
                                             <div class="d-none" id="submitSuccessMessage">
                                                 <div class="text-center mb-3">
                                                     <div class="fw-bolder">Soumission du formulaire réussie!
                                                    Inscription Necessaire pour la suivie </div>
                                                     <br />
                                                     <a href="users.php">Inscription</a>
                                                 </div>
                                             </div>
                                                                                
                                             <div >
                                             <input class="btn btn-warning btn-lg btn-block"  type="submit" name="Envoyer" value="Envoyer" style="color: white;" ></input></div>
                                             &nbsp;
                                             <?php if (! empty($message)) { ?>
                                                <p class="errorMessage"><?php echo $message; ?></p>
                                                <?php } ?>
                                         </form>
                                         <a href="Accueil.php" style="color: red;">Retour à l'Accueil</a>
   
                                         </div>
                                         </div>
                                      </div>
                                     </section>

</body>
</html>