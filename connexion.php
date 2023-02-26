<?php

$db=mysqli_connect("localhost","root","","invoicedb");

if($db){
//echo "connexion établie";
}
 else {
   echo "pas de connexion";
}
?>