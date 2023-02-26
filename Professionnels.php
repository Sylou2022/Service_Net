

<?php
// Informations d'identification
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'service_net');
 
// Connexion à la base de données MySQL 
$conn = mysqli_connect("localhost", "root", "", "service_net");
 
// Vérifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>



<!Doctype html>
<html>
<!-- fichier tableau.html -->
<head>
<meta charset="utf-8">
<title>Les Professionnels</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script> 

        <link rel="stylesheet" href="historique.css">
 
        <link rel="icon" href="favicon.ico" />
</head>
<style>
    #example tr:nth-child(even){background-color: #f2f2f2;}
  
  
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
	min-width: 160px;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	z-index: 1;
  }
  
  .dropdown-content a {
	color: black;
	padding: 12px 16px;
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


$(document).ready(function() {
 
alert('Vérifiez la Proximité par VILLE!');
} );


</script>
<body>
<ul style="background-color: black;">
  <ul>
  <li><a href="Accueil.php"  type="link" style="color: white;">Accueil</a></li> 
  <li><a href="Presentation.php"  type="link" style="color: white;">Présentation</a></li> 
  <li class="dropdown">
  <li><a href="Service.php"  type="link" style="color: white;">Services</a></li> 
  <li class="dropdown">

 
      <li><a href="users.php" style="color: white;"><span class="glyphicon glyphicon-user"></span> S'inscrire</a></li>
      <li><a href="Compte.php" style="color: white;"><span class="glyphicon glyphicon-log-in" ></span> Compte</a></li>
    </ul>
 
</ul>

<br>
<br>

  <h2 style="color: black; text-align: center;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Liste des Professionnels</h2>
<table id="example" class="display" style="width:100%; ">
						<thead>
							<tr>
              <th>Référence</th> 
             <th>Nom</th>
              <th>Prénom</th>
              <th>Ville</th>
             <th>Domaine</th>
             <th><a href="Score.php" style="color: brown;"data-toggle="tooltip" title="Score"><span>Noter ici</span></a></th>
             <th>Agenda</th>
							</tr>
						</thead>
						<tbody>
            <?php

include "Connexion.php" ;  

$records = mysqli_query( $db , "select * from professionnels" );  

while( $data = mysqli_fetch_array( $records ))
{
  
?>
            
							<tr>
              <td> <?php echo $data [ 'ID_Profess' ]; ?> </td>
            <td> <?php echo $data [ 'Nom_Profess' ]; ?> </td>
            <td> <?php echo $data [ 'Prenom_Profess' ]; ?> </td>
            <td> <?php echo $data [ 'Ville' ]; ?> </td>
             <td> <?php echo $data [ 'Domaine' ]; ?> </td>
             <td> <?php echo $data [ 'Score_Profess' ]; ?> </td>
             <td> <a href="Agenda.html" data-toggle="tooltip" title="Agenda"><span><img src="image/calendar.png" width="40" alt="link"></span></a></td>





							</tr>
							<?php
              }
              ?> 						
						
						</tbody>
						
					</table>
  <br>
<br>


 

</body>
</html>