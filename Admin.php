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
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width"/>
  <title>.....Privé.....</title>
  <link rel="stylesheet" href="Pagestyle.css">
  <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="icon" href="favicon.ico" />
  <style>
      body{
        background: linear-gradient(to right, #D3D3D3, #D3D3D3); 
}
.box {
  border: 1px solid #c4c4c4;
  padding: 30px 25px 10px 25px;
  background: white;
  margin: 30px auto;
  width: 410px;
}
h1.box-logo a {
  text-decoration:none;
}
h1.box-title {
  color: #AEAEAE;
  background: #f8f8f8;
  font-weight: 300;
  padding: 15px 25px;
  line-height: 30px;
  font-size: 25px;
  text-align:center;
  margin: -27px -26px 26px;
}
.box-button {
  border-radius: 5px;
  background: #d89735;
  text-align: center;
  cursor: pointer;
  font-size: 19px;
  width: 100%;
  height: 51px;
  padding: 0;
  color: #fff;
  border: 0;
  outline:0;
}
.box-register
{
  text-align:center;
  margin-bottom:0px;
}
.box-register a
{
  text-decoration:none;
  font-size:12px;
  color:red;
}
.box-input {
  font-size: 14px;
  background: #fff;
  border: 1px solid #ddd;
  margin-bottom: 25px;
  padding-left:10px;
  border-radius: 5px;
  width: 347px;
  height: 50px;
}
.box-input:focus {
    outline: none;
    border-color: whitesmoke;
   
}
.sucess{
  text-align: center;
  color: white;
}
.sucess a {
  text-decoration: none;
  color: #58aef7;
}
p.errorMessage {
    background-color: #e66262;
    border: #AA4502 1px solid;
    padding: 5px 10px;
    color: #FFFFFF;
    border-radius: 3px;
}
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Poppins', sans-serif
}

body {
	background: #ecf0f3
  
}

.wrapper {
	max-width: 350px;
	min-height: 500px;
	margin: 80px auto;
	padding: 40px 30px 30px 30px;
	background-color: #ecf0f3;
	border-radius: 15px;
	box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff
}

.logo {
	width: 80px;
	margin: auto
}

.logo img {
	width: 100%;
	height: 80px;
	object-fit: cover;
	border-radius: 50%;
	box-shadow: 0px 0px 3px #5f5f5f, 0px 0px 0px 5px #ecf0f3, 8px 8px 15px #a7aaa7, -8px -8px 15px #fff
}

.wrapper .name {
	font-weight: 600;
	font-size: 1.4rem;
	letter-spacing: 1.3px;
	padding-left: 10px;
	color: #555
}

.wrapper .form-field input {
	width: 100%;
	display: block;
	border: none;
	outline: none;
	background: none;
	font-size: 1.2rem;
	color: #666;
	padding: 10px 15px 10px 10px
}

.wrapper .form-field {
	padding-left: 10px;
	margin-bottom: 20px;
	border-radius: 20px;
	box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff
}

.wrapper .form-field .fas {
	color: #555
}

.wrapper .btn {
	box-shadow: none;
	width: 100%;
	height: 40px;
	background-color: black;
	color: #fff;
	border-radius: 25px;
	box-shadow: 3px 3px 3px #b1b1b1, -3px -3px 3px #fff;
	letter-spacing: 1.3px
}

.wrapper .btn:hover {
	background-color: #d89735;
}

.wrapper a {
	text-decoration: none;
	font-size: 0.8rem;
	color: #d89735
}

.wrapper a:hover {
	color: #039BE5
}

@media(max-width: 380px) {
	.wrapper {
		margin: 30px 20px;
		padding: 40px 15px 15px 15px
	}
}
  </style>
</head>

<body>
<?php
require('Connexion.php');
session_start();
if (isset($_POST['userName'])){
  $username = stripslashes($_REQUEST['userName']);
  $username = mysqli_real_escape_string($conn, $username);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `administrateur` WHERE username='$username' and password='$password'";
  $result = mysqli_query($conn,$query) or die(mysqli_connect_error());
  $rows = mysqli_num_rows($result);
  if($rows==1){
      $_SESSION['username'] = $username;
      header("Location: Espace_Admin.php");
  }else{
    $message = "Nom d'utilisateur ou Mot de passe incorrect.";
  }
}
?>
<form class="box" action="Admin.php" method="post" name="Admin">

<div class="wrapper">
    <div class="logo"> <img src="image/Logo/SERVICE NET (9).png" alt=""> </div>
    <div class="text-center mt-4 name"><span><img src="image/cad1.png" alt="icone"></span> </div><br>
    <form class="p-3 mt-3">
        <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span> <input type="text" name="userName" id="username" placeholder="Nom d'utilisateur" required> </div><br>
        <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span> <input type="password" name="password" id="pwd" placeholder="Mot de Passe" required> </div> <button class="btn mt-3" >Connexion</button>
    </form>
    <div class="text-center fs-6"> <a href="Accueil.php">Retour à l Accueil</a> </div>
   

<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
</div>
</form>
</body>
</html>