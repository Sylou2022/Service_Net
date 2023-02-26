
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
    <title>Facture</title>
    
    <link href="styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="icon" href="favicon.ico" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="footer.css">
  
  
  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<style type="text/css">
		
		img{
			width: 70px;
		}
		.form{
      color:black;

    }
	</style>
   <script>
    function tva(){
      var prixHT = Number(document.getElementById("ht").value);
				var prixTva = prixHT*0.2;
				var prixTTC = prixHT+prixTva;
        document.getElementById("ht").value = " " + prixTTC + "";
			}
</script>
  
<body class="bg-light">


<div id="layoutAuthentication">
 <div id="layoutAuthentication_content">
 <main>
<div class="container">
 <div class="row justify-content-center">
 <div class="col-lg-8">
<div class="card shadow-lg border-0 rounded-lg mt-5">
<div class="card-header"><h3 class="text-center font-weight-light my-4" style="color: black;">Nouvelle Facture</h3></div>
 <div class="card-body">

<form name="mon-formulaire1" action="Facture.php" method="POST" class="form">

<div class="row mb-3">
  
<?php
    $result=mysqli_query($db,"SELECT * FROM item");
    ?>
    <div class="form-floating mb-3 mb-md-0">        
                <div class="btn">ID Item </div>
                <select id="main_cato" name="itideminvoice" class="form-select form-select-lg mb-3" >
                    <option></option>
                    <?php
        while($ligne=$result->fetch_assoc()){?>
                    <option value="<?php echo $ligne['itemID'];?>">
                        <?php echo $ligne['itemID'];?>                       
                    </option>
                    <?php
    }
    ?>
                </select>              
                <div class="btn" >Référence:</div> &nbsp;
                <select class="form-select form-select-lg mb-3" id="sous_cato" name="referclient" ></select>               
               
            </div>         


            <script>
    $(document).ready(function() {
        $("#main_cato").on('change', function() {
            let item_id = this.value;      
        
        $.ajax({
                url: "fetch1.php",
                type: 'POST',
                data: {
                  item_id: item_id
                },
                success: function(result) {
                    $("#sous_cato").html(result);
                },
               
                error: function() {
                    console.log("error");
                }
            });
        });
      });
    </script>

&nbsp;

  
<?php
    $result=mysqli_query($db,"SELECT * FROM invoice");
    ?>
    <div class="form-floating mb-3 mb-md-0">        
                <div class="btn">Client</div>
                <select id="main_cat" name="nameclient" class="form-select form-select-lg mb-3" >
                    <option></option>
                    <?php
        while($ligne=$result->fetch_assoc()){?>
                    <option value="<?php echo $ligne['invoiceID'];?>">
                        <?php echo $ligne['Client_Name'];?>                       
                    </option>
                    <?php
    }
    ?>
                </select>

                <div class="btn" >Code Client:</div> &nbsp;
                <select class="form-select form-select-lg mb-3" id="sous_cat" name="codeclient" ></select>                             
               
            </div>         


            <script>
    $(document).ready(function() {
        $("#main_cat").on('change', function() {
            let invoice_id = this.value;

            $.ajax({
                url: "fetch.php",
                type: 'POST',
                data: {
                    invoice_id: invoice_id
                },
                success: function(result) {
                    $("#sous_cat").html(result);
                },
               
                error: function() {
                    console.log("error");
                }
            });
          });     
        
       
        });
   
    </script>
 
  &nbsp;   
  
  <div class="row mb-3">
  &nbsp;                                             
<label for="pet-select" >Type </label><br><br>
<div class="form-floating mb-3 mb-md-0" >
  <input type="radio" name="typefacture" value="Facture standard" /> Facture standard  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <input type="radio" name="typefacture" value="Facture d'accompte" /> Facture d'accompte <br>
   <input type="radio" name="typefacture" value="Facture modèle" /> Facture modèle &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <input type="radio" name="typefacture" value="Facture avoir" /> Facture avoir <br>
   <input type="radio" name="typefacture" value="Facture de remplacement" /> Facture de remplacement
</div>                                                
 
 <div class="col-md-6">
<div class="form-floating mb-3 mb-md-0">
<label for="inputEmail">Date Facturation </label><br><br>
<input class="form-control" id="inputFirstName" type="date" name="datefacturation"  required/>
</div>                                                       
  </div>
  </div>

  <div class="form-floating mb-3 mb-md-0">                                                   
  <label for="pet-select">Condition de Règlement</label><br><br>
 <select name="conditionregl" class="form-select form-select-lg mb-3" >
