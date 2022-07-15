<?php
//sidebar sinistra
function sidebar_ut(){



  echo '<!-- side bar -->';
  echo '<div class="col-md-2"  style="padding-right: 0px; padding-left: 0px; ">';
  echo '';
  echo '<div class="container-flush">';
  echo '<div class="image-flip" >';
  echo '<div class="mainflip flip-0">';
  echo '<div class="frontside">';
  echo '<div class="card">';
  echo '<div class="card-body text-center">';
  $t="SELECT * FROM utente WHERE idut=".$_SESSION["idut"];
  $rt=mysql_query($t) or die(mysql_error());
  $rrt=mysql_fetch_assoc($rt) or die(mysql_error());

if($rrt["fp"]==NULL){
  echo '<p><img class=" img-fluid" src="img/foto_profilo/assente.png" alt="card image"></p>';
}
else
  echo '<p><img class=" img-fluid" src="img/foto_profilo/'.$_SESSION["fp"].'" alt="card image"></p>';

  echo '<h4 class="card-title">'.$_SESSION["nomeu"].' '.$_SESSION["cognomeu"].'</h4>';




if($rrt["assvol"]==1) {
  $s="privato";
} else{
    $s="legato ad associazione";
}
  echo '<p class="card-text">Utente livello base '.$s.'</p>';
  echo '';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '<div class="backside container-flush">';
  echo '<div class="card">';
  echo '<div class="card-body text-center mt-4">';
  echo '<h4 class="card-title">Utility</h4>';
  echo '<p class="card-text"><a href="index.php?pag=car_fprof" class="btn btn-warning">modifica foto profilo</a></p>';
  echo '<p class="card-text"><a href="index.php?pag=mod_pass_ut" class="btn btn-warning">modifica password</a></p>';
  echo '<ul class="list-inline">';
  echo '<li class="list-inline-item">';
  echo '<a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">';
  echo '<i class="fa fa-facebook"></i>';
  echo '</a>';
  echo '</li>';
  echo '<li class="list-inline-item">';
  echo '<a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">';
  echo '<i class="fa fa-twitter"></i>';
  echo '</a>';
  echo '</li>';
  echo '<li class="list-inline-item">';
  echo '<a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">';
  echo '<i class="fa fa-skype"></i>';
  echo '</a>';
  echo '</li>';
  echo '<li class="list-inline-item">';
  echo '<a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">';
  echo '<i class="fa fa-google"></i>';
  echo '</a>';
  echo '</li>';
  echo '</ul>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '';

  echo '<div class="card"  style=" margin-bottom:20px;">';
  echo '<div class="container" style="padding-top:10px;">';
  echo '<h5 class="card-title">Aggiorna ISEE</h5>';
  echo '</div>';
  echo '<div class="card-body">';
echo '<p>Ultima data  caricamento: '.$_SESSION["dataisee"].'</p>';
  echo '<p> <a href="index.php?pag=car_isee " class="btn btn-primary"> Vai:</a></p>';
    echo '<p> <a href="isee/'.$_SESSION["isee"].'" class="btn btn-warning" target="_blank"> Vedi:</a></p>';
  echo '</div>';
  echo '</div>';

  echo '<div class="card" style=" margin-bottom:20px;">';
  echo '<div class="container" style="padding-top:10px;">';
  echo '<h5 class="card-title">Contatta Admin</h5>';
  echo '</div>';
  echo '';
  echo '<div class="card-body">';
  echo '<p> Email: <a href="mailto: dadaymattia@gmail.com "> dadaymattia@gmail.com </a>  </p>';
  echo '<p> Tel: <a href="tel: +393911582874 "> +39 393911582874 </a>  </p>';
  echo '</div>';
  echo '</div>';
  echo '';






  echo '</div>';

}
//***********************************************************************************************************************************************************************
//***********************************************************************************************************************************************************************


