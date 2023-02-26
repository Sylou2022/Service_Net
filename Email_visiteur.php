<?php
  // Initialiser la session
  
include "Connexion.php";
 session_start(); 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Email_Visiteur</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
</div>
</li>
</ul>
<br><br><br>



<table id="example" class="display" style="width:100%; ">
    <thead>
      <tr>
      <th>id</th> 
     <th>Email_Visiteur</th>
      <th>Répondre</th>
      
     

      </tr>
    </thead>
    <tbody>
    <?php

include "Connexion.php" ;  

$records = mysqli_query( $db , "select * from email_visiteur" );  

while( $data = mysqli_fetch_array( $records ))
{
?>
    
      <tr>
      <td> <?php echo $data [ 'id' ]; ?> </td>
    <td> <?php echo $data [ 'email' ]; ?> </td>
    <td> <a href="Reponse.php"><button value="Repondre" class="btn btn-info">Répondre</button></a></td>
    
     

      </tr>
      <?php
      }
      ?> 						
    
    </tbody>
    
  </table>
<br><br><br>

</body>
</html>
  