<option value="A Reception">A réception </option>
<option value="30 jours">30 jours</option>
  <option value="30 jours fin de mois">30 jours fin de mois</option> 
  <option value="60 jours fin de mois">60 jours fin de mois</option>
  <option value="A commande">A commande</option>
  <option value="A livraison">A livraison</option>
  <option value="50/50">50/50</option>
  <option value="10 jours">10 jours</option>
  <option value="10 jours fin de mois">10 jours fin de mois</option>
  <option value="14 jours">14 jours</option>
  <option value="14 jours fin de mois">14 jours fin de mois</option>  
  </select>                                                
</div>
</div>
<div class="form-floating mb-3 mb-md-0">                                                   
  <label for="pet-select">Mode de Règlement</label><br><br>
 <select name="modereglement" class="form-select form-select-lg mb-3" >
 <option value=""></option>
<option value="Carte bancaire">Carte bancaire </option>
<option value="Chèque">Chèque </option>
<option value="Espèce">Espèce </option>
<option value="Ordre de prèlèvement">Ordre de prèlèvement</option>
<option value="Virement bancaire">Virement bancaire</option>
</select>
</div>
<div class="form-floating mb-3 mb-md-0">                                                   
  <label for="pet-select">Compte bancaire</label><br><br>
 <select name="comptebancaire" class="form-select form-select-lg mb-3" >
 <option value=""></option>
<option value="Carte bancaire">Compte </option>
</select>
</div>
<br>

<div class="form-floating mb-3 mb-md-0">
<label for="inputEmail"> Incoterms</label><br><br>
<input class="form-control" id="inputFirstName" type="text" name="incoterms"  />                                                        
  </div>


 &nbsp;
 <div class="form-floating mb-3 mb-md-0">                                                   
  <label for="pet-select">Modèle de document </label><br><br>
 <select name="modeledocu" class="form-select form-select-lg mb-3" >
 <option value="crabe">crabe</option>
<option value="Facture Print">Facture Print </option>
<option value="Facture Print NoComp">Facture Print NoComp </option>
<option value="Facture Print proforma">Facture Print proforma </option>
<option value="Excel">Excel</option>
<option value="Facture proforma">Facture proforma</option>
<option value="infras-F">infras-F</option>
</select>
</div>
 <div class="form-floating mb-3 mb-md-0">                                                   
  <label for="pet-select">Devise </label><br><br>
 <select name="devise" class="form-select form-select-lg mb-3" >
 <option value=""></option>
<option value="Dirham (MAD)">Dirham (MAD) </option>
<option value="Euros (€)">EUROS (€) </option>
</select>
</div>
<div class="row mb-3">
<div class="col-md-6">
<div class="form-floating mb-3 mb-md-0">
<label for="inputEmail"> ICE :</label><br><br>
<input class="form-control" id="inputFirstName" type="text" name="iceclient"  />                                                        
  </div>
 </div>
 <div class="col-md-6">
<div class="form-floating mb-3 mb-md-0">
<label for="inputEmail"> Client-ID :</label><br><br>
<input class="form-control" id="inputFirstName" type="number" name="identifient"  />                                                        
  </div>
 </div>

 <div class="col-md-6">
<div class="form-floating mb-3 mb-md-0">
<label for="inputEmail"> Bon Commande :</label><br><br>
<input class="form-control" id="inputFirstName" type="text" name="bonclient"  />                                                        
  </div>
 </div>
 <div class="col-md-6">
<div class="form-floating mb-3 mb-md-0">
<label for="inputEmail"> Désignation produit :</label><br><br>
<input class="form-control" id="inputFirstName" type="text" name="designation"  />                                                        
  </div>
 </div> 
 <div class="col-md-6">
<div class="form-floating mb-3 mb-md-0">
<label for="inputEmail"> Prix HT:</label><br><br>
<input class="form-control" id="inputFirstName" type="text" name="prixHT"  />                                                        
  </div>
 </div> 
 <div class="col-md-6">
<div class="form-floating mb-3 mb-md-0">
<label for="inputEmail"> Quantité :</label><br><br>
<input class="form-control" id="inputFirstName" type="number" name="quantite"  />                                                        
  </div>
 </div>
 <div class="col-md-6">
<div class="form-floating mb-3 mb-md-0">
<label for="inputEmail">Total HT :</label><br><br>
<input class="form-control" id="inputFirstName" type="number" name="calculHT"  />                                                        
  </div>
 </div>
 <div class="col-md-6">
