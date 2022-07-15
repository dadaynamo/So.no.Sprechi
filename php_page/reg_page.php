<?php



//reg Utenti base
if($pag=='registrazione'  && !isset($_SESSION["entita"]))
{
testata_reg();
echo '<div class="container" >';
echo '<div class="row">';
echo '<div class="col-md-3 ">';

echo '</div>';
echo '<div class="col-md-6" style="background-color: rgba(0,0,0,0.5) !important; color:white;">';

  echo '<div class="container-flush " style="margin-top:10px; margin-bottom:10px;">';
  echo '<h3 class="text-primary">Registrazione Profilo</h3>';
  echo '</div>';

//form
echo '<form method="POST" action="index.php" enctype="multipart/form-data">';
echo '<div class="form-row">';
echo '<div class="form-group col-md-6">';
echo '<label for="inputEmail4">Nome</label>';
echo '<input type="text" class="form-control" id="inputEmail4" name="nomeu" >';
echo '</div>';
echo '<div class="form-group col-md-6">';
echo '<label for="inputPassword4">Cognome</label>';
echo '<input type="text" class="form-control" id="inputPassword4" name="cognomeu" >';
echo '</div>';
echo '</div>';
echo '<div class="form-row">';
echo '<div class="form-group col-md-6">';
echo '<label for="inputEmail4">Email</label>';
echo '<input type="email" class="form-control" id="inputEmail4" name="email" >';
echo '</div>';
echo '<div class="form-group col-md-6">';
echo '<label for="inputPassword44">Username</label>';
echo '<input type="text" class="form-control" id="inputPassword44"  name="username" >';
echo '</div>';
echo '</div>';
echo '<hr>';
echo '<div class="form-row">';
echo '<div class="form-group col-md-6">';
echo '<label for="inputEmail4">Età</label>';
echo '<input type="number" class="form-control" id="inputEmail4" min="15" max="110" name="eta" >';
echo '<label for="inputEmail4">Città</label>';
echo '<input type="text" class="form-control" id="inputEmail4" name="citta" >';
echo '<label for="inputEmail4">Nucleo Familiare</label>';
echo '<input type="number" class="form-control" id="inputEmail4" name="nf">';
echo '</div>';
echo '<div class="form-group col-md-6">';

echo '<div class="container-flush" style="margin-bottom:13px">';
echo '<div class="container-flush">';
echo '<label for="radio">Sesso</label>';
echo '</div>';



  echo '<div id="radio" class="form-check form-check-inline">';
  echo '<input class="form-check-input" type="radio" name="sesso" id="inlineRadio1" value="1" checked>';
  echo '<label class="form-check-label" for="inlineRadio1">Maschio</label>';
  echo '</div>';
  echo '<div class="form-check form-check-inline">';
  echo '<input class="form-check-input" type="radio" name="sesso" id="inlineRadio2" value="0">';
  echo '<label class="form-check-label" for="inlineRadio2">Femmina</label>';
  echo '</div>';




echo '</div>';


echo '<label for="inputEmail4">Giorno di nascita</label>';
echo '<input type="date" class="form-control" id="inputEmail4" name="datanascita" >';
echo '<label for="inputPassword4">codfiscale</label>';
echo '<input type="text" class="form-control" id="inputPassword4" placeholder="cod: xxxxxx00x00x0000" name="codfisc" >';
echo '</div>';
echo '</div>';
echo '<input type="hidden" name="caso" value="registrati2">';
echo '';


echo '<hr>';
echo '<div class="form-row">';
echo '<div class="form-group col-md-6">';
echo '<label for="inputEmail4">Password</label>';
echo '<input type="text" class="form-control" id="inputEmail4" name="password" >';
echo '</div>';
echo '<div class="form-group col-md-6">';
echo '<label for="inputEmail4">Ripeti Password</label>';
echo '<input type="text" class="form-control" id="inputEmail4" name="password1" >';
echo '</div>';
echo '</div>';
echo '<hr>';

echo '<div class="form-group">';
echo '<label for="exampleFormControlFile1">Inserisci PDF ISEE </label>';
echo '<input type="file" class="form-control-file" id="exampleFormControlFile1" name="file"  size="50" accept="application/pdf" >';
echo '</div>';
echo '<div class="form-group">';
echo '<label for="exampleFormControlFile1">Valore isee</label>';
echo '<input type="number" class="form-control-file" name="visee" id="exampleFormControlFile1">';
echo '</div>';

echo '<button type="submit" class="btn btn-primary">Conferma</button>';
echo '</form>';
echo '</div>';
echo '<div class="col-md-3">';

echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

closer();
}

//reg Admin
if($pag=='NMx3zqOCekeH7Fu'  && !isset($_SESSION["entita"]))
{
//  http://localhost/esame/index.php?pag=NMx3zqOCekeH7Fu
  testata_log();
  echo '<div class="container">';
    echo '<div class="d-flex justify-content-center h-100">';

      echo '<div class="card">';

        echo '<div class="card-header">';
          echo '<h3>Registrati Admin</h3>';
          echo '<div class="d-flex justify-content-end social_icon">';
            echo '<span><i class="fab fa-facebook-square"></i></span>';
            echo '<span><i class="fab fa-google-plus-square"></i></span>';
            echo '<span><i class="fab fa-twitter-square"></i></span>';
          echo '</div>';
        echo '</div>';

        echo '<div class="card-body">';

          echo '<form  action="index.php" method="POST">';
            echo '<div class="input-group form-group">';

              echo '<div class="input-group-prepend">';
                echo '<span class="input-group-text"><i class="fas fa-user"></i></span>';
              echo '</div>';
              echo '<input type="text" class="form-control" placeholder="username" name="username">';

            echo '</div>';

            echo '<div class="input-group form-group">';

              echo '<div class="input-group-prepend">';
                echo '<span class="input-group-text"><i class="fas fa-key"></i></span>';
              echo '</div>';
              echo '<input type="password" class="form-control" placeholder="password" id="myInput" name="password">';
            echo '</div>';

            echo '<div class="row align-items-center remember">';
              echo '<input type="checkbox" onclick="myFunction()">Mostra password';
            echo '</div>';
            echo '<input type="hidden" name="caso" value="9Gd9Od1HHSLmy4G">'."\n";
            echo '<div class="form-group">';
              echo '<input type="submit" value="Login" class="btn float-right login_btn">';
            echo '</div>';
          echo '</form>';
        echo '</div>';

        echo '<div class="card-footer">';
          echo '<div class="d-flex justify-content-center links">';
            echo 'So.No.Sprechi';
          echo '</div>';
          echo '<div class="d-flex justify-content-center">';
            echo '<a href="index.php?pag=login">Hai già un account?</a>';
          echo '</div>';
        echo '</div>';
      echo '</div>';
    echo '</div>';
  echo '</div>';
closer_log();
}







 ?>
