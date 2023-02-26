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
     <title>Historique_Client</title>
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
      
     
        <li><a href="FacturesClient.php?log=logout"  type="link" style="color: white;" >Retour</a></li> 
        <li class="dropdown">       
        </div>
      </li>
    </ul>
    <br><br><br>
    <div style="color: brown; text-align:center;">
<h3 ><span title="Historique"><img src="image/histo.png" alt="Submit" width="50">Historique</h3>
</div>

    <table id="example" class="display" style="width:100%; ">
						<thead>
							<tr>
              <th>id</th> 
             <th>Factures</th>
              <th>Date Historique</th>
              
             

							</tr>
						</thead>
						<tbody>
            <?php

include "Connexion.php" ;  

$records = mysqli_query( $db , "select * from historique_client" );  

while( $data = mysqli_fetch_array( $records ))
{
?>
            
							<tr>
              <td> <?php echo $data [ 'id_histo' ]; ?> </td>
            <td> <?php echo $data [ 'facture' ]; ?> </td>
            <td> <?php echo $data [ 'date_histo' ]; ?> </td>
            
             
			  
							</tr>
							<?php
              }
              ?> 						
						
						</tbody>
						
					</table>
<br><br><br>

 </body>
 </html>