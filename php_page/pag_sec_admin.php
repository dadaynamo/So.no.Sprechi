<?php

function sidebar(){
  //side bar
echo '<div class="col-md-2"  style="padding-right: 0px; padding-left: 0px; ">';
echo '<ul class="list-group list-group-flush">';
echo '';
echo '';
echo '<li class="list-group-item list-group-item-action ">';
echo '<a class="btn" style="padding-left:0px;" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="true" aria-controls="collapseExample1"><span class="mr-3"><i class="fas fa-tachometer-alt"></i> Dashboard</span></a>';
echo '<div class="collapse" id="collapseExample1">';
echo '<div class="card card-body mt-2">';
echo '<ul class="list-group list-group-flush">';
echo '<li class="list-group-item list-group-item-action "><a href="index.php">VAI..</a></li>';
echo '<li class="list-group-item list-group-item-action "><a href="index.php?pag=logout">SPEGNI..</a></li>';
echo '</ul>';
echo '</div>';
echo '</div>';
echo '</li>';
echo '';
echo '<li class="list-group-item list-group-item-action ">';
echo '<a class="btn" style="padding-left:0px;" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="true" aria-controls="collapseExample1"><span class="mr-3">Associazioni</span></a>';
echo '<div class="collapse" id="collapseExample2">';
echo '<div class="card card-body mt-2">';
echo '<ul class="list-group list-group-flush">';
echo '<li class="list-group-item list-group-item-action "><a href="index.php?pag=ass_list">Lista</a></li>';
echo '<li class="list-group-item list-group-item-action "><a href="">Aggiungi</a></li>';
echo '<li class="list-group-item list-group-item-action "><a href="">elimina</a></li>';
echo '</ul>';
echo '</div>';
echo '</div>';
echo '</li>';
echo '';
echo '';
echo '<li class="list-group-item list-group-item-action ">';
echo '<a class="btn" style="padding-left:0px;" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="true" aria-controls="collapseExample1"><span class="mr-3">Solidali</span></a>';
echo '<div class="collapse" id="collapseExample3">';
echo '<div class="card card-body mt-2">';
echo '<ul class="list-group list-group-flush">';
echo '<li class="list-group-item list-group-item-action "><a href="index.php?pag=sol_list">Lista</a></li>';
echo '<li class="list-group-item list-group-item-action "><a href="">Aggiungi</a></li>';
echo '<li class="list-group-item list-group-item-action "><a href="index.php?pag=sol_el">Elimina</a></li>';
echo '</ul>';
echo '</div>';
echo '</div>';
echo '</li>';
echo '';
echo '<li class="list-group-item list-group-item-action ">';
echo '<a class="btn" style="padding-left:0px;" data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="true" aria-controls="collapseExample1"><span class="mr-3">Utenti</span></a>';
echo '<div class="collapse" id="collapseExample4">';
echo '<div class="card card-body mt-2">';
echo '<ul class="list-group list-group-flush">';
echo '<li class="list-group-item list-group-item-action "><a href="index.php?pag=ut_list">Lista UT</a></li>';
echo '<li class="list-group-item list-group-item-action "><a href="index.php?pag=ut_list_admin">Lista ADMIN</a></li>';
echo '<li class="list-group-item list-group-item-action "><a href="index.php?pag=ut_list_act">Attiva</a></li>';
echo '<li class="list-group-item list-group-item-action "><a href="index.php?pag=ut_list_dis">Disattiva</a></li>';
echo '</ul>';
echo '</div>';
echo '</div>';
echo '</li>';
echo '</ul>';
  echo '</div>';


}
//************************************************************************************************************************************************************************************************************************************
//************************************************************************************************************************************************************************************************************************************
//************************************************************************************************************************************************************************************************************************************

//utenti pagine varie
if ($pag=='ut_list'  && $_SESSION["entita"]==1)
{
  testata();
  navbar_gen();

  echo '<div class="container-fluid" style="margin-top:106px">';
    echo '<div class="row">';

sidebar();

      echo '<div class="col-md-10" >';

        echo '<div class="container-flush  d-flex" style="margin-top:10px; margin-bottom:10px;">';

        echo '<h3 class="text-primary mr-auto">Lista Utenti</h3>';
        echo '<div class="p-2 "><a type="button" class="btn btn-primary" href="index.php">Dashboard</a> <a type="button" class="btn btn-primary" href="index.php?pag=registrazioneut">Add</a></div>';


        echo '</div>';

        //tabella utenti da attivare

        //query take utenti inattivi

        $q="SELECT * FROM  utente WHERE tipo=1";
        $rq=mysql_query($q) or die (mysql_error());
        //echo $q;

        echo '<div class="table-responsive">';
          echo '<table class="table">';
            echo '<caption>Attiva gli utenti da questa tabella</caption>';
            echo '<thead>';
              echo '<tr>';
              echo '<th scope="col">#ID</th>';
              echo '<th scope="col">nome</th>';
              echo '<th scope="col">cognome</th>';
                    echo '<th scope="col"> vISEE</th>';
              echo '<th scope="col">ISEE</th>';
              echo '<th scope="col">attivo</th>';
              echo '<th scope="col">Action</th>';
              echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            $i=0;
            while($riga=mysql_fetch_assoc($rq)){

                echo '<tr>';
                  echo '<th scope="row">'.$riga["idut"].'</th>';
                  echo '<td>'.$riga["nomeu"].'</td>';
                  echo '<td>'.$riga["cognomeu"].'</td>';
                                    echo '<td>'.$riga["visee"].'</td>';
                  echo '<td><a href="isee/'.$riga["isee"].'" target="_blank">isee</a></td>';
                  echo '<td>'.$riga["attivo"].'</td>';
                    echo '<td><a type="button" class="btn btn-primary" href="index.php?pag=mod_ut&idut='.$riga["idut"].'">MOD</a> <a type="button" class="btn btn-danger" href="index.php?pag=del_ut&idut='.$riga["idut"].'">DEL</a></td>';
                echo '</tr>';

              $i++;
            }



            echo '</tbody>';
          echo '</table>';
        echo '</div>';


        echo '</div>';
  echo '</div>';
echo '</div>';

closer();
}

