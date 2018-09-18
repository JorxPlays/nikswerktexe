<?php
if(isset($_POST['email'])) {
 
    // Wie is de reciever
    $email_to = "81508@glr.nl";
    $email_subject = "Er is een vraag!";
 
    function died($error) {
        // Error displayer
        echo "Er is iets fout gegaan tijdens het verzenden!.<br /><br />";
        echo $error."<br /><br />";
        echo "Los de onderstaande problemen op voordat de email verzonden kon worden.<br /><br />";
        die();
    }
 
 
    // Is alle data verstuurd?
    if(!isset($_POST['Voornaam']) ||
        !isset($_POST['Achternaam']) ||
        !isset($_POST['email']) ||
        !isset($_POST['Telefoonnummer']) ||
        !isset($_POST['Extra'])) {
        died('Het lijkt erop dat u nog niet alle informatie hebt gegeven. Ga alstublieft terug en geef de benodigde informatie.');       
    }
 
     
    // Van informatie naar variables.
    $Voornaam = $_POST['Voornaam']; 
    $Achternaam = $_POST['Achternaam']; 
    $email_from = $_POST['email']; 
    $Telefoonnummer = $_POST['Telefoonnummer']; 
    $Extra = $_POST['Extra']; 
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'Het ingevoerde email lijkt ongeldig te zijn.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$Voornaam)) {
    $error_message .= 'Het ingevoerde voornaam lijkt ongeldig te zijn.<br />';
  }
 
  if(!preg_match($string_exp,$Achternaam)) {
    $error_message .= 'Het ingevoerde achternaam lijkt ongeldig te zijn.<br />';
  }
 
  if(strlen($Extra) < 2) {
    $error_message .= 'Het ingevoerde extra informatie lijkt ongeldig te zijn.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Er is een vraag binnengekomen! Bekijk beneden voor meer informatie!\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Voornaam: ".clean_string($Voornaam)."\n";
    $email_message .= "Achternaam: ".clean_string($Achternaam)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telefoonnummer: ".clean_string($Telefoonnummer)."\n";
    $email_message .= "Extra informatie: ".clean_string($Extra)."\n";
 
// Email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- Jordy dit is jouw stuk waar je je html shit in moet gooien en "Email verzonden" -->
 
Bedankt voor het contact opnemen!
 
<?php
 
}
?>