<div class="form-floating mb-3 mb-md-0">
<label for="inputEmail"> TVA :</label><br><br>
<input class="form-control" id="inputFirstName" type="text" name="tvaitem"  />                                                        
  </div>
 </div>  
 
 
 <div class="col-md-6">
<div class="form-floating mb-3 mb-md-0">
<label for="inputEmail"> Total TTC Dirhams:</label><br><br>
<input class="form-control" type="text"  id ="ht" name="prixTTC" style="color: red;" ><p onclick="tva()"> Click ici Résultat </p>                                                        
  </div>
 </div>
 

 <div class="col-md-6">
<div class="form-floating mb-3 mb-md-0">
<label for="inputEmail"> Montant TTC en Lettre :</label><br><br>
<input class="form-control" id="inputFirstName" type="text" name="montant"  />                                                        
  </div>
 </div> 
 </div>
<div class="form-floating mb-3 mb-md-0">
<label for="inputEmail"> Note (publique) </label><br><br>
<textarea class="form-control" id="inputFirstName" type="text" name="notepublique" cols="80" rows="20" width="600px" height="200px"></textarea>                                                       
  </div>
   
<div class="form-floating mb-3 mb-md-0">
<label for="inputEmail">Note (privée) </label><br><br>
<input class="form-control" id="inputFirstName" type="text" name="noteprivee" cols="80" rows="20" width="600px"height="200px"></textarea>                                                        
  </div>
 
  &nbsp;
 </div>
 <div  style="text-align: center;">
 <div  class="bnt-btn"><a href="Espace_Admin.php" style="text-align: center;"> Portail</a>&nbsp;&nbsp;&nbsp;<input class="btn btn-primary " type="submit" name="Creer" value="Creer"> &nbsp;&nbsp;&nbsp;<input class="btn btn-danger " type="reset" name="Annuler" value="Annuler"> &nbsp;&nbsp;&nbsp;<a href="invoice-form-db.php">Suivant</a></div></div>
 <br><br>
 </div>  
 
 <?php if (! empty($message)) { ?>
 <p class="errorMessage" ><?php echo $message; ?></p>
 <?php } ?> 
                                                                          
</form>
</div>

     
     
<center>
<?php
$db=mysqli_connect("localhost","root","","invoicedb");

if(isset($_POST['Creer'])){

  $itideminvoice=$_POST['itideminvoice'];
    $referclient=$_POST['referclient'];   
    
    $nameclient=$_POST['nameclient'];
    $codeclient=($_POST['codeclient']);
    $typefacture=$_POST['typefacture'];
    $datefacturation=($_POST['datefacturation']);
    $conditionregl=($_POST['conditionregl']);
    $modereglement=$_POST['modereglement']; 
    $comptebancaire=$_POST['comptebancaire']; 
    $incoterms=$_POST['incoterms']; 
    $modeledocu=$_POST['modeledocu'];
    $devise=$_POST['devise'];
    $iceclient=$_POST['iceclient'];
    $identifient=$_POST['identifient'];
    $bonclient=$_POST['bonclient'];
    $designation=$_POST['designation']; 
    $montant=$_POST['montant']; 
    $notepublique=$_POST['notepublique'];
    $noteprivee=$_POST['noteprivee']; 
    $prixHT=$_POST['prixHT'];
    $quantite=($_POST['quantite']);
    $calculHT=($_POST['calculHT']);
    $tvaitem=($_POST['tvaitem']);   
    $prixTTC=($_POST['prixTTC']);
  
    $sql="INSERT INTO invoice (itemID,invoiceID,Client_Name,Code_Client,type_invoice,date_facturation,condit_regle,mode_regle,compte_banc,incoterms,modele_doc,devise,ICE_invoice,clientID,Boncom,Designation,Montant_let,Note_publique,Note_privee,prix_HT,quantite_invoice,totalht_invoive,tva_invoice,total_ttc) VALUES ('$itideminvoice','$referclient','$nameclient','$codeclient','$typefacture','$datefacturation','$conditionregl','$modereglement','$comptebancaire','$incoterms','$modeledocu','$devise','$iceclient','$identifient','$bonclient','$designation','$montant','$notepublique','$noteprivee','$prixHT','$quantite','$calculHT','$tvaitem','$prixTTC')";
    $resultat=$db->query($sql);
    if($resultat){        
      
       echo "<h5>Création effectué</h5>";
      

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
<br>
     
<div class="footer-basic">
    <footer>
        
        <p class="copyright">Service Net © 2022</p>
    </footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
 
</html>