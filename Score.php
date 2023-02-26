<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Score</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="favicon.ico" />
</head>
<style>
  input[type=submit] {
 width:118px;
 margin-left:5px;
 box-shadow:1px 1px 1px #D83F3D;
 cursor:pointer;
 margin-right: 30px;
 color: #FFF3F3;
 ;

 }
</style>
<body>
    
<h3 style="color:black; text-align:center;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif ">Score</h3>


<center>
<form action="Score.php" method="POST" style="border-radius:10px; width: 700px; text-align: center;background-color:blanchedalmond;">
<br>
<br>
<div class="form-floating mb-4">
<label for="name">Nom : </label>
<input type="name" name="name" class="form-control" placeholder="Nom" required>
</div>
<br>
<br>
<div class="form-floating mb-4">
<label for="prenom">Prénom: </label>
<input type="firstname" name="prenom" class="form-control" placeholder="Prenom" required></div>
<br>
<br>
<div class="form-floating mb-4">
<label for="score">Score : </label>
<input type="number" name="score" class="form-control" placeholder="/100" required></div>
<br>
<br>
<input type="submit" name="Noter" value="Noter"  class="btn btn-outline-warning" style="color: black;">

<br><br>
<a href="Professionnels.php" style="text-align: left;position:relative">Retour</a>
</form>

</center>

<center>
<?php
$db=mysqli_connect("localhost","root","","service_net");

if(isset($_POST['Noter'])){
  
  $name=$_POST['name'];
  $prenom=$_POST['prenom'];  
   $score=$_POST['score'];
   $sql="INSERT INTO score (Nom_Prof,Prenom_Prof,Score) VALUES ('$name','$prenom','$score')";
   $resultat=$db->query($sql);
   if($resultat){
       echo "<h4 >Notation bien ajouté</h4>";

   }else{
       echo "<h4>Attention! Une Erreur s'est produite!</h4>";
   }
}
?>
</center>

</body>
</html>