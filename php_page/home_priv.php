<?php
//entità Sito web
/*
1 Admin sito
2 utente base
3 associazione volonatriato
4 solidale
*/

//&& !isset($_SESSION["idut"])

if ($pag=='' && $caso=='' && isset($_SESSION["entita"]))
{

  testata();
//  navbar_gen();
/*
  echo "home privata utenti";
  echo $_SESSION["idut"];
  echo $_SESSION["nome"];
  echo $_SESSION["cognome"];
  echo $_SESSION["tipo"];
  echo $_SESSION["attivo"];
    echo $_SESSION["passkey"];
*/
  if($_SESSION["entita"]==1){
//admin
    include("php_page/home_priv_admin.php");
  }
  else if($_SESSION["entita"]==2)
  {
//privato
    include("php_page/home_priv_ut.php");
  }
  else if($_SESSION["entita"]==3){
//associazione
    include("php_page/home_priv_ass.php");
  }
  else if($_SESSION["entita"]==4){
//solidale
    include("php_page/home_priv_sol.php");
  }
  else {
    echo 'Errore irreparabile';
    echo '<a href="index.php?pag=logout">Torna indietro</a>';
  }
  closer();
}


?>
