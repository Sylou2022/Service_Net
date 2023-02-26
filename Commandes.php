
<?php
  // Initialiser la session
  
include "connexion.php";
 session_start(); 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commandes</title>
    <link rel="icon" href="favicon.ico" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>


<body class="bg-info">

<div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Commande</h3></div>
                                    <div class="card-body">
<form name="mon-formulaire1" action="Commandes.php" method="POST">

<div class="row mb-3">
<div class="col-md-6">                                                    
<label for="pet-select">Civilté :</label>
<div class="form-floating mb-3 mb-md-0" >
<input type="radio" name="civi" value="Mme" /> Madame
   <input type="radio" name="civi" value="Mr" /> Monsieur
</div>                                                
 </div>
&nbsp;
<div class="col-md-6">
<div class="form-floating mb-3 mb-md-0">
<label for="inputEmail">Votre prénom : *</label><br><br>
<input class="form-control" id="inputFirstName" type="name" name="prenom"  required/>                                                        
  </div>
 </div>

 <div class="col-md-6">
<div class="form-floating mb-3 mb-md-0">
<label for="inputEmail"> Votre nom : *</label><br><br>
<input class="form-control" id="inputFirstName" type="name" name="nom"  required/>                                                        
  </div>
 </div>
 &nbsp;

<div class="col-md-6">                                                    
  <label for="pet-select"> Vous êtes</label>
 <select name="besoin" class="form-select form-select-lg mb-3" >
<option value=""></option>
<option value="particulier">Un particulier</option>
  <option value="professionnel">Un professionnel</option>
  <option value="institutionnel">Un institutionnel</option>
 </select>                                                
</div>

<div class="col-md-6">                                                    
  <label for="pet-select">  Que désirez vous ?</label>
 <div class="form-floating mb-3 mb-md-0" >
 <input type="checkbox" name="interet" value="installation" /> Installation
 &nbsp;
   <input type="checkbox" name="interet" value="achat" /> Achat de produit <br>
   &nbsp; <br>
   <input type="checkbox" name="interet" value="reparation" /> Réparation
   &nbsp;
   <input type="checkbox" name="interet" value="autres" /> Autres
 </div>                                                
</div>
<div class="col-md-6">
<div class="form-floating mb-3 mb-md-0">
<label for="inputEmail"> Date Commande :</label><br><br>
<input class="form-control" id="inputFirstName" type="date" name="date"  />                                                        
  </div>
 </div>
<div  class="form-floating mb-3">
 <label for="inputEmail">Votre message :</label><br><br>
 <textarea class="form-control" id="inputEmail" type="textarea" name="message" rows="6" cols="40"  required> </textarea>                                                     
</div>
</div>
<div class="mt-4 mb-0">
 <div class="d-grid"><input class="btn btn-primary active" type="submit" name="Commander" value="Commander"></div> &nbsp;
 <div class="d-grid"><input class="btn btn-danger active" type="reset" name="Annuler" value="Annuler"></div>
 </div>
 <?php if (! empty($message)) { ?>
 <p class="errorMessage" ><?php echo $message; ?></p>
<?php } ?>                                          
                                               

</form>
</div>
 <div class="card-footer text-center py-3">
  <div class="small" style="color: white;"><a href="Accueil.php">Accueil</a></div>                                        
   </div>


   <center>
<?php
$db=mysqli_connect("localhost","root","","invoicedb");

if(isset($_POST['Commander'])){
    $civi=$_POST['civi'];
    $prenom=$_POST['prenom'];
    $nom=($_POST['nom']);
    $besoin=$_POST['besoin'];
    $interet=($_POST['interet']);
    $date=($_POST['date']);
    $message=$_POST['message']; 
  
    $sql="INSERT INTO commandes (civilite,prenom_com,nom_com,personalite,besoin,date_com,message_com) VALUES ('$civi','$prenom','$nom','$besoin','$interet','$date','$message')";
    $resultat=$db->query($sql);
    if($resultat){
        
       echo "<h5 >Commande effectuée</h5>";
      

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
