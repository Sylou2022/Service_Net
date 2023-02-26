<?php
require('fpdff/fpdf.php');
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'invoicedb');

$query=mysqli_query($con,"select * from invoice
	inner join clients using(clientID)
	where
	invoiceID = '".$_GET['invoiceID']."'");
$invoice=mysqli_fetch_array($query);
$date_echeance= 30;
$date_facturation=0;

//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->Image('image/logo.png', 11, 5, 37);
$pdf->Cell(130	,5,'',0,1);
//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',12);

//Cell(width , height , text , border , end line , [align] )
$pdf->Cell(130	,10,'',0,1);
$pdf->Cell(130	,10,'OPEN BUSINESS INFORMATIQUE',0,0);

$pdf->Cell(59	,5,'Facture',0,1);//end of line

//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',10);

$pdf->Cell(130	,10,'Rue Tokyo, Imm 8, Appt N:5, Ocean-10040',0,0);
$pdf->Cell(59	,5,'',0,1);//end of line

$pdf->Cell(130	,10,'RABAT',0,0);
$pdf->Cell(10	,5,'Ref: F',0,0);
$pdf->Cell(11	,5,date("d/m /"),0,0);
$pdf->Cell(36	,5,$invoice['invoiceID'],0,1);//end of line



$pdf->Cell(130	,5,'',0,0);
$pdf->Cell(30	,5,'Date facturation:',0,0);
$pdf->Cell(26	,5,date("d/m /Y"),0,1);



$pdf->Cell(130	,10,'Tel: +212648182020',0,0);
$pdf->Cell(30	,5,'Date echeance:',0,0);
$pdf->Cell(26	,5,date("d/m /Y", strtotime(' + 30 days')),0,1);

$pdf->Cell(130	,10,'FAX:+212537681156',0,0);
$pdf->Cell(25	,5,'Code client:',0,0);
$pdf->Cell(34	,5,$invoice['clientID'],0,1);//end of line

$pdf->Cell(130	,10,'Email: brahim@obimaroc.com',0,1);
$pdf->Cell(130	,3,'web:http://obimaroc.com',0,1);

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,3,'',0,1);//end of line


//billing address

$pdf->SetFont('Arial','B',9);
//add dummy cell at beginning of each line for indentation
$pdf->Cell(75	,3,'',0,0);
$pdf->Cell(50	,5,$invoice['ICE_invoice'],0,1);
$pdf->Cell(75	,5,'',0,0);
$pdf->Cell(50	,5,$invoice['name_client'],0,1);

$pdf->Cell(75	,5,'',0,0);
$pdf->Cell(50	,5,$invoice['company'],0,1);

$pdf->Cell(75	,5,'',0,0);
$pdf->Cell(50	,5,$invoice['address_client'],0,1);

$pdf->Cell(75	,5,'',0,0);
$pdf->Cell(50	,5,$invoice['phone_client'],0,1);


$pdf->Cell(50	,5,'',0,1);
$pdf->Cell(0	,5,$invoice['Boncom'],1,1);

//make a dummy empty cell as a vertical spacer

$pdf->Cell(189	,6,'',0,1);//end of line

//invoice contents
$pdf->SetFont('Arial','B',10);

$pdf->Cell(15	,8,'Num:',1,0);
$pdf->Cell(70	,8,'Description',1,0);
$pdf->Cell(50	,8,'P.U.HT',1,0);
$pdf->Cell(30	,8,'Quantite',1,0);
$pdf->Cell(31	,8,'Total HT',1,1);//end of line

$pdf->SetFont('Arial','',12);

//Numbers are right-aligned so we give 'R' after new line parameter

//items
$query=mysqli_query($con,"select * from invoice where invoiceID = '".$invoice['invoiceID']."'");
$Prix_HT=0;
$quantite_invoice=0;

$totalht_invoive=0;
$tva_invoice=20;
$total_ttc=0;
$montant_cours=0;

$ttc_impaye=0;

while($item=mysqli_fetch_array($query)){
	$pdf->Cell(15	,110,$invoice['itemID'],1,0);
	$pdf->Cell(70	,110,$invoice['Designation'],1,0);
	$pdf->Cell(50	,110,number_format($invoice['prix_HT']),1,0);
	$pdf->Cell(30	,110,number_format($invoice['quantite_invoice']),1,0,'R');
	$pdf->Cell(31   ,110,number_format($invoice['totalht_invoive']),1,1,'R');
	
	$Prix_HT+=$invoice['prix_HT'];
	$quantite_invoice+=$invoice['quantite_invoice'];
	$totalht_invoive+=$invoice['totalht_invoive'];
	$tva_invoice+=$invoice['tva_invoice'];
	$total_ttc+=$invoice['total_ttc'];
	$ttc_impaye+=$invoice['ttc_impaye'];
	
	
}

//summary
$pdf->SetFont('Arial','B',10);
$pdf->Cell(130	,8,'',0,0);
$pdf->Cell(25	,8,'Total HT:',0,0);
$pdf->Cell(11	,8,'DHR',1,0);
$pdf->Cell(30	,8,number_format($Prix_HT*$quantite_invoice),1,1,'R');//end of line

$pdf->Cell(130	,8,'',0,0);
$pdf->Cell(25	,8,'TVA 20:',0,0);
$pdf->Cell(11	,8,'DHR',1,0);
$pdf->Cell(30	,8,$invoice['tva_invoice'],1,1,'R');//end of line


$pdf->Cell(130	,8,'',0,0);
$pdf->Cell(25	,8,'Total TTC:',0,0);
$pdf->Cell(11	,8,'DHR',1,0);
$pdf->Cell(30	,8,$invoice['total_ttc'],1,1,'R');//end of line

$pdf->SetFont('Arial','B',8);

$pdf->Cell(137   ,5,'Arrete le present devis a la somme de :',0,0,'R');
$pdf->Cell(46	,5,$invoice['Montant_let'],0,1,'R');

$pdf->Cell(34   ,5,'Montant en cours en Dirham:',0,0,'R');
$pdf->Cell(18  ,5, ($invoice['ttc_impaye']+$invoice['total_ttc'] ),0,1,'R');

$pdf->Cell(28   ,5,'Condition de Reglement:',0,0,'R');
$pdf->Cell(22  ,5, $invoice['condit_regle'],0,1,'R');










$pdf->Output();
?>