//reg Utenti base
if($pag=='registrazioneut'  && $_SESSION["entita"]==1)
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
echo '<label for="exampleFormControlFile1">Example file input</label>';
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
if ($caso=="registrati2" && $_SESSION["entita"]==1)
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
  //$passkey=crea_passkey(5);


  $q = "select * from utente where username='".$_POST["username"]."'";
  $rq = mysql_query($q) or die(mysql_error());
  $num = mysql_num_rows($rq);

  $q1 = "select * from utente where username='".$_POST["email"]."'";
  $rq1 = mysql_query($q) or die(mysql_error());
  $num1 = mysql_num_rows($rq1);


  if ($num==0 && $num1==0)
  {
    if($password==$password1){
      $q = "insert into utente (idut,username,email,password,tipo,nomeu,cognomeu,eta,sesso,citta,datanascita,nf,codfisc,attivo) values (";
      $q.= "NULL,";
      $q.= "'".mysql_real_escape_string($username)."',";
      $q.= "'".mysql_real_escape_string($email)."',";
      $q.= "'".password_hash($password,PASSWORD_DEFAULT)."',";
      $q.= "'".$tipo."',";
    //  $q.= "'".$passkey."',";
      $q.= "'".mysql_real_escape_string($nomeu)."',";
      $q.= "'".mysql_real_escape_string($cognomeu)."',";
      $q.= "'".mysql_real_escape_string($eta)."',";
      $q.= "'".mysql_real_escape_string($sesso)."',";
      $q.= "'".mysql_real_escape_string($citta)."',";
      $q.= "'".mysql_real_escape_string($datanascita)."',";
      $q.= "'".mysql_real_escape_string($nf)."',";
      $q.= "'".mysql_real_escape_string($codfisc)."',";

      $q.= "'1')";
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

    }

    else {

    echo "Problem uploading file";

    }

    }

    else {

    echo "You may only upload PDFs, JPEGs or GIF files.<br>";

    }
      //  crea_mail($passkey,$_POST["username"],$_POST["email"]);
      //crea_mail($passkey,$_POST["username"]);
      testata();
      echo '<p> Vai nella tua mail per attivare l\'account e usufruire dei servizi</p>'."\n";
      closer();
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

if ($pag=='del_ut'  && $_SESSION["entita"]==1)
{
  echo $q;
  $q = "DELETE FROM utente WHERE idut=".$_GET["idut"];
  $rq = mysql_query($q) or die("errore con la cancellazione del corso");

  header("Location: index.php?pag=ut_list");
}

if ($pag=='mod_ut'  && $_SESSION["entita"]==1)
{
  $q="SELECT * FROM utente WHERE idut=".$_GET["idut"];
  $rq=mysql_query($q) or die(mysql_error());
  $riga=mysql_fetch_assoc($rq) or die(mysql_error());
  testata();
  navbar_gen();

  echo '<div class="container-fluid" style="margin-top:106px">';
    echo '<div class="row">';

sidebar();

      echo '<div class="col-md-10" >';
      echo '<div class="container-flush " style="margin-top:10px; margin-bottom:10px;">';
      echo '<h3 class="text-primary">MODIFICA Profilo id:'.$_GET["idut"].'</h3>';
      echo '</div>';

      echo '<div class="container-flush">';
      echo '<div class="row">';
      echo '<div class="col-md-2">';

      echo '</div>';
      echo '<div class="col-md-8">';

    //form
    echo '<form method="GET" action="index.php">';
    echo '<div class="form-row">';
    echo '<div class="form-group col-md-6">';
    echo '<label for="inputEmail4">Nome</label>';
    echo '<input type="text" class="form-control" id="inputEmail4" name="nomeu" value="'.$riga["nomeu"].'">';
    echo '</div>';
    echo '<div class="form-group col-md-6">';
    echo '<label for="inputPassword4">Cognome</label>';
    echo '<input type="text" class="form-control" id="inputPassword4" name="cognomeu" value="'.$riga["cognomeu"].'">';
    echo '</div>';
    echo '</div>';
    echo '<div class="form-row">';
    echo '<div class="form-group col-md-6">';
    echo '<label for="inputEmail4">Valore ISEE</label>';
    echo '<input type="text" class="form-control" id="inputEmail4" name="visee" value="'.$riga["visee"].'">';
    echo '</div>';
    echo '</div>';
    echo '<input type="hidden" name="pag" value="mod_ut1">';
      echo '<input type="hidden" name="idut" value="'.$riga["idut"].'">';
    echo '';
    echo '<hr>';
    echo '<button type="submit" class="btn btn-primary">Conferma</button>';
    echo '</form>';
      echo '</div>';
      echo '<div class="col-md-2">';

      echo '</div>';

      echo '</div>';
echo '</div>';
echo '</div>';

closer();
}

