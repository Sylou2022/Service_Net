<?php

$db=mysqli_connect("localhost","root","","service_net");

if($db){
//echo "connexion établie";
}
 else {
   echo "pas de connexion";
}
?>