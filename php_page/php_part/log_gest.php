<?php
/*
$caso=filter_input(INPUT_POST,'caso',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
*/

//************************************************************************************************
//login entità admin
if ($caso=="0HLtbsqp2nZmJ00" && !isset($_SESSION["entita"]))
{
  $user = filter_input(INPUT_POST,'username',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q = "select * from utente where username='".$user."'";
  $rq = mysql_query($q) or die(mysql_error());
  $num = mysql_num_rows($rq);
  if ($num==1)
  {
    //username esiste
    $utente = mysql_fetch_assoc($rq);
    if( $utente["tipo"]==3)
    {
    //if ($_POST["password"] == $utente["password"]) {

   if (password_verify($_POST["password"],$utente["password"]))
   {
      //password corretta
      $_SESSION["idut"] = $utente["idut"];
      $_SESSION["nome"] = $utente["nome"];
      $_SESSION["cognome"] = $utente["cognome"];
      $_SESSION["tipo"] = $utente["tipo"];
      $_SESSION["attivo"] = $utente["attivo"];
      $_SESSION["passkey"] = $utente["passkey"];
      $_SESSION["entita"] = 1;
      header("Location: index.php");
    }
    else
    {
      //password errata
      testata();
      echo '<p>Password errata</p>';
              echo '<a href="index.php?pag=">Torna indietro</p>';
      closer();
    }
  }else
  {
    //form sbagliato
    testata();

    echo '<p>Utente con privilegi bassi</p>';
        echo '<a href="index.php">Torna indietro</p>';
    closer();
  }
  }
  else
  {
    //username inesistente
    testata();
    echo '<p>Utente inesistente</p>';
    closer();
  }
}
//************************************************************************************************
//login utenti base
if ($caso=="login1" && !isset($_SESSION["entita"]))
{
  $user = filter_input(INPUT_POST,'username',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q = "select * from utente where username='".$user."'";
  $rq = mysql_query($q) or die(mysql_error());
  $num = mysql_num_rows($rq);

  if ($num==1)
  {
    //username esiste
    $utente = mysql_fetch_assoc($rq);
    if( $utente["tipo"]==1)
    {
      //if ($_POST["password"] == $utente["password"]) {

      if (password_verify($_POST["password"],$utente["password"])){
        //password corretta
        $_SESSION["idut"] = $utente["idut"];
        $_SESSION["nomeu"] = $utente["nomeu"];
        $_SESSION["cognomeu"] = $utente["cognomeu"];
                  $_SESSION["email"] = $utente["email"];
        $_SESSION["tipo"] = $utente["tipo"];
        $_SESSION["attivo"] = $utente["attivo"];
        $_SESSION["passkey"] = $utente["passkey"];
        $_SESSION["isee"] = $utente["isee"];

        $_SESSION["dataisee"] = $utente["dataisee"];
        $_SESSION["fp"] = $utente["fp"];

        $_SESSION["entita"] = 2;

        header("Location: index.php");
      }
      else
      {
        //password errata
        testata();
        echo '<p>Password errata</p>';
                echo '<a href="index.php?pag=">Torna indietro</p>';
        closer();
      }
    }
    else{

      //utente usa form sbagliato
      testata();

      echo '<p>privilegi bassi</p>';
          echo '<a href="index.php?pag=">Torna indietro</p>';
      closer();

    }
  }
  else
  {
    //username inesistente
    testata();

    echo '<p>Utente inesistente o privilegi bassi</p>';
        echo '<a href="index.php?pag=">Torna indietro</p>';
    closer();
  }

}
//************************************************************************************************

//************************************************************************************************
//login entità solidali
if ($caso=="O9GgFTSj45l01Io" && !isset($_SESSION["entita"]))
{
  $user = filter_input(INPUT_POST,'username',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q = "select * from solidale where username='".$user."'";
  $rq = mysql_query($q) or die(mysql_error());
  $num = mysql_num_rows($rq);
  if ($num==1)
  {
    //username esiste
    $utente = mysql_fetch_assoc($rq);

    if ($_POST["password"] == $utente["password"]) {

  //  if (password_verify($_POST["password"],$utente["password"]))
  //  {
      //password corretta
      $_SESSION["idut"] = $utente["idut"];
      $_SESSION["nome"] = $utente["nome"];
      $_SESSION["cognome"] = $utente["cognome"];
      $_SESSION["tipo"] = $utente["tipo"];
      $_SESSION["entita"] = 4;
      header("Location: index.php");
    }
    else
    {
      //password errata
      testata();
      echo '<p>Password errata</p>';
              echo '<a href="index.php?pag=">Torna indietro</p>';
      closer();
    }
  }

  else
  {
    //username inesistente
    testata();
    echo '<p>Utente inesistente</p>';
    closer();
  }
}
//************************************************************************************************

//************************************************************************************************
//login entità Associazioni volontariato
if ($caso=="j1vNnsY6j8YWihh" && !isset($_SESSION["entita"]))
{
  $user = filter_input(INPUT_POST,'username',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $q = "select * from assvol where username='".$user."'";
  $rq = mysql_query($q) or die(mysql_error());
  $num = mysql_num_rows($rq);
  if ($num==1)
  {
    //username esiste
    $utente = mysql_fetch_assoc($rq);

    if ($_POST["password"] == $utente["password"]) {

  //  if (password_verify($_POST["password"],$utente["password"]))
  //  {
      //password corretta
      $_SESSION["idut"] = $utente["idut"];
      $_SESSION["nome"] = $utente["nome"];
      $_SESSION["cognome"] = $utente["cognome"];
      $_SESSION["tipo"] = $utente["tipo"];
      $_SESSION["entita"] = 3;
      header("Location: index.php");
    }
    else
    {
      //password errata
      testata();
      echo '<p>Password errata</p>';
              echo '<a href="index.php?pag=">Torna indietro</p>';
      closer();
    }
  }

  else
  {
    //username inesistente
    testata();
    echo '<p>Utente inesistente</p>';
    closer();
  }
}
//************************************************************************************************

//logout
if ($pag=='logout' && isset($_SESSION["entita"]))
{
//cancella i dati in $_session
session_unset();
//chiude la sessione
session_destroy();
header("Location:index.php");
}
//************************************************************************************************
/*
if ($pag=="98RtJ2fSdYW3UpGC" && !isset($_SESSION["entita"]))
{

  testata();
  echo '<div class="container">';
    echo '<h2>Registrazione nuovo utente</h2>'."\n";
    echo '<br>'."\n";
  echo '</div>';

  echo '<form class="form-horizontal container" method="POST" action="#">';
    echo '<div class="form-group">';
      echo '<label for="inputEmail3" class="col-sm-2 control-label">Nome utente</label>';
      echo '<div class="col-sm-10">';
        echo '<input type="text" class="form-control" id="inputEmail3" placeholder="Username" name="username">';
      echo '</div>';
    echo '</div>';

    echo '<div class="form-group">';
      echo '<label for="inputPassword3" class="col-sm-2 control-label">Password</label>';
      echo '<div class="col-sm-10">';
        echo '<input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="pwd1">';
      echo '</div>';
    echo '</div>';

    echo '<div class="form-group">';
      echo '<label for="inputPassword3" class="col-sm-2 control-label">Ripeti Password</label>';
      echo '<div class="col-sm-10">';
        echo '<input type="password" class="form-control" id="inputPassword3" placeholder="Ripeti Password" name="pwd2">';
      echo '</div>';
    echo '</div>';
    echo '<input type="hidden" name="caso" value="registrati2">'."\n";
    echo '<div class="form-group">';
      echo '<div class="col-sm-offset-2 col-sm-10">';
        echo '<button type="submit" class="btn btn-default">Registrati</button>';
      echo '</div>';
    echo '</div>';
  echo '</form>';
  closer();
}
*/
//registrazione utenti base
if ($caso=="registrati2" && !isset($_SESSION["entita"]))
{
  $password=filter_input(INPUT_POST,'password',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $password1=filter_input(INPUT_POST,'password1',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $username=filter_input(INPUT_POST,'username',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $nomeu=filter_input(INPUT_POST,'nomeu',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $cognomeu=filter_input(INPUT_POST,'cognomeu',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $eta=filter_input(INPUT_POST,'eta',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $sesso=filter_input(INPUT_POST,'sesso',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $citta=filter_input(INPUT_POST,'citta',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $datanascita=filter_input(INPUT_POST,'datanascita',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $nf=filter_input(INPUT_POST,'nf',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $codfisc=filter_input(INPUT_POST,'codfisc',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $isee=filter_input(INPUT_POST,'isee',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $visee=filter_input(INPUT_POST,'visee',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $tipo=1;
  $passkey=crea_passkey(5);


  $q = "select * from utente where username='".$username."'";
  $rq = mysql_query($q) or die(mysql_error());
  $num = mysql_num_rows($rq);

  $q1 = "select * from utente where email='".$email."'";
  $rq1 = mysql_query($q1) or die(mysql_error());
  $num1 = mysql_num_rows($rq1);


  if ($num==0 && $num1==0)
  {
    if($password==$password1){
      $q = "insert into utente (idut,username,email,password,tipo,passkey,nomeu,cognomeu,eta,sesso,citta,datanascita,nf,codfisc,attivo) values (";
      $q.= "NULL,";
      $q.= "'".mysql_real_escape_string($username)."',";
      $q.= "'".mysql_real_escape_string($email)."',";
      $q.= "'".password_hash($password,PASSWORD_DEFAULT)."',";
      $q.= "'".$tipo."',";
      $q.= "'".$passkey."',";
      $q.= "'".mysql_real_escape_string($nomeu)."',";
      $q.= "'".mysql_real_escape_string($cognomeu)."',";
      $q.= "'".mysql_real_escape_string($eta)."',";
      $q.= "'".mysql_real_escape_string($sesso)."',";
      $q.= "'".mysql_real_escape_string($citta)."',";
      $q.= "'".mysql_real_escape_string($datanascita)."',";
      $q.= "'".mysql_real_escape_string($nf)."',";
      $q.= "'".mysql_real_escape_string($codfisc)."',";

      $q.= "'0')";
      $rq = mysql_query($q) or die(mysql_error()."cacs");


      //caricamento pdf al record
    $q="SELECT * FROM utente WHERE username='".$username."'";
    $rq=mysql_query($q) or die (mysql_error()."cacs");
    $riga=mysql_fetch_assoc($rq);

    $targetfolder = "isee/";
    $name=$riga["idut"].".pdf";
    $tot=$targetfolder.$name;
    $dataisee=date("y-m-d");
    $q="UPDATE utente SET `isee` ='".$riga["idut"].".pdf', `dataisee`='".$dataisee."', visee='".$visee."' WHERE idut=".$riga["idut"];
    $rq=mysql_query($q) or die (mysql_error()."cacs");
    $targetfolder = $targetfolder . basename($name) ;

    $ok=1;

    $file_type=$_FILES['file']['type'];

    if ($file_type=="application/pdf") {

    if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

    {
    /*
    echo 'The file '. basename( $_FILES['file']['name']). ' is uploaded <a href="index.php">Indietro</a>';
    */
    //header("Location: index.php");
    crea_mail($passkey,$_POST["username"],$_POST["email"]);
  //crea_mail($passkey,$_POST["username"]);
  testata();
  echo '<p> Vai nella tua mail per attivare l\'account e usufruire dei servizi</p>'."\n";
  closer();

    }

    else {

    echo "Problem uploading file";

    }

    }

    else {

    echo "You may only upload PDFs, JPEGs or GIF files.<br>";

    }

    }
    else {
      echo '<p>Password non coincidono</p>';
    }
  }
  else
  {
    testata();
    if($num1==1){
    echo '<p>Mi dispiace ma esiste già un utente con la username scelta.</p>';

    }
    else if($num==1){
    echo '<p>Mi dispiace ma esiste già un utente con l\'email scelta.</p>';

    }
    closer();
  }
}



//registrazione admin
if ($caso=="9Gd9Od1HHSLmy4G" && !isset($_SESSION["entita"]))
{
  $tipo=3;
  //$passkey=crea_passkey();
  $q = "select * from utente where username='".$_POST["username"]."'";
  $rq = mysql_query($q) or die(mysql_error());
  $num = mysql_num_rows($rq);
  if ($num==0)
  {
    $q = "insert into utente (idut,username,password,tipo,attivo) values (";
    $q.= "'"." "."',";
    $q.= "'".mysql_real_escape_string($_POST["username"])."',";
    $q.= "'".password_hash($_POST["password"],PASSWORD_DEFAULT)."',";
    $q.= "'".$tipo."',";
    $q.= "'1')";

    $rq = mysql_query($q) or die(mysql_error());
  //  crea_mail();
    testata();
    echo '<p> Vai nella tua mail per attivare l\'account e usufruire dei servizi</p>'."\n";
    closer();
  }
  else
  {
    testata();
    echo '<p>Mi dispiace ma esiste già un utente con la username scelta.</p>';
    closer();
  }
}

?>
