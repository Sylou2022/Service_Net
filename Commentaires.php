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
     <title>Commentaires Visiteurs</title>
     
     <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="historique.css">
<link rel="icon" href="favicon.ico" />
 </head>
 <style>

</style>
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
      
      <li><a href="Facture.php"  type="link" style="color: white;">Factures</a></li>
     
      <li class="dropdown">      
       
        <li><a href="Message.php"  type="link"style="color:white;" >Message</a></li>
        <li class="dropdown">
        <li><a href="verificationPaypal.php"  type="link" style="color: white;" >Vérification Paypal</a></li>
        <li class="dropdown">  
        <li><a href="Espace_Admin.php"  type="link" style="color: white;">Portail</a></li>
        <li class="dropdown"> 
        
        <li><a href="Admin.php?log=logout" style="color: white;" type="link" >Déconnecter</a></li>
        
             
        </div>
      </li>
    </ul>
    <br><br><br>
                 
    <h2 style="color: black; text-align: center;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Messages Visiteurs</h2>          
                   


    <table id="example" class="display" style="width:100%; ">
						<thead>
							<tr>
              <th>id</th> 
             <th>Vissiteurs</th>
              <th>Email </th>
              <th>Téléphone</th>
             <th>Date</th>
             <th>Commentaires</th>
             <th><img src="image/rpnse.png" width="45" alt="link"></th>
             

							</tr>
						</thead>
						<tbody>
            <?php

include "Connexion.php" ;  

$records = mysqli_query( $db , "select * from commentaires" );  

while( $data = mysqli_fetch_array( $records ))
{
?>
            
							<tr>
              <td> <?php echo $data [ 'ID_com' ]; ?> </td>
              
            <td> <?php echo $data [ 'nom_com' ]; ?> </td>
            <td> <?php echo $data [ 'email_com' ]; ?> </td>
            <td> <?php echo $data [ 'phone_com' ]; ?> </td>
             <td> <?php echo $data [ 'date_com' ]; ?> </td>
             <td> <?php echo $data [ 'message_com' ]; ?> </td>
             <td> <a href="Reponse.html"><button value="Repondre" class="btn btn-info">Répondre</button></a></td>
             
			  
							</tr>
							<?php
              }
              ?> 						
						
						</tbody>
						
					</table>
          <br><br>
 
 </body>
 </html>