<?php
//navbar_gen();
/*
echo $_SESSION["attivo"];
echo $_SESSION["idut"];
echo $_SESSION["nome"];
echo $_SESSION["cognome"];
echo $_SESSION["tipo"];
echo $_SESSION["passkey"];
*/

if(!isset($_SESSION["passkey"]) && $_SESSION["attivo"]==1)
{
testata_ut();
navbar_gen();

echo '<div class="container-fluid" style="margin-top:106px">';
echo '<div class="row">';
echo '';

sidebar_ut();



  echo '';
  echo '';
  echo '';
  echo '<!-- content zone -->';
  echo '<div class="col-md-10" >';
  echo '';
  echo '';
  echo '';
  if(isset($_SESSION["isee"]))
  {
  echo '<div class="container-flush " style="margin-top:10px; margin-bottom:10px;">';
  echo '<h3 class="text-primary">HOME</h3>';
  echo '</div>';
  echo '';
  echo '<div class="row" style="margin-top:10px; margin-bottom:10px;">';
  echo '<div class="col-md-6">';
  echo '<h5 class="text-primary">Credito</h5>';
  echo '</div>';
  echo '<div class="col-md-6">';
  echo '<div class="progress">';
  echo '<div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '';
  echo '<div class="row" style="margin-top:10px; margin-bottom:10px;">';
  echo '<div class="col-md-4">';
  echo '<div class="card" >';
  echo '<img class="card-img-top" src="img/fotovarie/6.jpg" alt="Card image cap">';
  echo '<div class="card-body">';
  echo '<h5 class="card-title">Consulta Solidali</h5>';
  echo '';
  echo '<a href="index.php?pag=sol_list_ut" class="btn btn-primary d-flex justify-content-center">clicca qui</a>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '<div class="col-md-4">';
  echo '<div class="card" >';
  echo '<img class="card-img-top" src="img/fotovarie/7.jpg" alt="Card image cap">';
  echo '<div class="card-body">';
  echo '<h5 class="card-title">Lista beni</h5>';
  echo '';
  echo '<a href="index.php?pag=beni_list_ut" class="btn btn-primary  d-flex justify-content-center">clicca qui</a>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '<div class="col-md-4">';
  echo '<div class="card" >';
  echo '<img class="card-img-top" src="img/fotovarie/8.jpg" alt="Card image cap">';
  echo '<div class="card-body">';
  echo '<h5 class="card-title">Carrello</h5>';
  echo '';
  echo '<a href="index.php?pag=carrello_list_ut" class="btn btn-primary  d-flex justify-content-center">clicca qui</a>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '';
  echo '</div>';
  echo '<div class="container-flush">';
  echo '<div class="row" style="margin-top:10px; margin-bottom:10px;">';
  echo '<div class="col-md-3">';
  echo '<div class="card" >';
  echo '';
  echo '<div class="card-body">';
  echo '<h5 class="card-title">Messaggio admin</h5>';
  echo '';
  echo '<p>Tutti i diritti sono riservati</p>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '<div class="col-md-9">';
  echo '<div class="card" >';
  echo '';
  echo '<div class="card-body">';
  echo '<h5 class="card-title">Statistiche</h5>';
  echo '<ul class="list-group">';
  echo '<li class="list-group-item">Cras justo odio</li>';
  echo '<li class="list-group-item">Dapibus ac facilisis in</li>';
  echo '<li class="list-group-item">Morbi leo risus</li>';
  echo '<li class="list-group-item">Porta ac consectetur ac</li>';
  echo '<li class="list-group-item">Vestibulum at eros</li>';
  echo '</ul>';
  echo '';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '';
  echo '';

footer_gen();

}

}

else if(!isset($_SESSION["passkey"]) && $_SESSION["attivo"]==0)
{
navbar_gen();
echo '<div style="margin-top:106px">';
echo '<div class="container-flush d-flex justify-content-center">';
echo '<h4 class="p-2">';
echo 'Attenzione: account non accora attivato: <a href="tel:+393911582874">Contatta gli amministratori</a>';
echo '</h4>';
echo '</div>';

echo '</div>';
footer_gen();
}
 ?>
