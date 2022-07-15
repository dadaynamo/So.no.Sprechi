<?php
if($pag=='active_ut')
{

$q="UPDATE utente SET attivo=1 WHERE idut=".$_GET["idut"];
$rq=mysql_query($q) or die (mysql_error());
header ("Location: index.php?pag=ut_list_act");

}
if($pag=='active_ut_1')
{

$q="UPDATE utente SET attivo=1 WHERE idut=".$_GET["idut"];
$rq=mysql_query($q) or die (mysql_error());
header ("Location: index.php?pag=");

}
if($pag=='disable_ut')
{

$q="UPDATE utente SET attivo=0 WHERE idut=".$_GET["idut"];
$rq=mysql_query($q) or die (mysql_error());
header ("Location: index.php?pag=ut_list_dis");

}

if($pag=='checkpasskey')
{
    //filtraggio variabili generali
    $passkey=filter_input(INPUT_GET,'passkey',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username=filter_input(INPUT_GET,'username',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  $q="SELECT * FROM utente WHERE username='".$username."'";
  $rq=mysql_query($q) or die (mysql_error());


  $riga=mysql_fetch_assoc($rq) or die (mysql_error());

  echo $riga["passkey"];
  echo '<br>';
  echo $passkey;

  if($riga["passkey"]==$passkey)
  {
  $u="UPDATE utente SET passkey= NULL WHERE idut=".$riga["idut"];
  $ru=mysql_query($u) or die (mysql_error());
  //header("Location: http://dadaymattiasito.altervista.org/esame/index.php");
header("Location: index.php");
  }else
  {
    echo '<p>Errore irreversibile contattare gli amministratori</p>';
  }


}

//recupera password
if ($pag=="rec_pass" && !isset($_SESSION["entita"]))
{
  testata();

  echo '<div class="container" style="margin-top:10px;">'."\n";
    echo '<form method="POST" action="index.php">';
    echo '<div class="row">';
    echo '<div class="col md-6">';
    echo '<p>Inserisci email profilo: <input type="email" name="email"></p>';
    echo '<img src="captcha/captcha.php" >';
    echo '<label> CAPTCHA <input type="text" name="captcha" required></label>';
    echo '</div>';
    echo '<div class="col md-6"></div>';
    echo '</div>';
    echo '<div class="row">';
    echo '<div class="col md-6"></div>';
    echo '<div class="col md-6">';
       echo '<input type="hidden" name="caso" value="rec_pass_1">';
    echo '<input type="submit" value="conferma" class="btn btn-primary">';
    echo '</div>';
    echo '</div>';


    echo '</form>';
  echo "</div>";
closer();
}

if ($caso=="rec_pass_1" && !isset($_SESSION["entita"]))
{
  $email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
echo $email;

  if ($_POST['captcha'] != $_SESSION['captcha']) {
      die("<a href='index.php'>Attenzione - Codice captcha non valido!</a>");
  }
  else{
    $qe="SELECT * FROM utente WHERE email='".$email."'";
    $rqe=mysql_query($qe) or die (mysql_error());
    $num=mysql_num_rows($rqe) or die(mysql_error());
    if($num==1)
    {
    $passkey=crea_passkey(5);
    crea_mail1($passkey,$_POST["email"]);

    $q="UPDATE utente SET passkey='".$passkey."' WHERE email='".$email."'";
    $rq=mysql_query($q)  or die(mysql_error());
    }
  }

}
if($pag=='recpass')
{
  //filtraggio variabili generali
  $passkey=filter_input(INPUT_GET,'passkey',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $email=filter_input(INPUT_GET,'email',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  $q="SELECT * FROM utente WHERE email='".$email."'";
  $rq=mysql_query($q) or die (mysql_error());

  $riga=mysql_fetch_assoc($rq) or die (mysql_error());

  if($riga["passkey"]==$passkey)
  {
      testata_ut();
     echo '<div class="container " style="margin-top:10px; margin-bottom:10px;">';
     echo '<h3 class="text-primary">SCEGLI NUOVA PASSWORD</h3>';
     echo '</div>';

     //form
     echo '<form method="POST" action="index.php">';



     echo '<hr>';
echo '<div class="container " style="margin-top:10px; margin-bottom:10px;">';
     echo '<div class="form-row">';

        echo '<div class="form-group col-md-6">';
          echo '<label for="myInput">Nuova Password</label>';
          echo '<input type="password" class="form-control" id="myInput1" name="npassword1">';
        echo '</div>';

        echo '<div class="form-group col-md-6">';
          echo '<label for="myInput">Ripeti nuova password</label>';
          echo '<input type="password" class="form-control" id="myInput2" name="npassword2">';
        echo '</div>';
      echo '</div>';

     echo '<div class="container">';
        echo '<div class="form-group">';
         echo '<div class="row align-items-center remember">';
         echo '<input type="checkbox" onclick="myFunction1()">Mostra password';
        echo '</div>';
       echo '</div>';
     echo '</div>';

     echo '<input type="hidden" name="caso" value="recpass1">';
     echo '<input type="hidden" name="email" value="'.$email.'">';
     echo '';
     echo '<hr>';
     echo '<button type="submit" class="btn btn-primary">Aggiorna</button>';
     echo '</form>';
    echo '</div>';
     closer();
  }
  else {

    echo "passkey diverse";


  }
}
if($caso=='recpass1')
{
 $npassword1=filter_input(INPUT_POST,'npassword1',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
 $npassword2=filter_input(INPUT_POST,'npassword2',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
 $email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
 if($npassword1==$npassword2){
 $q="UPDATE utente SET password='".password_hash($npassword1,PASSWORD_DEFAULT)."', passkey=NULL WHERE email='".$email."'";
 $rq=mysql_query($q) or die(mysql_error());
 header("Location: index.php");
 }

}
 ?>
