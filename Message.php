
<?php
$host     = 'localhost';
$username = 'root';
$password = '';
$dbname   ='service_net';

$conn = new mysqli($host, $username, $password, $dbname);
if(!$conn){
    die("Cannot connect to the database.". $conn->error);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message_Privé</title>
   
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
       
    <link rel="icon" href="favicon.ico" />
</head>
<style>
    #example tr:nth-child(even){background-color: #f2f2f2;}
  
  #example tr:hover {background-color: #d89735;}
  ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
	background-color: #333;
  }
  
  li {
	float: left;
  }
  
  li a, .dropbtn {
	display: inline-block;
	color: white;
	text-align: center;
	padding: 14px 16px;
	text-decoration: none;
  }
  
  
  
  li.dropdown {
	display: inline-block;
  }
  
  .dropdown-content {
	display: none;
	position: absolute;
	background-color: #f9f9f9;
	min-width: 130px;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	z-index: 1;
  }
  
  .dropdown-content a {
	color: black;
	padding: 11px 15px;
	text-decoration: none;
	display: block;
	text-align: left;
  }
  
  .dropdown-content a:hover {background-color: #d89735;}
  
  .dropdown:hover .dropdown-content {
	display: block;
  }
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
       
      <li><a href="Factures.php"  type="link" style="color: white;">Factures</a></li>
     
      <li class="dropdown">
      <li><a href="Commentaires.php"  type="link" style="color: white;" >Commentaires</a></li>
        <li class="dropdown"> 
        <li><a href="verificationPaypal.php"  type="link" style="color: white;" >Vérification Paypal</a></li>
        <li class="dropdown"> 
       
        <li><a href="Espace_Admin.php"  type="link" style="color: white;" >Portail</a></li>
        <li class="dropdown">      
        <li><a href="Admin.php?log=logout" style="color: white;" type="link" style="color: white;">Déconnecter</a></li> 
        </div>
      </li>
    </ul>
<br><br><br>
<h2 style="color: black; text-align: center;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Messages Clients</h2>



<table id="example" class="display" style="width:100%; ">
						<thead>
							<tr>
              <th>id</th> 
             <th>Nom Client</th>
              <th>Email Client</th>
              <th>Date Message</th>
             <th>Objet</th>
             <th>Message</th>
             <th><img src="image/rpnse.png" width="45" alt="link"></th>
             

							</tr>
						</thead>
						<tbody>
            <?php

include "Connexion.php" ;  

$records = mysqli_query( $db , "select * from texto" );  

while( $data = mysqli_fetch_array( $records ))
{
?>
            
							<tr>
              <td> <?php echo $data [ 'id' ]; ?> </td>
              
            <td> <?php echo $data [ 'name_Client' ]; ?> </td>
            <td> <?php echo $data [ 'email_Client' ]; ?> </td>
            <td> <?php echo $data [ 'date_message' ]; ?> </td>
             <td> <?php echo $data [ 'subject_message' ]; ?> </td>
             <td> <?php echo $data [ 'message_text' ]; ?> </td>
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