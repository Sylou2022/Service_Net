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

 <?php
try
{
 $bdd = new PDO("mysql:host=localhost;dbname=service_net", "root", "");
 $bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
  die("Une érreur a été trouvé : " . $e->getMessage());
}
$bdd->query("SET NAMES UTF8");

if (isset($_GET["s"]) AND $_GET["s"] == "Rechercher")
{
 $_GET["terme"] = htmlspecialchars($_GET["terme"]); //pour sécuriser le formulaire contre les intrusions html
 $terme = $_GET["terme"];
 $terme = trim($terme); //pour supprimer les espaces dans la requête de l'internaute
 $terme = strip_tags($terme); //pour supprimer les balises html dans la requête

 if (isset($terme))
 {
  $terme = strtolower($terme);
  $select_terme = $bdd->prepare("SELECT Nom_Rech, Contenu FROM recherche WHERE Nom_Rech LIKE ? OR Contenu LIKE ?");
  $select_terme->execute(array("%".$terme."%", "%".$terme."%"));
 }
 else
 {
  $message = "Vous devez entrer votre requete dans la barre de recherche";
 }
}
?>


<style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  height: 5%;
  width: 100%;
  background-color:lightgray;
  color: black;
  text-align: center;
}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche_détaillée</title>
    <link rel="stylesheet" href="historique.css">
    <link rel="icon" href="favicon.ico" />
</head>
<style>
  p{
    width: 790px; /* On a indiqué une largeur (obligatoire) */
    margin: auto; /* On peut donc demander à ce que le bloc soit centré avec auto */
    
    text-align: justify;
    padding: 12px;
    margin-bottom: 70px; 
    line-height: 1.8;
}
h2{
 font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
 color: black;
 text-align: center;
}
  
</style>
<body>
<ul style="background-color: black;">        
        <li><a  href="Accueil.php?log=logout" style="color: white;">Retour</span></a></li>
        <li class="dropdown">
      </div>
    </li> 
  </ul>
  <br><br><br>
  
  <?php
      while ($terme_trouve = $select_terme->fetch()) {
          echo "<div><h2>".$terme_trouve['Nom_Rech']."</h2> <br> <br><p> ".$terme_trouve['Contenu']."</p>";
      }
      $select_terme->closeCursor();
   ?>


<br>
<br><br>
<div class="footer">
  <p>Copyright &copy; Service Net 2021-2022</p>
</div>
</body>
</html>