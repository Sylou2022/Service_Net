
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
    <title>Véréfiation_Paiement</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="historique.css">
<link rel="icon" href="favicon.ico" />
 </head>
 
<script>
 $(document).ready(function() {
    $('#example').DataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
        }
    } );
} );



</script>
<body>
<ul style="background-color: black;">    


<li><a href="Message.php"  type="link" style="color: white;" >Message</a></li> 
<li class="dropdown">  
<li><a href="VerifiPaie.php"  type="link" style="color: white;" >Paiement</a></li> 
<li class="dropdown">  
<li><a href="Factures.php"  type="link" style="color: white;" >Factures</a></li> 
<li class="dropdown">   

<li><a href="Admin.php"  type="link" style="color: white;" >Déconnecter</a></li> 
<li class="dropdown"> 
</div>
</li>
</ul>
<br><br><br>
         


<table id="example" class="display" style="width:100%; ">
						<thead>
							<tr>
              <th>id</th> 
             <th>Nom </th>
              <th>Email </th>
              <th>Adresse</th>
             <th>Ville</th>
             <th>Pays </th>
             <th>Code Postal</th>
             <th>Nom Complet </th>
             <th>N° Carte</th>
             <th>Mois </th>
             <th>Date Exp </th>
             <th>Date Paie </th>
            
              <th><img src="image/Icon/check.png" width="25" alt="link"></th>
              <th></th>
							</tr>
						</thead>
						<tbody>
            <?php

include "Connexion.php" ;  

$records = mysqli_query( $db , "select * from payement" );  

while( $data = mysqli_fetch_array( $records ))
{
?>
            
							<tr>
              <td> <?php echo $data [ 'id_payement' ]; ?> </td>
            <td> <?php echo $data [ 'nom' ]; ?> </td>
            <td> <?php echo $data [ 'email' ]; ?> </td>
            <td> <?php echo $data [ 'adresse' ]; ?> </td>
             <td> <?php echo $data [ 'ville' ]; ?> </td>
             <td> <?php echo $data [ 'pays' ]; ?> </td>
             <td> <?php echo $data [ 'code_postal' ]; ?> </td>
             <td> <?php echo $data [ 'Reference' ]; ?> </td>
             <td> <?php echo $data [ 'numero_carte' ]; ?> </td>
             <td> <?php echo $data [ 'mois' ]; ?> </td>
             <td> <?php echo $data [ 'date_expire' ]; ?> </td>
             <td> <?php echo $data [ 'date_paie' ]; ?> </td>
             <td> <?php echo $data [ 'checked' ]; ?> </td>
             <td> <a href="Reponse.html"><button value="Repondre" class="btn btn-info">Répondre</button></a></td>
							</tr>
							<?php
              }
              ?> 						
						
						</tbody>
						
					</table>
          <br><br><br>

</body>
</html>