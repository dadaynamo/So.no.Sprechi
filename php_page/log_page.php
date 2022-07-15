<?php
//************************************************************************************************
//login utenti base
if($pag=='login'  && !isset($_SESSION["entita"]))
{
  //link http://localhost/esame/index.php?pag=login

  //cancella i dati in $_session
  session_unset();
  //chiude la sessione
  session_destroy();
  testata_log();
  echo '<div class="container">';
  echo '<div class="d-flex justify-content-center h-100">';
  echo '<div class="card">';
  echo '<div class="card-header">';
  echo '<h3>Accedi</h3>';
  echo '<div class="d-flex justify-content-end social_icon">';
  echo '<span><i class="fab fa-facebook-square"></i></span>';
  echo '<span><i class="fab fa-google-plus-square"></i></span>';
  echo '<span><i class="fab fa-twitter-square"></i></span>';
  echo '</div>';
  echo '</div>';
  echo '<div class="card-body">';
  echo '<form action="index.php" method="POST">';
  echo '<div class="input-group form-group">';
  echo '<div class="input-group-prepend">';
  echo '<span class="input-group-text"><i class="fas fa-user"></i></span>';
  echo '</div>';
  echo '<input type="text" class="form-control" placeholder="username" name="username" value="utente">';
  echo '';
  echo '</div>';
  echo '<div class="input-group form-group">';
  echo '<div class="input-group-prepend">';
  echo '<span class="input-group-text"><i class="fas fa-key"></i></span>';
  echo '</div>';
  echo '<input type="password" name="password" class="form-control" placeholder="password" id="myInput"  value="utente">';
  echo '</div>';
  echo '<div class="row align-items-center remember">';
  echo '<input type="checkbox" onclick="myFunction()">Mostra password';
  echo '</div>';
  echo '<input type="hidden" name="caso" value="login1">';
  echo '<div class="form-group">';
  echo '<input type="submit" value="Login" class="btn float-right login_btn">';
  echo '</div>';
  echo '</form>';
  echo '</div>';
  echo '<div class="card-footer">';
  echo '<div class="d-flex justify-content-center links">';
  echo 'Non hai un account?<a href="index.php?pag=registrazione"> Registrati</a>';
  echo '</div>';
  echo '<div class="d-flex justify-content-center">';
  echo '<a href="index.php?pag=rec_pass">Dimenticata password?</a>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
closer_log();
}
//************************************************************************************************
//************************************************************************************************
//login page per admin
if($pag=='w4lIFhDB7ebF74q'  && !isset($_SESSION["entita"]))
{

  //link http://localhost/esame/index.php?pag=w4lIFhDB7ebF74q

  testata_log();
  echo '<div class="container">';
  echo '<div class="d-flex justify-content-center h-100">';
  echo '<div class="card">';
  echo '<div class="card-header">';
  echo '<h3>Accedi: ADMIN</h3>';
  echo '<div class="d-flex justify-content-end social_icon">';
  echo '<span><i class="fab fa-facebook-square"></i></span>';
  echo '<span><i class="fab fa-google-plus-square"></i></span>';
  echo '<span><i class="fab fa-twitter-square"></i></span>';
  echo '</div>';
  echo '</div>';
  echo '<div class="card-body">';
  echo '<form action="index.php" method="POST">';
  echo '<div class="input-group form-group">';
  echo '<div class="input-group-prepend">';
  echo '<span class="input-group-text"><i class="fas fa-user"></i></span>';
  echo '</div>';
  echo '<input type="text" class="form-control" placeholder="username" name="username" value="admin">';
  echo '';
  echo '</div>';
  echo '<div class="input-group form-group">';
  echo '<div class="input-group-prepend">';
  echo '<span class="input-group-text"><i class="fas fa-key"></i></span>';
  echo '</div>';
  echo '<input type="password" name="password" class="form-control" placeholder="password" id="myInput" value="admin">';
  echo '</div>';
  echo '<div class="row align-items-center remember">';
  echo '<input type="checkbox" onclick="myFunction()">Mostra password';
  echo '</div>';
  echo '<input type="hidden" name="caso" value="0HLtbsqp2nZmJ00">';
  echo '<div class="form-group">';
  echo '<input type="submit" value="Login" class="btn float-right login_btn">';
  echo '</div>';
  echo '</form>';
  echo '</div>';
  echo '<div class="card-footer">';
  echo '<div class="d-flex justify-content-center links">';
  echo 'Non hai un account?<a href="index.php?pag=registrazioneadmin"> Registrati</a>';
  echo '</div>';
  echo '<div class="d-flex justify-content-center">';
  echo '<a href="#">Dimenticata password?</a>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
closer_log();
}
//************************************************************************************************
//************************************************************************************************
//login page per solidali
if($pag=='gGsmHqw1otNEz5u'  && !isset($_SESSION["entita"]))
{

  //link http://localhost/esame/index.php?pag=gGsmHqw1otNEz5u

  testata_log();
  echo '<div class="container">';
  echo '<div class="d-flex justify-content-center h-100">';
  echo '<div class="card">';
  echo '<div class="card-header">';
  echo '<h3>Accedi: Solidale</h3>';
  echo '<div class="d-flex justify-content-end social_icon">';
  echo '<span><i class="fab fa-facebook-square"></i></span>';
  echo '<span><i class="fab fa-google-plus-square"></i></span>';
  echo '<span><i class="fab fa-twitter-square"></i></span>';
  echo '</div>';
  echo '</div>';
  echo '<div class="card-body">';
  echo '<form action="index.php" method="POST">';
  echo '<div class="input-group form-group">';
  echo '<div class="input-group-prepend">';
  echo '<span class="input-group-text"><i class="fas fa-user"></i></span>';
  echo '</div>';
  echo '<input type="text" class="form-control" placeholder="username" name="username">';
  echo '';
  echo '</div>';
  echo '<div class="input-group form-group">';
  echo '<div class="input-group-prepend">';
  echo '<span class="input-group-text"><i class="fas fa-key"></i></span>';
  echo '</div>';
  echo '<input type="password" name="password" class="form-control" placeholder="password" id="myInput">';
  echo '</div>';
  echo '<div class="row align-items-center remember">';
  echo '<input type="checkbox" onclick="myFunction()">Mostra password';
  echo '</div>';
  echo '<input type="hidden" name="caso" value="O9GgFTSj45l01Io">';
  echo '<div class="form-group">';
  echo '<input type="submit" value="Login" class="btn float-right login_btn">';
  echo '</div>';
  echo '</form>';
  echo '</div>';
  echo '<div class="card-footer">';
  echo '<div class="d-flex justify-content-center links">';
  echo 'Non hai un account?<a href="index.php?pag=registrazioneadmin"> Registrati</a>';
  echo '</div>';
  echo '<div class="d-flex justify-content-center">';
  echo '<a href="#">Dimenticata password?</a>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
closer_log();
}
//************************************************************************************************
//************************************************************************************************
//login page per Associazioni volontariato
if($pag=='Y3g1ATUDluvZ9h2'  && !isset($_SESSION["entita"]))
{

  //link http://localhost/esame/index.php?pag=Y3g1ATUDluvZ9h2

  testata_log();
  echo '<div class="container">';
  echo '<div class="d-flex justify-content-center h-100">';
  echo '<div class="card">';
  echo '<div class="card-header">';
  echo '<h3>Accedi: Associazione volontariato</h3>';
  echo '<div class="d-flex justify-content-end social_icon">';
  echo '<span><i class="fab fa-facebook-square"></i></span>';
  echo '<span><i class="fab fa-google-plus-square"></i></span>';
  echo '<span><i class="fab fa-twitter-square"></i></span>';
  echo '</div>';
  echo '</div>';
  echo '<div class="card-body">';
  echo '<form action="index.php" method="POST">';
  echo '<div class="input-group form-group">';
  echo '<div class="input-group-prepend">';
  echo '<span class="input-group-text"><i class="fas fa-user"></i></span>';
  echo '</div>';
  echo '<input type="text" class="form-control" placeholder="username" name="username">';
  echo '';
  echo '</div>';
  echo '<div class="input-group form-group">';
  echo '<div class="input-group-prepend">';
  echo '<span class="input-group-text"><i class="fas fa-key"></i></span>';
  echo '</div>';
  echo '<input type="password" name="password" class="form-control" placeholder="password" id="myInput">';
  echo '</div>';
  echo '<div class="row align-items-center remember">';
  echo '<input type="checkbox" onclick="myFunction()">Mostra password';
  echo '</div>';
  echo '<input type="hidden" name="caso" value="j1vNnsY6j8YWihh">';
  echo '<div class="form-group">';
  echo '<input type="submit" value="Login" class="btn float-right login_btn">';
  echo '</div>';
  echo '</form>';
  echo '</div>';
  echo '<div class="card-footer">';
  echo '<div class="d-flex justify-content-center links">';
  echo 'Non hai un account?<a href="index.php?pag=registrazioneadmin"> Registrati</a>';
  echo '</div>';
  echo '<div class="d-flex justify-content-center">';
  echo '<a href="#">Dimenticata password?</a>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
closer_log();
}
//************************************************************************************************

 ?>