if ($pag=='mod_ut1'  && $_SESSION["entita"]==1)
{

  $q = "update utente set nomeu='".mysql_real_escape_string($_GET["nomeu"])."', cognomeu='".mysql_real_escape_string($_GET["cognomeu"])."', visee='".mysql_real_escape_string($_GET["visee"])."' ";
  $q.= "where idut=".$_GET["idut"];
  $rq = mysql_query($q) or die("errore con il salvataggio del corso: ".$q);
  header("Location: index.php");

}


if ($pag=='ut_list_admin'  && $_SESSION["entita"]==1)
{
  testata();
  navbar_gen();

  echo '<div class="container-fluid" style="margin-top:106px">';
    echo '<div class="row">';

    sidebar();

      echo '<div class="col-md-10" >';

        echo '<div class="container-flush  d-flex" style="margin-top:10px; margin-bottom:10px;">';

        echo '<h3 class="text-primary mr-auto">Lista Utenti</h3>';
        echo '<div class="p-2 "><a type="button" class="btn btn-primary" href="index.php">Dashboard</a></div>';


        echo '</div>';

        //tabella utenti da attivare

        //query take utenti inattivi

        $q="SELECT * FROM  utente WHERE tipo=3";
        $rq=mysql_query($q) or die (mysql_error());
        //echo $q;

        echo '<div class="table-responsive">';
          echo '<table class="table">';
            echo '<caption>Attiva gli utenti da questa tabella</caption>';
            echo '<thead>';
              echo '<tr>';
              echo '<th scope="col">#ID</th>';
              echo '<th scope="col">nome</th>';
              echo '<th scope="col">cognome</th>';
                    echo '<th scope="col"> vISEE</th>';
              echo '<th scope="col">ISEE</th>';
              echo '<th scope="col">attivo</th>';
              echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            $i=0;
            while($riga=mysql_fetch_assoc($rq)){

                echo '<tr>';
                  echo '<th scope="row">'.$riga["idut"].'</th>';
                  echo '<td>'.$riga["nomeu"].'</td>';
                  echo '<td>'.$riga["cognomeu"].'</td>';
                      echo '<td>'.$riga["visee"].'</td>';
                  echo '<td><a href="isee/'.$riga["isee"].'" target="_blank">isee</a></td>';
                  echo '<td>'.$riga["attivo"].'</td>';
                echo '</tr>';

              $i++;
            }



            echo '</tbody>';
          echo '</table>';
        echo '</div>';


        echo '</div>';
  echo '</div>';
echo '</div>';

closer();
}
if ($pag=='ut_list_act'  && $_SESSION["entita"]==1)
{
testata();
navbar_gen();
echo '<div class="container-fluid" style="margin-top:106px">';
  echo '<div class="row">';

sidebar();

    //central container content
    echo '<div class="col-md-10" >';

      echo '<div class="container-flush  d-flex" style="margin-top:10px; margin-bottom:10px;">';

      echo '<h3 class="text-primary mr-auto">Lista Utenti - Attivazione</h3>';
      echo '<div class="p-2 "><a type="button" class="btn btn-primary" href="index.php">Dashboard</a></div>';
      echo '<div class="p-2 "><a type="button" class="btn btn-primary" href="index.php?pag=ut_list_dis">Disattiva</a></div>';


      echo '</div>';


      //tabella utenti da attivare

      //query take utenti inattivi

      $q="SELECT * FROM  utente where attivo='0'";
      $rq=mysql_query($q) or die (mysql_error());
      //echo $q;

      echo '<div class="table-responsive">';
        echo '<table class="table">';
          echo '<caption>Attiva gli utenti da questa tabella</caption>';
          echo '<thead>';
            echo '<tr>';
            echo '<th scope="col">#ID</th>';
            echo '<th scope="col">nome</th>';
            echo '<th scope="col">cognome</th>';
                  echo '<th scope="col"> vISEE</th>';
            echo '<th scope="col">ISEE</th>';
            echo '<th scope="col">attivo</th>';
            echo '</tr>';
          echo '</thead>';
          echo '<tbody>';
          $i=0;
          while($riga=mysql_fetch_assoc($rq)){

              echo '<tr>';
                echo '<th scope="row">'.$riga["idut"].'</th>';
                echo '<td>'.$riga["nomeu"].'</td>';
                echo '<td>'.$riga["cognomeu"].'</td>';
                    echo '<td>'.$riga["visee"].'</td>';
                echo '<td><a href="isee/'.$riga["isee"].'" target="_blank">isee</a></td>';
                echo '<td>'.$riga["attivo"].'<a href="index.php?pag=active_ut&idut='.$riga["idut"].'"> attiva</a></td>';
              echo '</tr>';

            $i++;
          }



          echo '</tbody>';
        echo '</table>';
      echo '</div>';

    echo '</div>';



  echo '</div>';
echo '</div>';
closer();
}

