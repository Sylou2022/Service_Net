<?php require_once ('Connexion.php');

$item_id=$_POST['item_id'];
$result=mysqli_query($db,"SELECT * FROM invoice where itemID=$item_id");
while ($ligne=$result->fetch_assoc()){?>
<option value=" <?php echo $ligne['invoiceID'];?>">
    <?php echo $ligne['invoiceID'];?>
    
</option>


 

<?php
}
?>