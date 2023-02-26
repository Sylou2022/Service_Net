<?php
if(!empty($_POST['Gererer'])){
  $refe=$_POST['referenceclt'];  
  $nomfourni=$_POST['nomfourni'];
  $civi=$_POST['civi'];
  $refrence=$_POST['referencepro'];
  $stock=$_POST['stock'];
  $designation=$_POST['designation'];
  $prixunit=$_POST['prixunit'];
  $commandee=$_POST['commandee'];
  $totaltva=$_POST['totaltva'];
  $prixTTC=$_POST['prixTTC'];

  require("fpdff/fpdf.php");

 $pdf = new FPDF();
  $pdf -> AddPage ();
  
  $pdf->Image('image/logo.png', 10, 10, 35);
  $pdf->SetFont("Arial","B",12);
  $pdf->setFillColor(230,230);
  $pdf->Cell(0,20,"Facture Client N: 0001",1,1,'C');
  $pdf->Cell(0,5, date("d / m / Y"),1,1); 
  


  $pdf->Cell(20,30,"Refe:C",1,0,'C');
  $pdf->Cell(20,30,"Nom",1,0,'C');
  $pdf->Cell(20,30,"Civilite",1,0,'C');
  $pdf->Cell(21,30,"Refe Pro",1,0,'C');
  $pdf->Cell(20,30,"Stock",1,0,'C');
  $pdf->Cell(22,30,"Desig",1,0,'C');
  $pdf->Cell(25,30,"Prix HT\n",1,0,'C');
  $pdf->Cell(0,30,"Qte-Com",1,1,'C'); 
  
  


  $pdf->Cell(20,30, $refe,1,0,'C');
  $pdf->Cell(20,30,$nomfourni,1,0,'C');
  $pdf->Cell(20,30,$civi,1,0,'C'); 
  $pdf->Cell(21,30, $refrence,1,0,'C');
  $pdf->Cell(20,30,$stock,1,0,'C');
  $pdf->Cell(22,30,$designation,1,0,'C');
  $pdf->Cell(25,30,$prixunit,1,0,'C');
  $pdf->Cell(0,30,$commandee,1,1,'C'); 
  
  

 



  $pdf->Cell(0,10,"",0,1,'C');
  $pdf->Cell(0,20,"Total-TVA: ",1,1,'C');
  $pdf->Cell(0,20,$totaltva,1,1,'C');
  $pdf->Cell(0,8,"",0,1,'C');
  $pdf->Cell(0,20,"PrixTTC :",1,1,'C'); 
  $pdf->Cell(0,20,$prixTTC,1,1,'C');

  $pdf->Cell(0,40,"",0,1,'C');
  $pdf->Cell(0,10,"",0,1,'C');
  $pdf->Cell(0,30, "Signature:.............." ,1,1,'C');


  $file = time ().'.pdf';
  $file_name = 'Facture.pdf';
  $pdf->output($file,'D');
  $pdf->output();
 

}

?>
