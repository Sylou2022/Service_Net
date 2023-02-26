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
        <title>Clients</title>
        <link rel="icon" href="favicon.ico" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-light">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Ajouter Client</h3></div>
                                    <div class="card-body">
                                        <form action="clients.php" method="POST">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" name="idclient" type="number"  />
                                                        <label for="inputFirstName">ID Client</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" name="nameclient" type="text"  />
                                                        <label for="inputLastName">Nom Complet</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" name="entreprise" type="text"  />
                                                        <label for="inputLastName">Entreprise</label>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="text" name="adresse"  />
                                                <label for="inputEmail">Adresse</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" name="telephone" type="number"  />
                                                        <label for="inputPassword">Telephone</label>
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
                                        <div class="small"><a href="Utilisateur.php">Deconnection</a></div>
                                        
                                    </div>

<center>
<?php
$db=mysqli_connect("localhost","root","","invoicedb");

if(isset($_POST['Ajouter'])){

    $idclient=$_POST['idclient'];
    $nameclient=$_POST['nameclient'];
    $entreprise=($_POST['entreprise']);
    $adresse=$_POST['adresse'];
    $telephone=($_POST['telephone']);
    
  
    $sql="INSERT INTO clients (clientID,name_client,company,address_client,phone_client) VALUES ('$idclient','$nameclient','$entreprise','$adresse','$telephone')";
    $resultat=$db->query($sql);
    if($resultat){
        
       echo "<h5 >Client ajouté</h5>";
      

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
