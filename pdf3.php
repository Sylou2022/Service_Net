<?php
require("fpdf.php");
$con= mysqli_connect('localhost','root','');
mysqli_select_db($con, 'invoicedb');

$query = mysqli_query($con,"select * from invoice inner join clients using(clientID)
where invoiceID = '".$GET['invoiceID']."'");
$invoice = mysqli_fetch_array($query);





$pdf = new FPDF('P','mm','A4');

$pdf ->AddPage();
$pdf ->SetFont('Arial', 'B',14);
$pdf ->Cell(130 , 5, 'GEMUL APPLIANCES.CO',0,0);
$pdf ->Cell(59 , 5,'INVOICE',0,1);
$pdf ->SetFont('Arial', 12);
$pdf ->Cell(130,5,'[Street Address]',0,0);
$pdf ->Cell(59, 5, '', 0,1);

$pdf ->Cell(130, 5, '[City, Country, ZIP]', 0,0);
$pdf ->Cell(25, 5, 'Date', 0,0);
$pdf ->Cell(34, 5, '[]dd/mm/yyyy', 0,1);


$pdf ->Cell(130, 5, 'Phone [+12345678]', 0,0);
$pdf ->Cell(25, 5, 'Invoice #', 0,0);
$pdf ->Cell(34, 5, '1234567', 0,1);


?>