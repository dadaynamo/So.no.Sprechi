<?php

if($pag=='contact_page'){
testata_cont();
navbar_gen();

echo '<div style="margin-top:106px">';

echo '<div class="row" id="contatti">';
echo '<div class="container mt-5" >';
echo '';
echo '<div class="row" style="height:550px;">';
echo '<div class="col-md-6 maps" >';
echo '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2947.91229614923!2d14.16819561499819!3d42.3657083427383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1331ac1f42e26eb1%3A0x2f52ced1e3f6bdf!2sVia%20Sallustio%2C%203%2C%2066100%20Chieti%20CH%2C%20Italia!5e0!3m2!1sit!2sau!4v1620463272112!5m2!1sit!2sau" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>';
echo '</div>';
echo '<div class="col-md-6">';
echo '<h2 class="text-uppercase mt-3 font-weight-bold text-black">CONTATTACI</h2>';
echo '<form action="">';
echo '<div class="row">';
echo '<div class="col-lg-6">';
echo '<div class="form-group">';
echo '<input type="text" class="form-control mt-2" placeholder="Nome/Società" required>';
echo '</div>';
echo '</div>';
echo '<div class="col-lg-6">';
echo '<div class="form-group">';
echo '<input type="text" class="form-control mt-2" placeholder="Oggetto" required>';
echo '</div>';
echo '</div>';
echo '<div class="col-lg-6">';
echo '<div class="form-group">';
echo '<input type="email" class="form-control mt-2" placeholder="Email" required>';
echo '</div>';
echo '</div>';
echo '<div class="col-lg-6">';
echo '<div class="form-group">';
echo '<input type="number" class="form-control mt-2" placeholder="Telefono" required>';
echo '</div>';
echo '</div>';
echo '<div class="col-12">';
echo '<div class="form-group">';
echo '<textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Inserisci testo" rows="3" required></textarea>';
echo '</div>';
echo '</div>';
echo '<div class="col-12">';
echo '<div class="form-group">';
echo '<div class="form-check">';
echo '<input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>';
echo '<label class="form-check-label" for="invalidCheck2">';
echo 'Accetta le condizioni';
echo '</label>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="col-12">';
echo '<button class="btn btn-primary" type="submit">Invia</button>';
echo '</div>';
echo '</div>';
echo '</form>';
echo '<div class="text-black">';
echo '<h2 class="text-uppercase mt-4 font-weight-bold ">dove siamo</h2>';

echo '<i class="fas fa-phone mt-3"></i> <a href="tel:+" style="color:#000;">(+39) 3911582874</a><br>';
echo '<i class="fa fa-envelope mt-3"></i> <a href="" style="color:#000;">dadaymatti@gmail.com</a><br>';
echo '<i class="fa fa-envelope mt-3"></i> <a href="" style="color:#000;">ldpcomputeramm@gmail.com</a><br>';
echo '<i class="fas fa-globe mt-3"></i> Via Sallustio, 3, 66100 Chieti<br>';

echo '<div class="my-4">';
echo '<a href=""><i class="fab fa-facebook-square fa-3x pr-4"></i></a>';
echo '<a href=""><i class="fab fa-instagram-square fa-3x pr-4"></i></a>';
echo '<a href=""><i class="fab fa-youtube-square fa-3x pr-4"></i></a>';
echo '<a href=""><i class="fab fa-linkedin fa-3x"></i></a>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '';
echo '</div>';
echo '</div>';
echo '</div>';
echo '';
echo '<div>';
footer_gen();
closer();
}
?>
