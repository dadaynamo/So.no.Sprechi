<?php
navbar_gen();

echo '';
echo '<div class="container-fluid" style="margin-top:106px">';
  echo '<div class="row">';

  sidebar();

    //central container content
    echo '<div class="col-md-10" >';

      echo '<div class="container-flush " style="margin-top:10px; margin-bottom:10px;">';
        echo '<h3 class="text-primary">Dashboard</h3>';
      echo '</div>';


      echo '<div class="row" style="margin-top:10px; margin-bottom:10px;">';

        echo '<div class="col-lg-3">';
          echo '<div class="card" >';
            echo '<img class="card-img-top" src="img/fotovarie/1.jpg" alt="Card image cap">';
            echo '<div class="card-body">';
              echo '<h5 class="card-title">Solidali</h5>';
              echo '<a href="index.php?pag=sol_list" class="btn btn-primary d-flex justify-content-center">clicca qui</a>';
            echo '</div>';
          echo '</div>';
        echo '</div>';

        echo '<div class="col-lg-3">';
          echo '<div class="card" >';
            echo '<img class="card-img-top" src="img/fotovarie/2.jpg" alt="Card image cap">';
            echo '<div class="card-body">';
              echo '<h5 class="card-title">Utenti</h5>';
              echo '<a href="index.php?pag=ut_list" class="btn btn-primary  d-flex justify-content-center">clicca qui</a>';
            echo '</div>';
          echo '</div>';
        echo '</div>';

        echo '<div class="col-lg-3">';
          echo '<div class="card" >';
            echo '<img class="card-img-top" src="img/fotovarie/3.jpg" alt="Card image cap">';
            echo '<div class="card-body">';
              echo '<h5 class="card-title">Associazioni vol.</h5>';
              echo '<a href="#" class="btn btn-primary  d-flex justify-content-center">clicca qui</a>';
            echo '</div>';
          echo '</div>';
        echo '</div>';

        echo '<div class="col-lg-3">';
          echo '<div class="card" >';
            echo '<img class="card-img-top" src="img/fotovarie/4.jpg" alt="Card image cap">';
            echo '<div class="card-body">';
              echo '<h5 class="card-title">Transazioni</h5>';
              echo '<a href="#" class="btn btn-primary  d-flex justify-content-center">clicca qui</a>';
            echo '</div>';
          echo '</div>';
        echo '</div>';

      echo '</div>';

      echo '<br>';

      echo '<div class="container" style="margin-top:40px">';
        echo '<h3>Utenti da attivare</h3>';
      echo '</div>';


      //tabella utenti da attivare

      //query take utenti inattivi

      $q="SELECT * FROM  utente where attivo='0'";
      $rq=mysql_query($q) or die (mysql_error());
      //echo $q;

      echo '<div class="table-responsive">';
        echo '<table class="table">';
          echo '<caption>Ultimi 5 utenti in attesa di attivazione</caption>';
          echo '<thead>';
            echo '<tr>';
            echo '<th scope="col">#ID</th>';
            echo '<th scope="col">nome</th>';
            echo '<th scope="col">cognome</th>';
                  echo '<th scope="col">vISEE</th>';
            echo '<th scope="col">ISEE</th>';
            echo '<th scope="col">attivo</th>';
            echo '</tr>';
          echo '</thead>';
          echo '<tbody>';
          $i=0;
          while($riga=mysql_fetch_assoc($rq)){
            if($i<5)
            {
              echo '<tr>';
                echo '<th scope="row">'.$riga["idut"].'</th>';
                echo '<td>'.$riga["nomeu"].'</td>';
                echo '<td>'.$riga["cognomeu"].'</td>';
                    echo '<td>'.$riga["visee"].'</td>';
                echo '<td><a href="isee/'.$riga["isee"].'" target="_blank">isee</a></td>';
                echo '<td>'.$riga["attivo"].'<a href="index.php?pag=active_ut_1&idut='.$riga["idut"].'"> attiva</a></td>';
              echo '</tr>';
            }
            $i++;
          }


            echo '<tr>';
              echo '<th ></th>';
              echo '<td></td>';
              echo '<td></td>';
              echo '<td></td>';
              echo '<td></td>';
              echo '<td class=" d-flex justify-content-end"><a type="button" class="btn btn-primary" href="index.php?pag=ut_list_act" >Vedi altro</a></td>';
            echo '</tr>';

          echo '</tbody>';
        echo '</table>';
      echo '</div>';

      //echo '</div>';

      echo '<div class="container" style="margin-top:40px;">';
        echo '<h3>Utility</h3>';
      echo '</div>';

      echo '<div class="container-flush">';
        echo '<div class="d-flex justify-content-around  mb-3">';
          echo '<div class="p-2 "><a type="button" class="btn btn-primary" href="index.php?pag=xml">Xml/Xsd</a></div>';
          echo '<div class="p-2 "><a href="index.php?pag=dopdf" type="button" class="btn btn-primary" target="_blank">Report</a></div>';
          echo '<div class="p-2 "><button type="button" class="btn btn-primary">Pulisci DB</button></div>';
        echo '</div>';
      echo '</div>';

      echo '<footer class="bg-light pb-5" style="margin-top: 100px;">';
        echo '<div class="container text-center">';
          echo '<p><img src="img/logo/logos.png"></p>';
          echo '<p class="font-italic text-muted mb-0">&copy; Copyrights LDPcomputer Tutti i diritti riservati.</p>';
        echo '</div>';
      echo '</footer>';
    echo '</div>';
  echo '</div>';
echo '</div>';

 ?>
