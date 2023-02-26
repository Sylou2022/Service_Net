<?php
require_once "config.php";
require_once "../class/PayPalPayment.php";
 
$success = 0;
$msg = "Une erreur est survenue, merci de bien vouloir réessayer ultérieurement...";
$paypal_response = [];
 
if (!empty($_POST['paymentID']) AND !empty($_POST['payerID'])) {
   $paymentID = htmlspecialchars($_POST['paymentID']);
   $payerID = htmlspecialchars($_POST['payerID']);
 
   
   $payer->setSandboxMode(1);
   $payer->setClientID("Votre Client ID");
   $payer->setSecret("Votre Secret");
 
   $payment = $bdd->prepare('SELECT * FROM paiements WHERE payment_id = ?');
   $payment->execute(array($paymentID));
   $payment = $payment->fetch();
 
   if ($payment) {
      $paypal_response = $payer->executePayment($paymentID, $payerID);
      $paypal_response = json_decode($paypal_response);
 
      $update_payment = $bdd->prepare('UPDATE paiements SET payment_status = ?, payer_email = ? WHERE payment_id = ?');
      $update_payment->execute(array($paypal_response->state, $paypal_response->payer->payer_info->email, $paymentID));
 
      if ($paypal_response->state == "approved") {
         $success = 1;
         $msg = "";
      } else {
         $msg = "Une erreur est survenue durant l'approbation de votre paiement. Merci de réessayer ultérieurement ou contacter un administrateur du site.";
      }
   } else {
      $msg = "Votre paiement n'a pas été trouvé dans notre base de données. Merci de réessayer ultérieurement ou contacter un administrateur du site. (Votre compte PayPal n'a pas été débité)";
   }
}
echo json_encode(["success" => $success, "msg" => $msg, "paypal_response" => $paypal_response]);