if ($pag=='ut_list_dis'  && $_SESSION["entita"]==1)
{

  testata();
  navbar_gen();
  echo '<div class="container-fluid" style="margin-top:106px">';
    echo '<div class="row">';

sidebar();
      //central container content
      echo '<div class="col-md-10" >';

        echo '<div class="container-flush  d-flex" style="margin-top:10px; margin-bottom:10px;">';

        echo '<h3 class="text-primary mr-auto">Lista Utenti - Disattivazione</h3>';
        echo '<div class="p-2 "><a type="button" class="btn btn-primary" href="index.php">Dashboard</a></div>';
        echo '<div class="p-2 "><a type="button" class="btn btn-primary" href="index.php?pag=ut_list_act">Attiva</a></div>';


        echo '</div>';


        //tabella utenti da attivare

        //query take utenti inattivi

        $q="SELECT * FROM  utente where attivo='1'";
        $rq=mysql_query($q) or die (mysql_error());
        //echo $q;

        echo '<div class="table-responsive">';
          echo '<table class="table">';
            echo '<caption>Disattiva gli utenti da questa tabella</caption>';
            echo '<thead>';
              echo '<tr>';
              echo '<th scope="col">#ID</th>';
              echo '<th scope="col">nome</th>';
              echo '<th scope="col">cognome</th>';
                    echo '<th scope="col"> vISEE</th>';
              echo '<th scope="col">ISEE</th>';
              echo '<th scope="col">attivo</th>';
              echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            $i=0;
            while($riga=mysql_fetch_assoc($rq)){

                echo '<tr>';
                  echo '<th scope="row">'.$riga["idut"].'</th>';
                  echo '<td>'.$riga["nomeu"].'</td>';
                  echo '<td>'.$riga["cognomeu"].'</td>';
                      echo '<td>'.$riga["visee"].'</td>';
                  echo '<td><a href="isee/'.$riga["isee"].'" target="_blank">isee</a></td>';
                  echo '<td>'.$riga["attivo"].'<a href="index.php?pag=disable_ut&idut='.$riga["idut"].'"> disattiva</a></td>';
                echo '</tr>';

              $i++;
            }



            echo '</tbody>';
          echo '</table>';
        echo '</div>';

      echo '</div>';



    echo '</div>';
  echo '</div>';
  closer();
}
//************************************************************************************************************************************************************************************************************************************
//************************************************************************************************************************************************************************************************************************************
//************************************************************************************************************************************************************************************************************************************
//solidali e pagine varie
if ($pag=='sol_list'  && $_SESSION["entita"]==1)
{
  testata();
  navbar_gen();

  echo '<div class="container-fluid" style="margin-top:106px">';
    echo '<div class="row">';

  sidebar();

      echo '<div class="col-md-10" >';

        echo '<div class="container-flush  d-flex" style="margin-top:10px; margin-bottom:10px;">';

        echo '<h3 class="text-primary mr-auto">Lista Solidali</h3>';
        echo '<div class="p-2 "><a type="button" class="btn btn-primary" href="index.php">Dashboard</a></div>';


        echo '</div>';

        //tabella utenti da attivare

        //query take utenti inattivi

        $q="SELECT * FROM  solidale";
        $rq=mysql_query($q) or die (mysql_error());
        //echo $q;

        echo '<div class="table-responsive">';
          echo '<table class="table">';
            echo '<caption>Attiva gli utenti da questa tabella</caption>';
            echo '<thead>';
              echo '<tr>';
              echo '<th scope="col">#ID</th>';
              echo '<th scope="col">nome</th>';
              echo '<th scope="col">cognome</th>';
              echo '<th scope="col">città</th>';
              echo '<th scope="col">Articoli</th>';
              echo '<th scope="col">Check Art.</th>';
              echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            $i=0;
            while($riga=mysql_fetch_assoc($rq)){

              $n="SELECT * FROM `bene` INNER JOIN `solidale` on (bene.solidale=solidale.idsolidale) WHERE solidale.idsolidale='".$riga["idsolidale"]."'";
              $rn=mysql_query($n) or die (mysql_error());
              $num=mysql_num_rows($rn);

                echo '<tr>';
                  echo '<th scope="row">'.$riga["idsolidale"].'</th>';
                  echo '<td>'.$riga["nomes"].'</td>';
                  echo '<td>'.$riga["vias"].'</td>';
                  echo '<td>'.$riga["cittas"].'</td>';
                  echo '<td>'.$num.'</td>';
                  echo '<td><a href="index.php?pag=sol_art&idsolidale='.$riga["idsolidale"].'" class="btn btn-Warning" >Check</a></td>';
                echo '</tr>';

              $i++;
            }



            echo '</tbody>';
          echo '</table>';
        echo '</div>';


        echo '</div>';
  echo '</div>';
echo '</div>';

closer();

}
if ($pag=='sol_art'  && $_SESSION["entita"]==1)
{

$stit="SELECT * FROM `solidale` WHERE solidale.idsolidale='".$_GET["idsolidale"]."'";
$rtit=mysql_query($stit) or die(mysql_error());
$tit=mysql_fetch_assoc($rtit);
  testata();
  navbar_gen();

  echo '<div class="container-fluid" style="margin-top:106px">';
    echo '<div class="row">';

  sidebar();

      echo '<div class="col-md-10" >';

        echo '<div class="container-flush  d-flex" style="margin-top:10px; margin-bottom:10px;">';

        echo '<h3 class="text-primary mr-auto">Lista Articoli '.$tit["nomes"].'</h3>';
        echo '<div class="p-2 "><a type="button" class="btn btn-primary" href="index.php">Dashboard</a></div>';
        echo '<div class="p-2 "><a type="button" class="btn btn-primary" href="index.php?pag=sol_list">Lista sol.</a></div>';

        echo '</div>';

        //tabella utenti da attivare

        //query take utenti inattivi

        $q="SELECT * FROM `bene` INNER JOIN `solidale` on (bene.solidale=solidale.idsolidale) WHERE solidale.idsolidale='".$_GET["idsolidale"]."'";
        $rq=mysql_query($q) or die (mysql_error());
        //echo $q;

        echo '<div class="table-responsive">';
          echo '<table class="table">';
            echo '<caption>Attiva gli utenti da questa tabella</caption>';
            echo '<thead>';
              echo '<tr>';
              echo '<th scope="col">#ID</th>';
              echo '<th scope="col">nome</th>';
            echo '<th scope="col">tipo</th>';
              echo '<th scope="col">quantita</th>';
              echo '<th scope="col">prezzo</th>';
              echo '<th scope="col">datascad</th>';
              echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            $i=0;
            while($riga=mysql_fetch_assoc($rq)){

                echo '<tr>';
                  echo '<th scope="row">'.$riga["idbene"].'</th>';
                  echo '<td>'.$riga["nomeb"].'</td>';
                  echo '<td>'.$riga["tipob"].'</td>';
                  echo '<td>'.$riga["quantitab"].'</td>';
                  echo '<td>'.$riga["prezzob"].'</td>';
                    echo '<td>'.$riga["datascadb"].'</td>';
                echo '</tr>';

              $i++;
            }



            echo '</tbody>';
          echo '</table>';
        echo '</div>';


        echo '</div>';
  echo '</div>';
echo '</div>';

closer();

}

