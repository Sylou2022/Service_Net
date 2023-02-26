<?php require_once ('Connexion.php');

$invoice_id=$_POST['invoice_id'];
$result=mysqli_query($db,"SELECT * FROM invoice where invoiceID=$invoice_id");
while ($ligne=$result->fetch_assoc()){?>
<option value=" <?php echo $ligne['invoiceID'];?>">
    <?php echo $ligne['Code_Client'];?>
    
</option>

<?php
}
?>