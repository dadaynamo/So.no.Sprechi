<?php
function navbar_gen(){
if($pag!=''){
  $type="stycky-top";
}else{
$type="fixed-top";

}


  echo '<nav class="navbar '.$type.' navbar-expand-lg navbar-light bg-light">';
  echo '<img class="navbar-brand" src="img/favicon/favicon_123.jpg">';
  //  echo '<a class="navbar-brand" href="#"><img class="navbar-brand" src="img/favicon/favicon_123.jpg">Navbar</a>';
  echo '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">';
  echo '<span class="navbar-toggler-icon"></span>';
  echo '</button>';
  echo '';
  echo '<div class="collapse navbar-collapse" id="navbarSupportedContent">';
  echo '<ul class="navbar-nav mr-auto">';
  echo '<li class="nav-item active">';
  echo '<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>';
  echo '</li>';
  echo '<li class="nav-item">';
  echo '<a class="nav-link" href="index.php?pag=whous_page">Chi siamo</a>';
  echo '</li>';
  echo '<li class="nav-item">';
  echo '<a class="nav-link" href="index.php?pag=contact_page">Contatti</a>';
  echo '</li>';

  echo '<li class="nav-item">';
  echo '<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Premium</a>';
  echo '</li>';
  echo '</ul>';


  echo '<ul class="navbar-nav">';
  echo '<li class="nav-item mr-sm-2">';

  echo '<li class="nav-item dropdown dropleft">';
  echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
  echo '<i class="fas fa-users"></i>';
  echo '</a>';
  echo '<div class="dropdown-menu" aria-labelledby="navbarDropdown">';
  if(isset($_SESSION["entita"])){


  echo '<a class="dropdown-item" href="index.php?pag=mod_prof_ut">Modifica account utente</a>';

  //echo '<a class="dropdown-item" href="index.php?pag=mod_prof_ut">Modifica account</a>';





      echo '<div class="dropdown-divider"></div>';
    echo '<a class="dropdown-item" href="index.php?pag=logout">logout</a>';

  }
  if(!isset($_SESSION["entita"])){

    echo '<a class="dropdown-item" href="index.php?pag=login">Accedi account</a>';

    echo '<a class="dropdown-item" href="index.php?pag=registrazione">Registrati</a>';
  }

  echo '</div>';
  echo '</li>';
  echo '</li>';
    echo '</ul>';

  echo '</div>';
  echo '</nav>';
}

?>