if ($pag=='sol_el'  && $_SESSION["entita"]==1)
{
  testata();
  navbar_gen();

  echo '<div class="container-fluid" style="margin-top:106px">';
    echo '<div class="row">';

  sidebar();

      echo '<div class="col-md-10" >';

        echo '<div class="container-flush  d-flex" style="margin-top:10px; margin-bottom:10px;">';

        echo '<h3 class="text-primary mr-auto">Lista Solidali</h3>';
        echo '<div class="p-2 "><a type="button" class="btn btn-primary" href="index.php">Dashboard</a></div>';


        echo '</div>';

        //tabella utenti da attivare

        //query take utenti inattivi

        $q="SELECT * FROM  solidale";
        $rq=mysql_query($q) or die (mysql_error());
        //echo $q;

        echo '<div class="table-responsive">';
          echo '<table class="table">';
            echo '<caption>Attiva gli utenti da questa tabella</caption>';
            echo '<thead>';
              echo '<tr>';
              echo '<th scope="col">#ID</th>';
              echo '<th scope="col">nome</th>';
              echo '<th scope="col">cognome</th>';
              echo '<th scope="col">città</th>';
              echo '<th scope="col">Articoli</th>';
              echo '<th scope="col"></th>';
              echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            $i=0;
            while($riga=mysql_fetch_assoc($rq)){

              $n="SELECT * FROM `bene` INNER JOIN `solidale` on (bene.solidale=solidale.idsolidale) WHERE solidale.idsolidale='".$riga["idsolidale"]."'";
              $rn=mysql_query($n) or die (mysql_error());
              $num=mysql_num_rows($rn);

                echo '<tr>';
                  echo '<th scope="row">'.$riga["idsolidale"].'</th>';
                  echo '<td>'.$riga["nomes"].'</td>';
                  echo '<td>'.$riga["vias"].'</td>';
                  echo '<td>'.$riga["cittas"].'</td>';
                  echo '<td>'.$num.'</td>';
                  echo '<td><a href="index.php?pag=sol_el1&idsolidale='.$riga["idsolidale"].'" class="btn btn-danger" >Elimina</a></td>';
                echo '</tr>';

              $i++;
            }



            echo '</tbody>';
          echo '</table>';
        echo '</div>';


        echo '</div>';
  echo '</div>';
echo '</div>';

closer();

}
if ($pag=='sol_el1'  && $_SESSION["entita"]==1)
{
  testata();
  navbar_gen();

  echo '<div class="container-fluid" style="margin-top:106px">';
    echo '<div class="row">';

  sidebar();

      echo '<div class="col-md-10" >';

        echo '<div class="container-flush  d-flex" style="margin-top:10px; margin-bottom:10px;">';

        echo '<h3 class="text-primary mr-auto">Elimina Solidale n° '.$_GET["idsolidale"].'</h3>';
        echo '<div class="p-2 "><a type="button" class="btn btn-primary" href="index.php">Dashboard</a></div>';

        echo '</div>';
//qui
        echo '<div class="d-flex justify-content-around  mb-3">';
        echo '<h2>Sei sicuro?</h2>';
        echo '</div>';
        echo '<div class="container-flush">';
        echo '<div class="d-flex justify-content-around  mb-3">';
        echo '<div class="p-2 "><a type="button" class="btn btn-danger"  href="index.php?pag=sol_el2&idsolidale='.$_GET["idsolidale"].'">Elimina</a></div>';
        echo '';
        echo '<div class="p-2 "><a type="button" class="btn btn-secondary" href="index.php">Indietro</a></div>';
        echo '</div>';
        echo '</div>';
        echo '<br>';
        echo '<div class="d-flex justify-content-end mb-3">';
        echo '<a class="text-secondary" href="index.php?pag=sol_art&idsolidale='.$_GET["idsolidale"].'"><i><u>Eliminerai anche i prodotti ad essi affiliati</u></i></a>';
        echo '</div>';

        echo '</div>';
  echo '</div>';
echo '</div>';

closer();

}
if ($pag=='sol_el2'  && $_SESSION["entita"]==1)
{

$q="DELETE FROM solidale WHERE idsolidale=".$_GET["idsolidale"];
$rq=mysql_query($q) or die (mysql_error());
header("Location: index.php");

}
//************************************************************************************************************************************************************************************************************************************
//************************************************************************************************************************************************************************************************************************************
//************************************************************************************************************************************************************************************************************************************
//Associazioni e pagine varie

