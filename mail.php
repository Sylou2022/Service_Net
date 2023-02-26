<?php
 $name = $_POST['name'];
 $email = $_POST['email'];
 $message = $_POST['message'];

 $mailheader = "From :".$name."<".$email.">\r\n";
 $recipient = "sylvaindiouf18@gmail.com";
 mail($recipient,  $message, $mailheader)
 or die ("Error");
 echo '
 
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Mail</title>
 </head>
 <body>
     <h3> Le Message a bien été transmis </h3>
   

 </body>
 </html> 
 
 ';
 
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Mail</title>
 </head>
 <body>
 <a href="Reponse.html">Retour à la Page Réponse</a>
 </body>
 </html> 