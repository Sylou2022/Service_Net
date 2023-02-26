<?php
// Informations d'identification
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'invoicedb');
 
// Connexion à la base de données MySQL 
$conn = mysqli_connect("localhost", "root", "", "invoicedb");
 
// Vérifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Utilisateurs</title>
  <link rel="icon" href="favicon.ico" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
 </head>
 <style>
        .sucess{
  text-align: center;
  color: white;
}
.sucess a {
  text-decoration: none;
  color: #58aef7;
}
p.errorMessage {
    background-color: #e66262;
    border: #AA4502 1px solid;
    padding: 5px 10px;
    color: #FFFFFF;
    border-radius: 3px;
}
    </style>
 <body class="bg-primary">
 
<?php

$db=mysqli_connect("localhost","root","","invoicedb");
$sql="SELECT *FROM utilisateurs";
$resultat=$db->query($sql);
if(isset($_POST['Connexion'])){
  $mail=$_POST['email'];
  $password=$_POST['password'];

while($ligne=$resultat->fetch_array()){

  if($_POST['email']==$ligne['email_utilisateur'] &&
  md5($_POST['password'])==$ligne['password_uti']){
    header ('Location: clients.php'); 
   
  } else{
    $message=  "Nom d'utilisateur ou Mot de passe incorrect.";
  }
}
}
?>
 <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Super Utilisateur</h3></div>
                                    <div class="card-body">
                                        <form action="Utilisateur.php" method="POST">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" name="email" placeholder="nom@exemple.com" />
                                                <label for="inputEmail">Adresse Email </label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" name="password" type="password" placeholder="secret" />
                                                <label for="inputPassword">Mot de passe</label>
                                            </div>
                                           
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            
                                                <a class="small" href="Accueil.php">Accueil</a>
                                                <input class="btn btn-primary" type="submit" name="Connexion" value="Connexion">
                                            </div>
                                            &nbsp;
                                            <div class="small"><a href="inscription.php">Ajouter utilisateur!</a></div>
                                            <?php if (! empty($message)) { ?>
                                             <p class="errorMessage"><?php echo $message; ?></p>
                                            <?php } ?>
                                        </form>
                                    </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            
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