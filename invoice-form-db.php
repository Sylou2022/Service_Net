<?php
$con= mysqli_connect('localhost','root','');
mysqli_select_db($con, 'invoicedb');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generateur</title>
    <link rel="icon" href="favicon.ico" />
    <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<style>
    .facture{
        background-color:aqua;
        margin-left: 245px;
        width: 50%;
        text-align: center;
        height: 10em;
       
        

    }
</style>
<body>
<div class="facture" >
    Selectionner Référence de Facture:
    
    <form action="invoice-db.php" method="get">
        <select name="invoiceID" id="">
            <?php
            $query = mysqli_query($con,"select * from invoice");
            while($invoice = mysqli_fetch_array($query)){
                echo"<option value='".$invoice['invoiceID']."'>".$invoice['invoiceID']."</option>";
            }
            ?>
        </select>
        <input  type="submit" value="Generer">
    </form>
    
    <br><br>
            <a href="Facture.php" style="color: red;">Retour sur la Facture</a>
            </div>
</body>
</html>