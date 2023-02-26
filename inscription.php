<?php
  // Initialiser la session
  
include "connexion.php";
 session_start(); 
 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Ajout_User</title>
        <link rel="icon" href="favicon.ico" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Ajouter Utilisateur</h3></div>
                                    <div class="card-body">
                                        <form action="inscription.php" method="POST">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" name="firstname" type="text" placeholder="Entrer votre prénom" />
                                                        <label for="inputFirstName">Prénom</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" name="name" type="text" placeholder="Entrer votre nom" />
                                                        <label for="inputLastName">Nom</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" name="adresse" type="text" placeholder="Adresse" />
                                                        <label for="inputLastName">Adresse</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" name="telephone" type="number" placeholder="telephone" />
                                                        <label for="inputLastName">Téléphone</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" name="email" placeholder="nom@exemple.com" />
                                                <label for="inputEmail">Adresse Email</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" name="passWord" type="password" placeholder="Create un mot de passe" />
                                                        <label for="inputPassword">Mot de passse</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm" name="secret" type="password" placeholder="Confirmer" />
                                                        <label for="inputPasswordConfirm">Confirmer votre mot de passe</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><input class="btn btn-primary btn-block" type="submit" name="Ajouter" value="Ajouter"></div>
                                            </div>
                                            <?php if (! empty($message)) { ?>
                                         <p class="errorMessage" ><?php echo $message; ?></p>
                                            <?php } ?>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="Utilisateur.php">Se connecter</a></div>
                                        
                                    </div>
                                    
 <center>

<?php

if(isset($_POST['Ajouter'])){
    $mail=$_POST['email'];   
$select = mysqli_query($db, "SELECT * FROM utilisateurs WHERE email_utilisateur = '".$_POST['email']."'");
if(mysqli_num_rows($select)) {
    exit('<h5 style="text-align:center;background-color:#e66262;max-width:300px; color: #FFFFFF;margin-left:50px;border-radius: 3px;border: #AA4502 1px solid;"> Cette adresse email est déjà utilisée </h5>');
   
}
}
?>
</center>

<center>
<?php
$db=mysqli_connect("localhost","root","","invoicedb");

if(isset($_POST['Ajouter'])){
    $firstname=$_POST['firstname'];
    $name=$_POST['name'];
    $adresse=($_POST['adresse']);
    $mail=$_POST['email'];
    $password=md5($_POST['passWord']);
    $secret=md5($_POST['secret']);
    $telephone=$_POST['telephone']; 
  
    $sql="INSERT INTO utilisateurs (Nom_utilisateur,Prenom_utilisateur,Adresse_utilisateur,email_utilisateur,password_uti,confirm_password,tel_utilisateur) VALUES ('$firstname','$name','$adresse','$mail','$password','$secret','$telephone')";
    $resultat=$db->query($sql);
    if($resultat){
        
       echo "<h5 >Ajout super utilisateur effectué</h5>";
      

    }else{
        $message = "Erreur dans la saisie.";
    }
}
?>

</center> 
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <br><br>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; OBI Open-Business-Informatique 2022</div>
                            <div>
                                <a href="#">Politique de confidentialité</a>
                                &middot;
                                <a href="#">Termes &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
