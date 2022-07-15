<?php
//session_start();
session_start();

//connessioni dbms e database
$conn = mysql_connect('localhost','root','') or die("Errore di connessione");
$db = mysql_select_db('my_dadaymattiasito') or die("errore con la scelta del DB");



//disattivazione notifiche notice
// Report simple running errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);


//filtraggio variabili generali
$pag=filter_input(INPUT_GET,'pag',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$caso=filter_input(INPUT_POST,'caso',FILTER_SANITIZE_FULL_SPECIAL_CHARS);


//include funzioni
include('php_page/funzioni/function.php');

//include php_part
include('php_page/php_part/head_body.php');
include('php_page/php_part/footer_gen.php');
include('php_page/php_part/navbar_gen.php');
include('php_page/php_part/log_gest.php');
include('php_page/php_part/function_pag.php');


//include php_page
include('php_page/pag_sec_admin.php');
include('php_page/pag_sec_ut.php');
include('php_page/log_page.php');
include('php_page/reg_page.php');
include('php_page/home_pub.php');
include('php_page/home_priv.php');

include('php_page/whous.php');
include('php_page/contact.php');


//include('php_page/funzioni/recuperapass.php');
//include('php_page/funzioni/crea_passkey.php');
$close=mysql_close($conn);

//bootstrap 4.6
// https://getbootstrap.com/docs/4.6/getting-started/introduction/

 ?>
