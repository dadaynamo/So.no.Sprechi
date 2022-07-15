<?php
function crea_passkey($lunghezza) {
    $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $stringaRandom = '';
    for ($i = 0; $i < $lunghezza; $i++) {
        $stringaRandom .= $caratteri[rand(0, strlen($caratteri) - 1)];
    }
    return $stringaRandom;
}

function crea_mail($passkey,$username,$email){
//function crea_mail($passkey,$username){

  $to = $email;
  $from = 'sender@example.com';
  $fromName = 'SenderName';

  $subject = "Send HTML Email in PHP by SonoSprechi";

  $htmlContent = '
      <html>
      <head>
          <title>Welcome to SonoSprechi</title>
      </head>
      <body>
          <h1>Thanks you for joining with us!</h1>
          <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;">
              <tr>
                  <th>Name:</th><td>Sonosprechi</td>
              </tr>
              <tr style="background-color: #e0e0e0;">
                  <th>Email:</th><td>contact@sonosprechi.com</td>
              </tr>
              <tr>
                  <th>Website:</th><td><a href="http://dadaymattiasito.altervista.org/esame/index.php?pag=checkpasskey&passkey='.$passkey.'&username='.$username.'">ATTIVA ACCOUNT</a></td>
              </tr>
          </table>
      </body>
      </html>';

  // Set content-type header for sending HTML email
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  // Additional headers
  $headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n";
  $headers .= 'Cc: welcome@example.com' . "\r\n";
  $headers .= 'Bcc: welcome2@example.com' . "\r\n";

  // Send email
  if(mail($to, $subject, $htmlContent, $headers)){
      echo 'Email has sent successfully.';
  }else{
     echo 'Email sending failed.';
  }



}
//function crea_mail($passkey,$username,$email)
function crea_mail1($passkey,$email){

  $to = $email;
  $from = 'sender@example.com';
  $fromName = 'SenderName';

  $subject = "Send HTML Email in PHP by Sonosprechi";

  $htmlContent = '
      <html>
      <head>
          <title>Welcome to Sonosprechi</title>
      </head>
      <body>
          <h1>Thanks you for joining with us!</h1>
          <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;">
              <tr>
                  <th>Name:</th><td>CodexWorld</td>
              </tr>
              <tr style="background-color: #e0e0e0;">
                  <th>Email:</th><td>contact@Sonosprechi.com</td>
              </tr>
              <tr>
                  <th>Website:</th><td><a href="http://dadaymattiasito.altervista.org/esame/index.php?pag=recpass&passkey='.$passkey.'&email='.$email.'">CAMBIA PASSWORD</a></td>
              </tr>
          </table>
      </body>
      </html>';

  // Set content-type header for sending HTML email
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  // Additional headers
  $headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n";
  $headers .= 'Cc: welcome@example.com' . "\r\n";
  $headers .= 'Bcc: welcome2@example.com' . "\r\n";

  // Send email
  if(mail($to, $subject, $htmlContent, $headers)){
      echo 'Email has sent successfully.';
  }else{
     echo 'Email sending failed.';
  }



}

 ?>
