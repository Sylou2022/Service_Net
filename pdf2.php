<?php
if(!empty($_POST['Effectuer'])){

   
  $descript=$_POST['description'];
  $quanti=$_POST['quantite'];
  $prixunitht=$_POST['prixunitht'];
  $totalh=$_POST['totalht'];
  $tvaend=$_POST['tvaendhr'];
  $prixTTC=$_POST['prixTTC'];


  require("fpdff/fpdf.php");

 $pdf = new FPDF();
  $pdf -> AddPage ();
   
  $pdf->SetFillColor(221); 
  $pdf->Image('image/logo.png', 10, 10, 35);
 
  $pdf->SetFont("Arial","B",12); 
  
  $pdf->Cell(0,20,"DEVIS N:0001",1,1,'C');
  $pdf->Cell(0,5, date("d / m / Y"),1,1); 
  
  



   
  $pdf->Cell(23,30,"Description",1,0,'C');
  $pdf->Cell(20,30,"Quantite",1,0,'C');
  $pdf->Cell(20,30,"prix U HT",1,0,'C');
  $pdf->Cell(20,30,"Total HT",1,0,'C');
  $pdf->Cell(20,30,"TVA DHR",1,0,'C');
  $pdf->Cell(0,30,"Total TTC",1,1,'C');
  
  $pdf->setFillColor(230,230);
  


  
  
  $pdf->Cell(23,30,$descript,1,0,'C');
  $pdf->Cell(20,30,$quanti,1,0,'C'); 
  $pdf->Cell(20,30, $prixunitht,1,0,'C');
  $pdf->Cell(20,30,$totalh,1,0,'C');
  $pdf->Cell(20,30,$tvaend,1,0,'C');
  $pdf->Cell(0,30, $prixTTC,1,1,'C');

  
 
  $pdf->Cell(0,40,"",0,1,'C');
  $pdf->Cell(0,40,"",0,1,'C');
 
  
  $pdf->Cell(0,30, "Signature:.............." ,1,1,'C');
 

  $file = time ().'.pdf';
  $pdf->output($file,'D');
  $pdf->output();
 

}

?>