if ($pag=='sol_list_ut'  && $_SESSION["entita"]==2)
{
  testata_ut();
  navbar_gen();

  echo '<div class="container-fluid" style="margin-top:106px">';
    echo '<div class="row">';

  sidebar_ut();

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
                  echo '<td><a href="index.php?pag=sol_art_ut&idsolidale='.$riga["idsolidale"].'" class="btn btn-Warning" >Check</a></td>';
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



if ($pag=='sol_art_ut'  && $_SESSION["entita"]==2)
{

  $stit="SELECT * FROM `solidale` WHERE solidale.idsolidale='".$_GET["idsolidale"]."'";
  $rtit=mysql_query($stit) or die(mysql_error());
  $tit=mysql_fetch_assoc($rtit);
  testata_ut();
  navbar_gen();

    echo '<div class="container-fluid" style="margin-top:106px">';
      echo '<div class="row">';


        sidebar_ut();

        echo '<div class="col-md-10" >';

          echo '<div class="container-flush  d-flex" style="margin-top:10px; margin-bottom:10px;">';

          echo '<h3 class="text-primary mr-auto">Lista Articoli '.$tit["nomes"].'</h3>';
          echo '<div class="p-2 "><a type="button" class="btn btn-primary" href="index.php">Dashboard</a></div>';
          echo '<div class="p-2 "><a type="button" class="btn btn-primary" href="index.php?pag=sol_list_ut">Lista sol.</a></div>';

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

/*
if ($pag=='ass_list_ut'  && $_SESSION["entita"]==2)
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
*/



//lista beni con filtraggio
//accessibile da pulsante prenota da home privata Utenti


if ($pag=='beni_list_ut'  && $_SESSION["entita"]==2)
{

  testata_ut();
  navbar_gen();

  echo '<div class="container-fluid" style="margin-top:106px">';
    echo '<div class="row">';


      sidebar_ut();

      echo '<div class="col-md-10" >';

              echo '<div class="container-flush  d-flex" style="margin-top:10px; margin-bottom:10px;">';
                echo '<h3 class="text-primary mr-auto">Lista Beni in vetrina</h3>';
                echo '<div class="p-2 "><a type="button" class="btn btn-primary" href="index.php">Home</a></div>';
              echo '</div>';

              //form filtraggio
              echo '<div class="container-flush">';
                echo '<div class="row">';
                  echo '<div class="col-md-2">';

                  echo '</div>';
                  echo '<div class="col-md-6">';
                    echo '<form method="GET" action="index.php" >';
                      echo '<div class="form-row">';

                        echo '<div class="form-group col-md-6">';
                          echo '<label for="inputEmail4">Prezzo</label>';
                          echo '<input type="number" class="form-control" id="inputEmail4" name="prezzo" step="0.5" >';
                        echo '</div>';

                        echo '<div class="form-group col-md-6">';
                          echo '<label for="inputPassword4">Tipo</label>';
                          echo '<input type="text" class="form-control" id="inputPassword4" name="tipo" >';
                        echo '</div>';

                      echo '</div>';

                      echo '<div class="container-flush">';
                        echo '<p>Data Scadenza</p>';
                      echo '</div>';

                      echo '<div class="form-row">';
                        echo '<div class="form-group col-md-6">';
                            echo '<label for="inputEmail4">Da:</label>';
                            echo '<input type="date" class="form-control" id="inputEmail4" name="data_inizio" required>';
                        echo '</div>';
                        echo '<div class="form-group col-md-6">';
                          echo '<label for="inputPassword4">A:</label>';
                          echo '<input type="date" class="form-control" id="inputPassword4" name="data_fine" required>';
                        echo '</div>';
                      echo '</div>';

                    echo '</div>';



                    echo '<div class="col-md-4">';
                      echo '<div class="d-flex align-items-start flex-column bd-highlight mb-3" style="height: 200px;">';

                        echo '<div class="p-2 bd-highlight mt-auto">';
                          echo '<input type="hidden" name="pag" value="beni_list_ut1">';
                          echo '<button type="submit" class="btn btn-primary">Conferma</button></div>';
                        echo '</div>';
                      echo '</div>';
                    echo '</div>';

                  echo '</form>';
                  //tabella utenti da attivare

                  //query take utenti inattivi

                  $q="SELECT * FROM  bene";
                  $rq=mysql_query($q) or die (mysql_error());
                  //echo $q;

                  echo '<div class="table-responsive">';
                    echo '<table class="table">';
                      echo '<caption>Attiva gli utenti da questa tabella</caption>';
                      echo '<thead>';
                        echo '<tr>';
                        echo '<th scope="col">#ID</th>';
                        echo '<th scope="col">Nome</th>';
                        echo '<th scope="col">Tipo</th>';
                        echo '<th scope="col">Quantità</th>';
                        echo '<th scope="col">Prezzo</th>';
                        echo '<th scope="col">Data Scadenza</th>';
                        echo '<th scope="col">Solidale</th>';
                        echo '</tr>';
                      echo '</thead>';
                      echo '<tbody>';

                      while($riga=mysql_fetch_assoc($rq)){

                        $n="SELECT * FROM `bene` INNER JOIN `solidale` on (bene.solidale=solidale.idsolidale) WHERE bene.idbene='".$riga["idbene"]."'";
                        $rn=mysql_query($n) or die (mysql_error());
                        $solidale=mysql_fetch_assoc($rn);
                        $num=mysql_num_rows($rn);

                          echo '<tr>';
                            echo '<th scope="row">'.$riga["idbene"].'</th>';
                            echo '<td>'.$riga["nomeb"].'</td>';
                            echo '<td>'.$riga["tipob"].'</td>';
                            echo '<td>'.$riga["quantitab"].'</td>';
                            echo '<td>'.$riga["prezzob"].'</td>';
                            echo '<td>'.$riga["datascadb"].'</td>';
                            echo '<td>'.$solidale["nomes"].'</td>';
                          echo '</tr>';
                      }

                      echo '</tbody>';
                    echo '</table>';
                echo '</div>';
              echo '</div>';
              echo '</div>';




  closer();
}

if ($pag=='beni_list_ut1'  && $_SESSION["entita"]==2)
      {
      //creazione query automatica

      $wh =" WHERE 1=1 ";
      $ord="";

      if(!empty($_GET['tipo'])){
          $wh .= " AND tipob ='".$_GET['tipo']."' ";
      }
      if(!empty($_GET['prezzo'])){
          $wh .= " AND prezzob <='".$_GET['prezzo']."' ";
      }
      /*
      if(!empty($_GET['data_fine'])){
          $wh .= " AND datascadb <='".$_GET['data_fine']."' ";
      }
      if(!empty($_GET['data_inizio'])){
          $wh .= " AND datascadb >='".$_GET['data_inizio']."' ";
      }
      */
      //tralascio i controlli sui valori importanti soprattutto per le date
      if(!empty($_GET['data_inizio']) && !empty($_GET['data_fine'])){

          $wh .= " AND datascadb BETWEEN '".$_GET['data_inizio']."' AND '".$_GET['data_fine']."' ";
      }
      //e quindi costruisci la quesry

      $q ="SELECT * FROM bene $wh $ord";
      echo $q;
      $rq=mysql_query($q) or die (mysql_error());

        testata_ut();
        navbar_gen();

        echo '<div class="container-fluid" style="margin-top:106px">';
          echo '<div class="row">';


            sidebar_ut();
            echo '<div class="col-md-10" >';
            echo '<div class="container-flush  d-flex" style="margin-top:10px; margin-bottom:10px;">';
              echo '<h3 class="text-primary mr-auto">Articoli trovati</h3>';
              echo '<div class="p-2 "><a type="button" class="btn btn-primary" href="index.php">Home</a> <a type="button" class="btn btn-primary" href="index.php?pag=beni_list_ut">Indietro</a></div>';
            echo '</div>';

              echo '<div class="table-responsive">';
                echo '<table class="table">';
                  echo '<caption>Attiva gli utenti da questa tabella</caption>';
                  echo '<thead>';
                    echo '<tr>';
                    echo '<th scope="col">#ID</th>';
                    echo '<th scope="col">Nome</th>';
                    echo '<th scope="col">Tipo</th>';
                    echo '<th scope="col">Quantità</th>';
                    echo '<th scope="col">Prezzo</th>';
                    echo '<th scope="col">Data Scadenza</th>';
                    echo '<th scope="col">Solidale</th>';
                    echo '</tr>';
                  echo '</thead>';
                  echo '<tbody>';

                  while($riga=mysql_fetch_assoc($rq)){

                    $n="SELECT * FROM `bene` INNER JOIN `solidale` on (bene.solidale=solidale.idsolidale) WHERE bene.idbene='".$riga["idbene"]."'";
                    $rn=mysql_query($n) or die (mysql_error());
                    $solidale=mysql_fetch_assoc($rn);
                    $num=mysql_num_rows($rn);

                      echo '<tr>';
                        echo '<th scope="row">'.$riga["idbene"].'</th>';
                        echo '<td>'.$riga["nomeb"].'</td>';
                        echo '<td>'.$riga["tipob"].'</td>';
                        echo '<td>'.$riga["quantitab"].'</td>';
                        echo '<td>'.$riga["prezzob"].'</td>';
                        echo '<td>'.$riga["datascadb"].'</td>';
                        echo '<td>'.$solidale["nomes"].'</td>';
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


if ($pag=='carrello_list_ut'  && $_SESSION["entita"]==2)
{
  testata_ut();
  navbar_gen();

  echo '<div class="container-fluid" style="margin-top:106px">';
    echo '<div class="row">';

      sidebar_ut();
      echo '<div class="col-md-10" >';
        echo '<div class="container-flush  d-flex" style="margin-top:10px; margin-bottom:10px;">';
          echo '<h3 class="text-primary mr-auto">Oggetti richiesti</h3>';
          echo '<div class="p-2 "><a type="button" class="btn btn-primary" href="index.php?pag=carrello_agg_bene">+</a> <a type="button" class="btn btn-primary" href="index.php">Home</a> <a type="button" class="btn btn-primary" href="index.php?pag=beni_list_ut">Indietro</a></div>';
        echo '</div>';

$q="SELECT * FROM  richiesta";
$rq=mysql_query($q) or die (mysql_error());
//echo $q;
  echo '<div class="table-responsive">';
    echo '<table class="table">';
      echo '<caption>Attiva gli utenti da questa tabella</caption>';
      echo '<thead>';
        echo '<tr>';
        echo '<th scope="col">#ID</th>';
        echo '<th scope="col">data</th>';
        echo '<th scope="col">importo</th>';
        echo '<th scope="col">quantita</th>';
        echo '<th scope="col">bene</th>';
      echo '<th scope="col">Azioni</th>';
        echo '</tr>';
      echo '</thead>';
      echo '<tbody>';

      while($riga=mysql_fetch_assoc($rq)){

        $n="SELECT * FROM `bene` INNER JOIN `richiesta` on (bene.idbene=richiesta.bene) WHERE richiesta.bene='".$riga["bene"]."'";
        $rn=mysql_query($n) or die (mysql_error());
        $bene=mysql_fetch_assoc($rn);
        $num=mysql_num_rows($rn);

          echo '<tr>';
            echo '<th scope="row">'.$riga["idrich"].'</th>';
            echo '<td>'.$riga["data"].'</td>';
            echo '<td>'.$riga["importo"].'</td>';
            echo '<td>'.$riga["quantita"].'</td>';

            echo '<td>'.$bene["nomeb"].'</td>';
                  echo '<td><a type="button" class="btn btn-primary" href="index.php?pag=carrello_mod_bene&idrich='.$riga["idrich"].'">MOD</a> <a type="button" class="btn btn-danger" href="index.php?pag=carrello_del_bene&idrich='.$riga["idrich"].'">DEL</a></td>';
          echo '</tr>';
      }

      echo '</tbody>';
    echo '</table>';


      echo '</div>';
    echo '</div>';
closer();
}


if ($pag=='carrello_agg_bene'  && $_SESSION["entita"]==2)
{
  testata_ut();
  navbar_gen();

  echo '<div class="container-fluid" style="margin-top:106px">';
    echo '<div class="row">';


      sidebar_ut();

      echo '<div class="col-md-10" >';

              echo '<div class="container-flush  d-flex" style="margin-top:10px; margin-bottom:10px;">';
                echo '<h3 class="text-primary mr-auto">Lista Beni in vetrina</h3>';
                echo '<div class="p-2 "><a type="button" class="btn btn-primary" href="index.php">Home</a></div>';
              echo '</div>';



                  //query take utenti inattivi

                  $q="SELECT * FROM  bene";
                  $rq=mysql_query($q) or die (mysql_error());
                  //echo $q;

                  echo '<div class="table-responsive">';
                    echo '<table class="table">';
                      echo '<caption>Attiva gli utenti da questa tabella</caption>';
                      echo '<thead>';
                        echo '<tr>';
                        echo '<th scope="col">#ID</th>';
                        echo '<th scope="col">Nome</th>';
                        echo '<th scope="col">Tipo</th>';
                        echo '<th scope="col">Quantità</th>';
                        echo '<th scope="col">Prezzo</th>';
                        echo '<th scope="col">Data Scadenza</th>';
                        echo '<th scope="col">Solidale</th>';
                        echo '<th scope="col">Aggiungi</th>';

                        echo '</tr>';
                      echo '</thead>';
                      echo '<tbody>';

                      while($riga=mysql_fetch_assoc($rq)){

                        $n="SELECT * FROM `bene` INNER JOIN `solidale` on (bene.solidale=solidale.idsolidale) WHERE bene.idbene='".$riga["idbene"]."'";
                        $rn=mysql_query($n) or die (mysql_error());
                        $solidale=mysql_fetch_assoc($rn);
                        $num=mysql_num_rows($rn);

                          echo '<tr>';
                            echo '<th scope="row">'.$riga["idbene"].'</th>';
                            echo '<td>'.$riga["nomeb"].'</td>';
                            echo '<td>'.$riga["tipob"].'</td>';
                            echo '<td>'.$riga["quantitab"].'</td>';
                            echo '<td>'.$riga["prezzob"].'</td>';
                            echo '<td>'.$riga["datascadb"].'</td>';
                            echo '<td>'.$solidale["nomes"].'</td>';
                            echo '<td>';
                            echo '<form action="index.php" method="GET">';
                            echo '<p>quantità <input type="number" name="quantita" max="'.$riga["quantitab"].'">
                            <input type="submit" value="Conferma" class="btn btn-primary">
                            <input type="hidden" name="pag" value="carrello_agg_bene1">
                            <input type="hidden" name="idbene" value="'.$riga["idbene"].'">
                            </p>';

                            echo '</form>';
                            echo '</td>';

                          echo '</tr>';
                      }

                      echo '</tbody>';
                    echo '</table>';
                echo '</div>';
              echo '</div>';
              echo '</div>';




  closer();

}
if ($pag=='carrello_agg_bene1'  && $_SESSION["entita"]==2)
{
    $qb="SELECT * FROM bene WHERE idbene='".$_GET["idbene"]."'";
    $rqb=mysql_query($qb) or die (mysql_error());
    $rigab=mysql_fetch_assoc($rqb);
    $imptot=$rigab["prezzob"]*$_GET["quantita"];

    $q = "insert into richiesta (data,importo,quantita,utente,bene) values (";
    $q.= "'".mysql_real_escape_string(date("y-m-d"))."',";
    $q.= "'".mysql_real_escape_string($imptot)."',";
    $q.= "'".mysql_real_escape_string($_GET["quantita"])."',";
    $q.= "'".mysql_real_escape_string($_SESSION["idut"])."',";
    $q.= "'".$_GET["idbene"]."')";
    $rq = mysql_query($q) or die("err1");
    header("Location: index.php?pag=carrello_list_ut");
}


if ($pag=='carrello_mod_bene'  && $_SESSION["entita"]==2)
{
  $n="SELECT * FROM `bene` INNER JOIN `richiesta` on (bene.idbene=richiesta.bene) WHERE richiesta.idrich='".$_GET["idrich"]."'";
  $rn=mysql_query($n) or die (mysql_error());
  $bene=mysql_fetch_assoc($rn);
echo $n;
  echo '<form action="index.php" method="GET">';
  echo '<p>quantità <input type="number" name="quantita" max="'.$riga["quantitab"].'">
  <input type="submit" value="Conferma" class="btn btn-primary">
  <input type="hidden" name="pag" value="carrello_mod_bene1">
  <input type="hidden" name="prezzob" value="'.$bene["prezzob"].'">
    <input type="hidden" name="idrich" value="'.$bene["idrich"].'">

  </p>';
  echo '</form>';

}

if ($pag=='carrello_mod_bene1'  && $_SESSION["entita"]==2)
{

      $imptot=$_GET["prezzob"]*$_GET["quantita"];


$idrich=filter_input(INPUT_GET,'idrich',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  //salvataggio modifiche al record
  $q = "update richiesta set quantita='".mysql_real_escape_string($_GET["quantita"])."', importo=".$imptot." ";
  $q.= "where idrich=".$idrich;
  $rq = mysql_query($q) or die("errore con il salvataggio del corso: ".$q.mysql_error());
  header("Location:index.php?pag=carrello_list_ut");



}


if ($pag=='carrello_del_bene'  && $_SESSION["entita"]==2)
{
  $q = "delete from richiesta where idrich=".$_GET["idrich"];
  $rq = mysql_query($q) or die("errore con la cancellazione del corso");
  header("Location:index.php?pag=carrello_list_ut");

}
//***************************************************************************************************************************************************************************************************************************
//***************************************************************************************************************************************************************************************************************************
//***************************************************************************************************************************************************************************************************************************

//caricamento ISEE
if ($pag=='car_isee'  && $_SESSION["entita"]==2)
{
testata_ut();
//navbar_gen();



echo '<form action="index.php" method="post" enctype="multipart/form-data">';
  echo '<p>Inserisci stipendio mensile: <input type="number" name="visee" min="0"></p>';
echo 'Select image to upload:';
echo '<input type="file" name="file" id="fileToUpload" size="50000000" accept="application/pdf"> ';
echo '<input type="hidden" name="caso" value="car_isee1">';
echo '<input type="submit" value="Carica" name="submit">';
echo '</form>';



closer();

}

//caricamento ISEE
if ($caso=='car_isee1'  && $_SESSION["entita"]==2)
{
/*
if (move_uploaded_file($_FILES['miofile']['tmp_name'], “img/ciao.pdf”)) {
echo "File caricato con successo.\n";
} else {
echo "Errore!\n";
}*/
$targetfolder = "isee/";
$name=$_SESSION["idut"].".pdf";
$tot=$targetfolder.$name;
$dataisee=date("y-m-d");
$_SESSION["isee"]=$name;

$q="UPDATE utente SET `isee` ='".$_SESSION["idut"].".pdf', `dataisee`='".$dataisee."', visee='".$_POST["visee"]."' WHERE idut=".$_SESSION["idut"];
$rq=mysql_query($q) or die (mysql_error());
$targetfolder = $targetfolder . basename($name) ;

$ok=1;

$file_type=$_FILES['file']['type'];

if ($file_type=="application/pdf") {

if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

{
/*
echo 'The file '. basename( $_FILES['file']['name']). ' is uploaded <a href="index.php">Indietro</a>';
*/
header("Location: index.php");

}

else {

echo "Problem uploading file";

}

}

else {

echo "You may only upload PDFs, JPEGs or GIF files.<br>";

}

}


//foto profilo caricamento
if ($pag=='car_fprof'  && $_SESSION["entita"]==2)
{
  echo '<form action="index.php" method="post" enctype="multipart/form-data">';

  echo 'Select image to upload:';
  echo '<input type="file" name="file" id="fileToUpload" size="4000000" accept="image/*">';

  echo '<input type="hidden" name="caso" value="car_fprof1">';
  echo '<input type="submit" value="Upload Image" name="submit">';
  echo '</form>';


}

if ($caso=='car_fprof1'  && $_SESSION["entita"]==2)
{
  $c="SELECT * FROM utente WHERE idut=".$_SESSION["idut"];
  $rc=mysql_query($c) or die (mysql_error());
  $riga=mysql_fetch_assoc($rc);
  $percorso="img/foto_profilo/".$riga["fp"];
  echo $percorso;
  @unlink($percorso);

//  echo $_SESSION["idut"];
$date = new DateTime();
$ts=$date->getTimestamp();

  $targetfolder = "img/foto_profilo/";
$name=$_SESSION["idut"]."-".$ts.".jpg";
$q="UPDATE utente SET `fp` ='".$_SESSION["idut"]."-".$ts.".jpg' WHERE idut=".$_SESSION["idut"];
$rq=mysql_query($q) or die (mysql_error());
$_SESSION["fp"] = $name;
$tot=$targetfolder.$name;
//echo $targetfolder;
//echo $name;
//@unlink($tot);



$targetfolder = $targetfolder . basename($name) ;

$ok=1;

$file_type=$_FILES['file']['type'];

if ( $file_type=="image/gif" || $file_type=="image/jpeg" || $file_type=="image/png") {

if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

{
/*
echo 'The file '. basename( $_FILES['file']['name']). ' is uploaded <a href="index.php">Indietro</a>';
*/
header("Location: index.php");
}

else {

echo "Problem uploading file";

}

}

else {

echo "You may only upload foto (anche leggere).<br>";

}


}
//**************************************************************************************************************************************************************************************
//**************************************************************************************************************************************************************************************

//modifica Profilo
if ($pag=='mod_prof_ut'  && $_SESSION["entita"]==2)
{
  $q="SELECT * FROM utente WHERE idut=".$_SESSION["idut"];
  $rq=mysql_query($q) or die(mysql_error());
  $riga=mysql_fetch_assoc($rq) or die(mysql_error());
   testata_ut();
  navbar_gen();
  echo '<div class="container-fluid" style="margin-top:106px">';
  echo '<div class="row">';
  echo '';
  sidebar_ut();

  echo '<!-- content zone -->';
  echo '<div class="col-md-10" >';

  echo '<div class="container-flush " style="margin-top:10px; margin-bottom:10px;">';
  echo '<h3 class="text-primary">MODIFICA Profilo</h3>';
  echo '</div>';

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
echo '<label for="inputEmail4">Email</label>';
echo '<input type="email" class="form-control" id="inputEmail4" name="email" value="'.$riga["email"].'">';
echo '</div>';
echo '<div class="form-group col-md-6">';
echo '<label for="inputPassword44">Username</label>';
echo '<input type="text" class="form-control" id="inputPassword44"  name="username" value="'.$riga["username"].'">';
echo '</div>';
echo '</div>';
echo '<hr>';
echo '<div class="form-row">';
echo '<div class="form-group col-md-6">';
echo '<label for="inputEmail4">Età</label>';
echo '<input type="number" class="form-control" id="inputEmail4" min="15" max="110" name="eta" value="'.$riga["eta"].'">';
echo '<label for="inputEmail4">Città</label>';
echo '<input type="text" class="form-control" id="inputEmail4" name="citta" value="'.$riga["citta"].'">';
echo '<label for="inputEmail4">Nucleo Familiare</label>';
echo '<input type="number" class="form-control" id="inputEmail4" name="nf" value="'.$riga["nf"].'">';
echo '</div>';
echo '<div class="form-group col-md-6">';

echo '<div class="container-flush" style="margin-bottom:13px">';
echo '<div class="container-flush">';
echo '<label for="radio">Sesso</label>';
echo '</div>';

if($riga["sesso"]==1)
{
  echo '<div id="radio" class="form-check form-check-inline">';
  echo '<input class="form-check-input" type="radio" name="sesso" id="inlineRadio1" value="1" checked>';
  echo '<label class="form-check-label" for="inlineRadio1">Maschio</label>';
  echo '</div>';
  echo '<div class="form-check form-check-inline">';
  echo '<input class="form-check-input" type="radio" name="sesso" id="inlineRadio2" value="0">';
  echo '<label class="form-check-label" for="inlineRadio2">Femmina</label>';
  echo '</div>';
}
else {
  echo '<div id="radio" class="form-check form-check-inline">';
  echo '<input class="form-check-input" type="radio" name="sesso" id="inlineRadio1" value="1" >';
  echo '<label class="form-check-label" for="inlineRadio1">Maschio</label>';
  echo '</div>';
  echo '<div class="form-check form-check-inline">';
  echo '<input class="form-check-input" type="radio" name="sesso" id="inlineRadio2" value="0" checked>';
  echo '<label class="form-check-label" for="inlineRadio2">Femmina</label>';
  echo '</div>';
}



echo '</div>';


echo '<label for="inputEmail4">Giorno di nascita</label>';
echo '<input type="date" class="form-control" id="inputEmail4" name="datanascita" value="'.$riga["datanascita"].'">';
echo '<label for="inputPassword4">codfiscale</label>';
echo '<input type="text" class="form-control" id="inputPassword4" placeholder="cod: xxxxxx00x00x0000" name="codfisc" value="'.$riga["codfisc"].'">';
echo '</div>';
echo '</div>';
echo '<input type="hidden" name="pag" value="mod_prof_ut1">';
echo '';
echo '<hr>';
echo '<button type="submit" class="btn btn-primary">Conferma</button>';
echo '</form>';



  echo '</div>';
  echo '</div>';
  echo '';

closer();
}

if ($pag=='mod_prof_ut1'  && $_SESSION["entita"]==2)
{
  $nomeu=filter_input(INPUT_GET,'nomeu',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $cognomeu=filter_input(INPUT_GET,'cognomeu',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $email=filter_input(INPUT_GET,'email',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $username=filter_input(INPUT_GET,'username',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $eta=filter_input(INPUT_GET,'eta',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $citta=filter_input(INPUT_GET,'citta',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $nf=filter_input(INPUT_GET,'nf',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $sesso=filter_input(INPUT_GET,'sesso',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $datanascita=filter_input(INPUT_GET,'datanascita',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $codfisc=filter_input(INPUT_GET,'codfisc',FILTER_SANITIZE_FULL_SPECIAL_CHARS);



    $q = "UPDATE utente SET ";
    $q.= "nomeu='".mysql_real_escape_string($nomeu)."', ";
    $q.= "cognomeu='".mysql_real_escape_string($cognomeu)."', ";
    $q.= "email='".mysql_real_escape_string($email)."', ";
    $q.= "username='".mysql_real_escape_string($username)."', ";
    $q.= "eta='".mysql_real_escape_string($eta)."', ";
    $q.= "citta='".mysql_real_escape_string($citta)."', ";
    $q.= "nf='".mysql_real_escape_string($nf)."', ";
    $q.= "sesso='".mysql_real_escape_string($sesso)."', ";
    $q.= "datanascita='".mysql_real_escape_string($datanascita)."', ";
    $q.= "codfisc='".mysql_real_escape_string($codfisc)."' ";
    $q.= "WHERE idut=".$_SESSION["idut"];

    $rq = mysql_query($q) or die(mysql_error());

    $_SESSION["nomeu"] =  $nomeu;
    $_SESSION["cognomeu"] = $cognomeu;

header("Location: index.php");

}
if ($pag=='mod_pass_ut'  && $_SESSION["entita"]==2)
{
  testata_ut();
 navbar_gen();
 echo '<div class="container-fluid" style="margin-top:106px">';
 echo '<div class="row">';
 echo '';
 sidebar_ut();

 echo '<!-- content zone -->';
 echo '<div class="col-md-10" >';

 echo '<div class="container-flush " style="margin-top:10px; margin-bottom:10px;">';
 echo '<h3 class="text-primary">MODIFICA Password</h3>';
 echo '</div>';

 //form
 echo '<form method="POST" action="index.php">';

  echo '<div class="form-row">';

    echo '<div class="form-group col-md-6">';

      echo '<label for="inputPassword4">Inserisci vecchia password</label>';
      echo '<input type="password" class="form-control" id="inputPassword4" name="password">';
    echo '</div>';

    echo '<div class="form-group col-md-6">';

    echo '</div>';
  echo '</div>';

 echo '<hr>';

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

 echo '<input type="hidden" name="caso" value="mod_pass_ut1">';
 echo '';
 echo '<hr>';
 echo '<button type="submit" class="btn btn-primary">Sign in</button>';
 echo '</form>';



 echo '</div>';
 echo '</div>';
 echo '';

 closer();
}
if ($caso=='mod_pass_ut1'  && $_SESSION["entita"]==2)
{
  $password=filter_input(INPUT_POST,'password',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $npassword1=filter_input(INPUT_POST,'npassword1',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $npassword2=filter_input(INPUT_POST,'npassword2',FILTER_SANITIZE_FULL_SPECIAL_CHARS);


  $q="SELECT * FROM utente WHERE idut=".$_SESSION["idut"];
  $rq=mysql_query($q) or die(mysql_error());
  $riga=mysql_fetch_assoc($rq) or die (mysql_error());

  echo $password;
  echo $riga["password"]."ccc";
//if ($password == $riga["password"]) {
  if(password_verify($password,$riga["password"])){
    if($npassword1==$npassword2){

      $p="UPDATE utente SET password='".password_hash($npassword1,PASSWORD_DEFAULT)."' WHERE idut=".$_SESSION["idut"];
      $rp=mysql_query($p) or die (mysql_error());
        echo '<p>Password modificata con successo rieseguire l\'accesso al proprio account</p>';
        echo '<br>';
        echo '<a href="index.php?pag=logout">Vai</a>';
      //header(Location: index.php);
    }
    else {

    echo '<p>Errore: Le nuove password non coincidono: riprovare</p>';
    }

  }
  else {
    echo '<p>Errore: vecchia password non è stata inserita correttamente</p>';
  }


}

 ?>