if ($pag=='ass_list'  && $_SESSION["entita"]==1)
{
  testata();
  navbar_gen();

  echo '<div class="container-fluid" style="margin-top:106px">';
    echo '<div class="row">';

  sidebar();

      echo '<div class="col-md-10" >';

        echo '<div class="container-flush  d-flex" style="margin-top:10px; margin-bottom:10px;">';

        echo '<h3 class="text-primary mr-auto">Lista associazioni</h3>';
        echo '<div class="p-2 "><a type="button" class="btn btn-primary" href="index.php">Dashboard</a></div>';


        echo '</div>';

        //tabella utenti da attivare

        //query take utenti inattivi

        $q="SELECT * FROM  assvol";
        $rq=mysql_query($q) or die (mysql_error());
        //echo $q;

        echo '<div class="table-responsive">';
          echo '<table class="table">';
            echo '<caption>Attiva gli utenti da questa tabella</caption>';
            echo '<thead>';
              echo '<tr>';
              echo '<th scope="col">#ID</th>';
              echo '<th scope="col">nome</th>';
              echo '<th scope="col">via</th>';
              echo '<th scope="col">telefono</th>';
              echo '<th scope="col">npersonea</th>';
              echo '<th scope="col">Check Ut.</th>';
              echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            $i=0;
            while($riga=mysql_fetch_assoc($rq)){
                if($i>0){
                echo '<tr>';
                  echo '<th scope="row">'.$riga["idassvol"].'</th>';
                  echo '<td>'.$riga["nomea"].'</td>';
                  echo '<td>'.$riga["viaa"].'</td>';
                  echo '<td>'.$riga["nca"].'</td>';
                  echo '<td>'.$riga["npersonea"].'</td>';
                  echo '<td><a href="index.php?pag=ass_list_ut&idassvol='.$riga["idassvol"].'" class="btn btn-Warning" >Check</a></td>';
                echo '</tr>';

                }
                $i++;
            }



            echo '</tbody>';
          echo '</table>';
        echo '</div>';


        echo '</div>';
  echo '</div>';
echo '</div>';

closer();

}
if ($pag=='ass_list_ut'  && $_SESSION["entita"]==1)
{
  testata();
  navbar_gen();

  echo '<div class="container-fluid" style="margin-top:106px">';
    echo '<div class="row">';

  sidebar();

      echo '<div class="col-md-10" >';

        echo '<div class="container-flush  d-flex" style="margin-top:10px; margin-bottom:10px;">';

        echo '<h3 class="text-primary mr-auto">Lista Utenti associazioni</h3>';
        echo '<div class="p-2 "><a type="button" class="btn btn-primary" href="index.php">Dashboard</a></div>';


        echo '</div>';

        //tabella utenti da attivare

        //query take utenti inattivi

        $q="SELECT * FROM  assvol INNER JOIN utente ON utente.assvol=assvol.idassvol WHERE idassvol=".$_GET["idassvol"];
        $rq=mysql_query($q) or die (mysql_error());
        //echo $q;

        echo '<div class="table-responsive">';
          echo '<table class="table">';
            echo '<caption>Attiva gli utenti da questa tabella</caption>';
            echo '<thead>';
              echo '<tr>';
              echo '<th scope="col">#ID</th>';
              echo '<th scope="col">nome</th>';
              echo '<th scope="col">cognome</th>';
              echo '<th scope="col">username</th>';
              echo '<th scope="col">citta</th>';

              echo '</tr>';
            echo '</thead>';
            echo '<tbody>';

            while($riga=mysql_fetch_assoc($rq)){

                echo '<tr>';
                  echo '<th scope="row">'.$riga["idut"].'</th>';
                  echo '<td>'.$riga["nomeu"].'</td>';
                  echo '<td>'.$riga["cognome"].'</td>';
                  echo '<td>'.$riga["username"].'</td>';
                  echo '<td>'.$riga["citta"].'</td>';

                echo '</tr>';


            }



            echo '</tbody>';
          echo '</table>';
        echo '</div>';


        echo '</div>';
  echo '</div>';
echo '</div>';

closer();

}
/////////////////////////////////////////////////////////////////////
//creazione pdf
if($pag=='dopdf'  && $_SESSION["entita"]==1)
{

  require("fpdf/fpdf.php");

  $db=new PDO('mysql:host=localhost;dbname=my_dadaymattiasito','root','');

  class myPDF extends FPDF{

  function h2(){
  $this->SetFont('Arial','B',20);
  $this->Cell(276,5,'Database Utenti ed entita\' registrati',0,0,'C');
  $this->Ln();
  $this->SetFont('Times','',15);
  $this->Cell(276,10,"Valori aggiornati al ".date("d/m/Y"),0,0,'C');
  $this->Ln();}

  function footer(){
  $this->SetY(-15);
  $this->SetFont('Arial','',8);
  $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');}

  function headerTableu(){
  $this->SetFont('Times','B',12);
  $this->Cell(20,10,'Id',1,0,'C');
  $this->Cell(40,10,'Cognome',1,0,'C');
  $this->Cell(40,10,'Nome',1,0,'C');
  $this->Cell(80,10,'Email',1,0,'C');
  $this->Cell(30,10,'Telefono',1,0,'C');
  $this->Cell(25,10,'valore isee',1,0,'C');
  $this->Cell(40,10,'isee',1,0,'C');
  $this->Ln();}

  function viewTableu($db){
  $this->SetFont('Times','',12);
  $stmt=$db->query('select * from utente');
  while($data=$stmt->fetch(PDO::FETCH_OBJ)){
  $this->Cell(20,10,$data->idut,1,0,'C');
  $this->Cell(40,10,$data->cognomeu,1,0,'L');
  $this->Cell(40,10,$data->nomeu,1,0,'L');
  $this->Cell(80,10,$data->email,1,0,'L');
  $this->Cell(30,10,$data->telefonou,1,0,'L');
  $this->Cell(25,10,$data->isee,1,0,'L');
  $this->Cell(40,10,$data->visee,1,0,'L');
  //$this->Link(10,10, 65, 10,'index.php?isee='.$data->isee )
  $this->Ln();}}

  function headerTables(){
  $this->SetFont('Times','B',12);
  $this->Cell(20,10,'Id solidale',1,0,'C');
  $this->Cell(40,10,'Nome',1,0,'C');
  $this->Cell(40,10,'Via',1,0,'C');
  $this->Cell(80,10,'cittas',1,0,'C');
  $this->Cell(30,10,'Telefono',1,0,'C');
  $this->Cell(25,10,'Email',1,0,'C');
  $this->Cell(40,10,'Tipo',1,0,'C');
  $this->Ln();}

  function viewTables($db){
  $this->SetFont('Times','',12);
  $stmt=$db->query('select * from solidale');
  while($data=$stmt->fetch(PDO::FETCH_OBJ)){
  $this->Cell(20,10,$data->idsolidle,1,0,'C');
  $this->Cell(40,10,$data->nomes,1,0,'L');
  $this->Cell(40,10,$data->vias,1,0,'L');
  $this->Cell(80,10,$data->cittas,1,0,'L');
  $this->Cell(30,10,$data->telefonos,1,0,'L');
  $this->Cell(25,10,$data->email,1,0,'L');
  $this->Cell(40,10,$data->tipos,1,0,'L');
  //$this->Link(10,10, 65, 10,'index.php?isee='.$data->isee )
  $this->Ln();}}

  function headerTablea(){
  $this->SetFont('Times','B',12);
  $this->Cell(20,10,'Id Ass.',1,0,'C');
  $this->Cell(100,10,'Nome',1,0,'C');
  $this->Cell(40,10,'Via',1,0,'C');
  $this->Cell(25,10,'cittas',1,0,'C');
  $this->Cell(25,10,'Telefono',1,0,'C');
  $this->Cell(45,10,'Email',1,0,'C');
  $this->Cell(15,10,'Pers.',1,0,'C');
  $this->Ln();}

  function viewTablea($db){
  $this->SetFont('Times','',12);
  $stmt=$db->query('select * from assvol');
  while($data=$stmt->fetch(PDO::FETCH_OBJ)){
  $this->Cell(20,10,$data->idassvol,1,0,'C');
  $this->Cell(100,10,$data->nomea,1,0,'L');
  $this->Cell(40,10,$data->viaa,1,0,'L');
  $this->Cell(25,10,$data->cittaa,1,0,'L');
  $this->Cell(25,10,$data->telefonoa,1,0,'L');
  $this->Cell(45,10,$data->email,1,0,'L');
  $this->Cell(15,10,$data->npersonea,1,0,'L');
  //$this->Link(10,10, 65, 10,'index.php?isee='.$data->isee )
  $this->Ln();}}
}

  $pdf=new myPDF();
  $pdf->AliasNbPages();

  // prima pagina
  $pdf->AddPage('L','A4',0);

  $nome='SonoSprechi';

  $numtel='+39 3911582874';
  $data=date("d/m/Y");
  $luogo='Via Sallustio 3 - Chieti CH';

  $pdf->SetFont('Arial','B',20);
  $pdf->SetTextColor(255,0,0);
  $pdf->Image('fpdf/logo_small.png',10,15);
  $pdf->Cell(160);
  $pdf->Cell(65,40,'Informazioni Societa\'',0,0,'C');
  $pdf->SetFont('Arial','I',12);
  $pdf->SetTextColor(0);
  $pdf->Cell(-65);
  $pdf->Cell(25,55,'Nome: '.$nome.'');
  $pdf->Cell(-25);
  //$pdf->Cell(25,65,'Cognome: '.$cognome.'');
  //$pdf->Cell(-25);
  $pdf->Cell(25,75,'Recapito telefonico: '.$numtel.'');
  $pdf->Cell(-25);
  $pdf->Cell(25,85,'Data: '.$data.'');
  $pdf->Cell(-25);
  $pdf->Cell(25,95,'Luogo: '.$luogo.'');
  $pdf->Cell(-25);

  // solidali pagina
  $pdf->AddPage('L','A4',0);
  $pdf->h2();
  $pdf->headerTables();
  $pdf->viewTables($db);


  // utenti pagina
  $pdf->AddPage('L','A4',0);
  $pdf->h2();
  $pdf->headerTableu();
  $pdf->viewTableu($db);


  // associazioni pagina
  $pdf->AddPage('L','A4',0);
  $pdf->h2();
  $pdf->headerTablea();
  $pdf->viewTablea($db);
  $pdf->Output();
}

//******************************************************************************
//xml e Xsd
//nome file
$filename="miofile.xml";


function esterna($id,$xml)
{
  //$q="select * from eventi premi ON idev=";
  $q="select * from tipo_utente WHERE rev='".$id."'";
  $rq=mysql_query($q);
  $xml.="<premi>\n";
  while($riga=mysql_fetch_assoc($rq))
  {
    $xml.="<premio>\n";
    $xml.="<idpremio>".htmlspecialchars($riga["idpremio"],ENT_XML1)."</idpremio>\n";
    $xml.="<pos>".htmlspecialchars($riga["pos"],ENT_XML1)."</pos>\n";
    $xml.="<alunni>".htmlspecialchars($riga["alunni"],ENT_XML1)."</alunni>\n";
    //$xml.="<rev>".htmlspecialchars($riga["rev"],ENT_XML1)."</rev>\n";
    $xml.="</premio>\n";
  }
  $xml.="</premi>\n";
  $q=" SELECT * FROM `indirizzi`,`coinvolge`,`eventi` WHERE indirizzi.idind=coinvolge.rind AND coinvolge.rev=eventi.idev and eventi.idev='".$id."'";
  $rq=mysql_query($q);
  //SELECT * FROM `indirizzi`,`coinvolge`,`eventi` WHERE indirizzi.idind=coinvolge.rind AND coinvolge.rev=eventi.idev
  $xml.="<indirizzi>\n";
  while($riga=mysql_fetch_assoc($rq))
  {
    $xml.="<indirizzo>\n";
    $xml.="<idind>".htmlspecialchars ($riga["idind"],ENT_XML1)."</idind>\n";
    $xml.="<desind>".htmlspecialchars ($riga["desind"],ENT_XML1)."</desind>\n";
    $xml.="</indirizzo>\n";
  }
  $xml.="</indirizzi>\n";
  return $xml;

}

//pag main
if($pag=='xml'  && $_SESSION["entita"]==1)
{
  $xml='<?xml version="1.0" encoding="UTF-8"?>'."\n";
  $xml.="<root>\n";

  $q="SELECT * FROM utente";
  $rq=mysql_query($q) or die(mysql_error());


  while($riga=mysql_fetch_assoc($rq)){

    $xml.="<utente>\n";
    $xml.="<idut>".htmlspecialchars($riga["idut"],ENT_XML1)."</idut>\n";
    $xml.="<nomeu>".htmlspecialchars($riga["nomeu"],ENT_XML1)."</nomeu>\n";
    $xml.="<cognomeu>".htmlspecialchars($riga["cognomeu"],ENT_XML1)."</cognomeu>\n";
    $xml.="<email>".htmlspecialchars($riga["email"],ENT_XML1)."</email>\n";
    $xml.="<username>".htmlspecialchars($riga["username"],ENT_XML1)."</username>\n";
    $xml.="<datacodfisc>".htmlspecialchars($riga["codfisc"],ENT_XML1)."</datacodfisc>\n";
    $xml.="<visee>".htmlspecialchars($riga["visee"],ENT_XML1)."</visee>\n";
    $xml.="<dataisee>".htmlspecialchars($riga["dataisee"],ENT_XML1)."</dataisee>\n";
    $xml.="<nf>".htmlspecialchars($riga["nf"],ENT_XML1)."</nf>\n";
    $xml.="<credito>".htmlspecialchars($riga["credito"],ENT_XML1)."</credito>\n";


    //  $xml=esterna($riga["idev"],$xml);
    $xml.="</utente>\n";

  }




  //caricamento
  $xml.="</root>\n";
  file_put_contents ($filename,$xml);
  echo '<a href="miofile.xml">Vedi xml</a>';
  echo '<br>';
  echo '<a href="index.php?pag=down">Download</a>';
}

if (file_exists($filename) && $pag=='down')
{
  header('Content-Description: File Transfer');
  header('Content-Type: application/octet-stream');
  header('Content-Disposition: attachment; filename="'.basename($filename).'"');
  header('Expires: 0');
  header('Cache-Control: must-revalidate');
  header('Pragma: public');
  header('Content-Length: ' . filesize($filename));
  readfile($filename);
  exit;
}

 ?>
