
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
    <title>Tiers</title>
    <link rel="icon" href="favicon.ico" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
    <br>
    <h6 style="color: black;text-align:center">Nouveau tiers (prospect, client, fournisseur)</h6><br>
<div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Créer un tiers</h3></div>
                                    <div class="card-body">
                                        <form action="Tiers.php" method="POST">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <label for="inputFirstName">Nom du tiers</label><br><br>
                                                        <input class="form-control" id="inputFirstName" name="nametiers" type="name" placeholder="Entrer le nom" required/>                                                       
                                                    </div>                                                    
                                                </div>                                                
                                                <div class="col-md-6">                                                    
                                                    <label for="pet-select">Nom Alternatif</label>
                                                        <select name="namealter" class="form-select form-select-lg mb-3" >
                                                        <option value=""></option>
                                                        <option value="Commercial">Commercial</option>
                                                        <option value="Marque">Marque</option>
                                                        </select>                                                
                                                </div>                                                                                             
                                                <div class="col-md-6">                                                    
                                                    <label for="pet-select">Prospect/Client</label>
                                                        <select name="prospect" class="form-select form-select-lg mb-3" >
                                                        <option value=""></option>
                                                        <option value="Prospect">Prospect</option>
                                                        <option value="Client">Client</option>
                                                        </select>                                                
                                                </div>                                              
                                                <div class="col-md-6">
                                                <label for="pet-select">Fournisseur</label>
                                                      <select   name="fournisseur" class="form-select form-select-lg mb-3">
                                                        <option value="Oui">OUI</option>
                                                        <option value="Non">NON</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6" >
                                                <label for="pet-select">Etat</label>
                                                    <select name="etat" class="form-select form-select-lg mb-3" >
                                                        <option value="Oui">Ouvert</option>
                                                        <option value="Fermer">Fermer</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <label for="inputEmail">Code barre</label><br><br>
                                                        <input class="form-control" id="inputFirstName" type="number" name="codebarre" placeholder="Code barre" />                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <label for="inputEmail">Adresse</label><br><br>
                                                        <input class="form-control" id="inputEmail" type="adress" name="adresse" placeholder="Code barre" />                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <label for="inputPassword">Code postal</label><br><br>
                                                        <input class="form-control" id="inputPassword" name="codepostal" type="number" placeholder="Code postal" />                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6">                                                    
                                                    <label for="pet-select">Pays</label>
                                                        <select name="pays" class="form-select form-select-lg mb-3" required>
                                                        <option value=""></option>
                                                        <option value="Maroc">Maroc (MA)</option>
                                                        <option value="Senegal">Sénégal (SN)</option>
                                                        </select>                                                
                                                </div>
                                                <div class="col-md-6">                                                    
                                                    <label for="pet-select">Département</label>
                                                        <select name="department"  class="form-select form-select-lg mb-3" >
                                                        <option value=""></option>
                                                        <option value="Rabat">Rabat</option>
                                                        <option value="Casablanca">Casablanca</option>
                                                        <option value="Temara">Temara</option>
                                                        </select>                                                 
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <label for="inputPassword">Email</label><br><br>
                                                        <input class="form-control" id="inputPassword" name="email" type="email"  required/>                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <label for="inputPassword">Web</label><br><br>
                                                        <input class="form-control"  id="inputPassword" name="web" type="text"  />                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <label for="inputPassword">Skype</label><br><br>
                                                        <input class="form-control"  id="inputPassword" name="skype" type="text"/>                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <label for="inputPassword">Téléphone</label><br><br>
                                                        <input class="form-control"  id="inputPassword" name="telephone" type="number" />                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <label for="inputPassword">id prof 1 (RC)</label><br><br>
                                                        <input class="form-control"  id="inputPassword" name="idprofrc" type="number"/>                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <label for="inputPassword">id prof 2 (Patente)</label><br><br>
                                                        <input class="form-control" id="inputPassword" name="idprofpatente" type="number" />                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <label for="inputPassword">id prof 3 (TF)</label><br><br>
                                                        <input class="form-control" id="inputPassword" name="idproftf" type="number"/>                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <label for="inputPassword">id prof 4 (C.N.S.S)</label><br><br>
                                                        <input class="form-control" id="inputPassword" name="idprofcnss" type="number"  />                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <label for="inputPassword">id prof 5 (I.C.E)</label><br><br>
                                                        <input class="form-control" id="inputPassword" name="idprofice" type="number"  />                                                        
                                                    </div>                                                    
                                                </div>
                                                <div class="col-md-6">                                                    
                                                    <label for="pet-select">Assujeti à la TVA</label>
                                                        <select name="assujeti" class="form-select form-select-lg mb-3" >
                                                        <option value="Oui">Oui</option>
                                                        <option value="Non">Non</option>
                                                        </select>                                                 
                                                </div>
                                                <div class="col-md-6">                                                    
                                                    <label for="pet-select">Type du Tiers</label>
                                                        <select name="typetiers" class="form-select form-select-lg mb-3" >
                                                        <option value="Crospect">Prospect</option>
                                                        <option value="Client">Client</option>
                                                        <option value="Fournisseur">Fournisseur</option>
                                                        </select>                                                 
                                                </div>
                                                <br>
                                                <div class="col-md-6">                                                    
                                                    <label for="pet-select">Formulaire indiqué</label>
                                                        <select name="formu" class="form-select form-select-lg mb-3" >
                                                        <option value=""></option>
                                                        <option value="ok">ok</option>
                                                        <option value="no">no</option>
                                                        </select>                                                 
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <label for="inputPassword">Code client</label><br><br>
                                                        <input class="form-control" id="inputPassword" name="codeclient" type="text"  />                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <label for="inputPassword">Code fournisseur</label><br><br>
                                                        <input class="form-control" id="inputPassword" name="codefournisseur" type="text"  />
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <label for="inputPassword">Ville</label><br><br>
                                                        <input class="form-control" id="inputPassword" name="ville" type="text" />                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <label for="inputPassword">Fax</label><br><br>
                                                        <input class="form-control" id="inputPassword" name="fax" type="text" />                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <label for="inputPassword">Numéro de TVA</label><br><br>
                                                        <input class="form-control" id="inputPassword" name="numerotva" type="number" />                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6">                                                    
                                                    <label for="pet-select">Effectif</label>
                                                        <select name="effectif" class="form-select form-select-lg mb-3" >
                                                        <option value=""></option>
                                                        <option value="ok">ok</option>
                                                        <option value="no">no</option>
                                                        </select>                                                 
                                                </div>
                                              &nbsp;
                                                </div> 
                                                <div class="mt-4 mb-0">
                                                <div class="d-grid"><input class="btn btn-primary active" type="submit" name="Enregistrer" value="Enregistrer"></div>&nbsp;
                                                <div class="d-grid"><input class="btn btn-danger active" type="reset" name="Actualiser" value="Actualiser"></div>
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

