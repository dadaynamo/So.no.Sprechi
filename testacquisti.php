<?php
/*
Login

$punteggio = assegnapunteggio();

$q=update utente set punteggio= $punteggio;
$_SESSION["punteggio"]  = $punteggio;
*/

function assegnapunteggio{

//calcolo isee
if(visee<13000){
$credito=$credito+100;
}
else if(visee>=13000 $$ visee<30000){

$credito=$credito+80;

}
else if(visee>=30000 $$ visee<50000){

$credito=$credito+60;

}else if(visee>=50000 $$ visee<85000){
$credito=$credito+40;


}else if(visee>=85000){


  $credito=$credito+20;
}

//numero nf

if(nf=0){
$credito=$credito+100;
}
else if(nf=1){

$credito=$credito+200;

}
else if(nf=2){

$credito=$credito+300;

}
else if(nf=3){

$credito=$credito+400;

}
else if(nf>3){

$credito=$credito+500;

}


if(tipo_ut !=0)
{
  select assvol inner joi utente on ...  idut =[idut]
  $n=mysql num rows
  $n=$n*2;
  $credito=$credito+$n;
}

$data1 = date_create('2017-04-13');
$data2 = date_create('2017-04-15');
$interval = date_diff($data1, $data2);
echo $interval->format('%R%d giorni');

if ($interval <3)
{

$credito=$credito-(200*$interval);

}



  return punteggio;}
 ?>
