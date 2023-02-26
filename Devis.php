
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devis</title>
    <link rel="icon" href="favicon.ico" />
    <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<style type="text/css">		
		img{
			width: 70px;
		}		
	</style>
  <script>
    function tva(){
      var prixHT = Number(document.getElementById("ht").value);
				var prixTva = prixHT*0.2;
				var prixTTC = prixHT+prixTva;
        document.getElementById("ht").value = "Total TTC est: " + prixTTC + " Dirhams";
			}
</script>
<body class="bg-info">


<div id="layoutAuthentication">
 <div id="layoutAuthentication_content">
 <main>
<div class="container">
 <div class="row justify-content-center">
 <div class="col-lg-7">
<div class="card shadow-lg border-0 rounded-lg mt-5">
<div class="card-header"><img src="image/logo.png" width="80" height="25" /><h3 class="text-center font-weight-light my-4">Devis </h3></div>
<div  style="font-family:Arial, Helvetica, sans-serif ;text-align:left; color:brown">
<small>OBI </small><br>
 <small>Adresse:Ocean, Agdal/ Rabat</small><br>
 <small>Code Postal:............</small><br>
 <small>Tel:.................</small>
 </div>

 
 <div class="card-body">

<form name="mon-formulaire1" action="pdf2.php" method="POST">
<div  style="font-family:Arial, Helvetica, sans-serif ;text-align:right; margin-right:90px;">
<small>Nom du Client</small><br>
 <small>Adresse:...........</small><br>
 <small>Code Postal:.....</small><br>
 <small>Tel:.....................</small>
 </div>
<hr>
<div class="row mb-3">

 <div class="col-md-6">
<div class="form-floating mb-3 mb-md-0">
<label for="inputEmail"> Description :</label><br><br>
<input class="form-control" id="inputFirstName" type="text" name="description"  required/>                                                        
  </div>
 </div>

 
 <div class="col-md-6">
<div class="form-floating mb-3 mb-md-0">
<label for="inputEmail"> Quantité: </label><br><br>
<input class="form-control" id="inputFirstName" type="number" name="quantite"  />                                                        
  </div>
 </div>

 <div class="col-md-6">
<div class="form-floating mb-3 mb-md-0">
<label for="inputEmail"> Prix Unit HT DHR: *</label><br><br>
<input class="form-control" id="inputFirstName" type="number" name="prixunitht"  required/>                                                        
  </div>
 </div>
 <div class="col-md-6">
<div class="form-floating mb-3 mb-md-0">
<label for="inputEmail"> Total HT DHR :</label><br><br>
<input class="form-control" id="inputFirstName" type="text" name="totalht"  />                                                        
  </div>
 </div>
 <div class="col-md-6">
<div class="form-floating mb-3 mb-md-0">
<label for="inputEmail"> TVA 20% DHR:</label><br><br>
<input class="form-control" id="inputFirstName" type="text" name="tvaendhr"  />                                                        
  </div>
 </div>
 <div class="col-md-6">
<div class="form-floating mb-3 mb-md-0">
<label for="inputEmail"> Total TTC DHR:</label><br><br>
<input class="form-control" type="text"  id ="ht" name="prixTTC"><p onclick="tva()"> Click ici Résultat </p>		                                                      
  </div>
  </div>
  <br><br>
<div class="mt-4 mb-0">

 <div class="d-grid"><input class="btn btn-primary active" type="submit" name="Effectuer" value="Effectuer"></div>&nbsp;&nbsp;
 <div class="d-grid"><input class="btn btn-danger active" type="reset" name="Annuler" value="Annuler"></div>
 </div>  
 &nbsp;
                                                                             
</form>

<a href="Accueil.php" style="text-align: center;"> Accueil</a> 
</body>
</html>