if(isset($_POST['Enregistrer'])){
    $mail=$_POST['email'];   
$select = mysqli_query($db, "SELECT * FROM tiers WHERE email_tiers = '".$_POST['email']."'");
if(mysqli_num_rows($select)) {
    exit('<h5 style="text-align:center;background-color:#e66262;max-width:300px; color: #FFFFFF;margin-left:50px;border-radius: 3px;border: #AA4502 1px solid;"> Cette adresse email est déjà utilisée </h5>');
   
}
}
?>
</center>

<center>
<?php
$db=mysqli_connect("localhost","root","","obi");

if(isset($_POST['Enregistrer'])){
    $nametiers=$_POST['nametiers'];
    $namealter=$_POST['namealter'];
    $prospect=($_POST['prospect']);
    $fournisseur=$_POST['fournisseur'];
    $etat=($_POST['etat']);
    $codebarre=($_POST['codebarre']);
    $adresse=$_POST['adresse']; 
    $codepostal=$_POST['codepostal']; 
    $pays=$_POST['pays']; 
    $department=$_POST['department'];
    $email=$_POST['email'];
    $web=$_POST['web'];
    $skype=$_POST['skype'];
    $telephone=$_POST['telephone'];
    $idprofrc=$_POST['idprofrc'];
    $idprofpatente=$_POST['idprofpatente'];
    $idproftf=$_POST['idproftf'];
    $idprofcnss=$_POST['idprofcnss'];
    $idprofice=$_POST['idprofice'];
    $assujeti=$_POST['assujeti'];
    $typetiers=$_POST['typetiers'];
    $formu=$_POST['formu'];
    $codeclient=$_POST['codeclient'];
    $codefournisseur=$_POST['codefournisseur'];
    $ville=$_POST['ville'];
    $fax=$_POST['fax'];
    $numerotva=$_POST['numerotva'];
    $effectif=$_POST['effectif'];
  
  
    $sql="INSERT INTO tiers (nom_tiers,nom_alternatif,prospect_client,fournisseur,etat_tiers,code_barre,adresse_tiers,code_postal,pays_tiers,departement,email_tiers,web_tiers,skype_tiers,telephone,id_profrc,id_profpatente,id_proftf,id_profcnss,id_profice,assujeti_tva,type_tiers,forme_indique,code_client,code_fournisseur,ville_tiers,fax_tiers,numero_tva,effectif_tiers) VALUES ('$nametiers','$namealter','$prospect','$fournisseur','$etat','$codebarre','$adresse','$codepostal','$pays','$department','$email','$web','$skype','$telephone','$idprofrc','$idprofpatente','$idproftf','$idprofcnss','$idprofice','$assujeti','$typetiers','$formu','$codeclient','$codefournisseur','$ville','$fax','$numerotva','$effectif')";
    $resultat=$db->query($sql);
    if($resultat){
        
      
       echo "<h5>Enregistrement effectué avec succès</h5>";
      

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