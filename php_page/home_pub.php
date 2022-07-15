<?php
//&& !isset($_SESSION["idut"])
if ($pag=='' && $caso=='' && !isset($_SESSION["entita"]))
{
testata();

navbar_gen();

//carosello
echo '<div style="margin-top:106px">';
echo '<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">';
echo '<ol class="carousel-indicators">';
echo '<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>';
echo '<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>';
echo '<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>';
echo '</ol>';
echo '<div class="carousel-inner">';
echo '<div class="carousel-item active">';
echo '<img class="d-block w-100" src="img/hero/1.jpg" alt="First slide">';
echo '</div>';
echo '<div class="carousel-item">';
echo '<img class="d-block w-100" src="img/hero/2.jpg" alt="Second slide">';
echo '</div>';
echo '<div class="carousel-item">';
echo '<img class="d-block w-100" src="img/hero/3.jpg" alt="Third slide">';
echo '</div>';
echo '</div>';
echo '<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">';
echo '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
echo '<span class="sr-only">Previous</span>';
echo '</a>';
echo '<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">';
echo '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
echo '<span class="sr-only">Next</span>';
echo '</a>';
echo '</div>';
echo '<br>';
echo '<div>';

//* *********************************************************************************************************
/*

echo '<div class="row">';
echo '<div class="col-sm-6">';
  echo '<div class="card">';
    echo '<div class="card-body">';
      echo '<h5 class="card-title">Special title treatment</h5>';
      echo '<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>';
      echo '<a href="#" class="btn btn-primary">Go somewhere</a>';
    echo '</div>';
  echo '</div>';
echo '</div>';
echo '<div class="col-sm-6">';
echo '<div class="card">';
echo '<div class="card-body">';
echo '<h5 class="card-title">Special title treatment</h5>';
echo '<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>';
echo '<a href="#" class="btn btn-primary">Go somewhere</a>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<br>'."\n";
*/
//*********************************************************************************************************************************************************************

echo '<br>';
echo '<div class="container marketing">';

  echo '<!-- Three columns of text below the carousel -->';
  echo '<div class="row">';
    echo '<div class="col-lg-4">';
      echo '<img class="rounded-circle" src="img/fotovarie/plag1.jpg" alt="Generic placeholder image" width="140" height="140">';
      echo '<h2>Registrati</h2>';
      echo '<p>Partecipa all\'iniziativa registrandoti direttamente dal tuo dispositivo o in uno dei nostri Solidali gratuitamente. Attivazione servizio rapido e sicuro</p>';
      //echo '<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>';
    echo '</div><!-- /.col-lg-4 -->';

    echo '<div class="col-lg-4">';
      echo '<img class="rounded-circle" src="img/fotovarie/plag2.jpg" alt="Generic placeholder image" width="140" height="140">';
      echo '<h2>Prenota</h2>';
      echo '<p>Prenota e richiedi i beni di cui hai bisogno offerti dai nostri solidali con crediti gratuiti giornalieri e partecipa alle graduatorie</p>';


    echo '</div><!-- /.col-lg-4 -->';

    echo '<div class="col-lg-4">';
      echo '<img class="rounded-circle" src="img/fotovarie/plag3.jpg" alt="Generic placeholder image" width="140" height="140">';
      echo '<h2>Ritira</h2>';
      echo '<p>Controlla a fine giornata se sei rientrato nella graduatoria e se hai diritto di ritirare i beni che hai prenotato</p>';
    //  echo '<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>';
    echo '</div><!-- /.col-lg-4 -->';
  echo '</div><!-- /.row -->';
echo '</div>';
//***********************************************************************************************************

echo '<br>';
echo '<div class="container">';
echo '<h4>Gli ultimi arrivati<h4>'."\n";
echo '</div>';
echo '<br>';


//echo '<div class="container my-4">';
//wrapper inizio
echo '<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">';

//indicatori
echo '<ol class="carousel-indicators">';
  echo '<li data-target="#multi-item-example" data-slide-to="0" class="active">d</li>';
  echo '<li data-target="#multi-item-example" data-slide-to="1">d</li>';
echo '</ol>';
echo '<!--/.Indicators-->';

echo '<!--Slides-->';
echo '<div class="carousel-inner" role="listbox">';

echo '<!--First slide-->';
echo '<div class="carousel-item active">';

echo '<div class="col-md-3" style="float:left">';
  echo '<div class="card mb-2">';
    echo '<img class="card-img-top"';
    echo 'src="img/fotovarie/8.jpg" alt="Card image cap">';
    echo '<div class="card-body">';
      echo '<h4 class="card-title">Card title 1</h4>';
      echo '<p class="card-text">Some quick example text to build on the card title and make up the bulk of the  content.</p>';
    echo '</div>';
  echo '</div>';
echo '</div>';

echo '<div class="col-md-3" style="float:left">';
echo '<div class="card mb-2">';
echo '<img class="card-img-top"';
echo 'src="img/fotovarie/7.jpg" alt="Card image cap">';
echo '<div class="card-body">';
echo '<h4 class="card-title">Card title</h4>';
echo '<p class="card-text">Some quick example text to build on the card title and make up the bulk of the';
echo 'card\'s content.</p>';
echo '<a class="btn btn-primary">Button</a>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '';
echo '<div class="col-md-3" style="float:left">';
echo '<div class="card mb-2">';
echo '<img class="card-img-top"';
echo 'src="img/fotovarie/6.jpg" alt="Card image cap">';
echo '<div class="card-body">';
echo '<h4 class="card-title">Card title</h4>';
echo '<p class="card-text">Some quick example text to build on the card title and make up the bulk of the';
echo 'card\'s content.</p>';
echo '<a class="btn btn-primary">Button</a>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '';
echo '<div class="col-md-3" style="float:left">';
echo '<div class="card mb-2">';
echo '<img class="card-img-top"';
echo 'src="img/fotovarie/5.jpg" alt="Card image cap">';
echo '<div class="card-body">';
echo '<h4 class="card-title">Card title</h4>';
echo '<p class="card-text">Some quick example text to build on the card title and make up the bulk of the';
echo 'card\'s content.</p>';
echo '<a class="btn btn-primary">Button</a>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '';
echo '</div>';
echo '<!--/.First slide-->';
echo '';
echo '<!--Second slide-->';
echo '<div class="carousel-item">';
echo '';
echo '<div class="col-md-3" style="float:left">';
echo '<div class="card mb-2">';
echo '<img class="card-img-top"';
echo 'src="img/fotovarie/4.jpg" alt="Card image cap">';
echo '<div class="card-body">';
echo '<h4 class="card-title">Card title</h4>';
echo '<p class="card-text">Some quick example text to build on the card title and make up the bulk of the';
echo 'card\'s content.</p>';
echo '<a class="btn btn-primary">Button</a>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '';
echo '<div class="col-md-3" style="float:left">';
echo '<div class="card mb-2">';
echo '<img class="card-img-top"';
echo 'src="img/fotovarie/3.jpg" alt="Card image cap">';
echo '<div class="card-body">';
echo '<h4 class="card-title">Card title</h4>';
echo '<p class="card-text">Some quick example text to build on the card title and make up the bulk of the';
echo 'card\'s content.</p>';
echo '<a class="btn btn-primary">Button</a>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '';
echo '<div class="col-md-3" style="float:left">';
echo '<div class="card mb-2">';
echo '<img class="card-img-top"';
echo 'src="img/fotovarie/2.jpg" alt="Card image cap">';
echo '<div class="card-body">';
echo '<h4 class="card-title">Card title</h4>';
echo '<p class="card-text">Some quick example text to build on the card title and make up the bulk of the';
echo 'card\'s content.</p>';
echo '<a class="btn btn-primary">Button</a>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '';
echo '<div class="col-md-3" style="float:left">';
echo '<div class="card mb-2">';
echo '<img class="card-img-top"';
echo 'src="img/fotovarie/1.jpg" alt="Card image cap">';
echo '<div class="card-body">';
echo '<h4 class="card-title">Card title</h4>';
echo '<p class="card-text">Some quick example text to build on the card title and make up the bulk of the';
echo 'card\'s content.</p>';
echo '<a class="btn btn-primary">Button</a>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '';
echo '</div>';
echo '<!--/.Second slide-->';
echo '';
echo '';
echo '';
echo '</div>';
echo '<!--/.Slides-->';
echo '';

//echo '</div>';
echo '<!--/.Carousel Wrapper-->';

//controls
echo '<div class="container">';
  echo '<div class="row justify-content-center">';
    echo '<p ><a class="btn btn-primary btn-floating  " href="#multi-item-example" data-slide="prev"><i class="fas fa-arrow-left"></i></a> ';
    echo '<a class="btn btn-primary btn-floating  " href="#multi-item-example" data-slide="next"><i class="fas fa-arrow-right"></i></a></p>';
  echo '</div>';
echo '</div>';




  //***********************************************************************************************************************************************************************
  echo '<!-- START THE FEATURETTES -->';

  echo '<hr class="featurette-divider">';
echo '<div class="container marketing">';
  echo '<div class="row featurette">';
    echo '<div class="col-md-7">';
      echo '<h2 class="featurette-heading">First featurette heading. <span class="text-muted">It\'ll blow your mind.</span></h2>';
      echo '<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>';
    echo '</div>';

    echo '<div class="col-md-5">';
      echo '<img class="featurette-image img-fluid mx-auto" src="img/fotovarie/plag5.jpg" data-src="holder.js/500x500/auto" alt="Generic placeholder image">';
    echo '</div>';
  echo '</div>';

  echo '<hr class="featurette-divider">';

  echo '<div class="row featurette">';
    echo '<div class="col-md-7 order-md-2">';
      echo '<h2 class="featurette-heading">Oh yeah, it\'s that good. <span class="text-muted">See for yourself.</span></h2>';
      echo '<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>';
    echo '</div>';
    echo '<div class="col-md-5 order-md-1">';
      echo '<img class="featurette-image img-fluid mx-auto" src="img/fotovarie/plag4.jpg" data-src="holder.js/500x500/auto" alt="Generic placeholder image">';
    echo '</div>';
  echo '</div>';

  echo '<hr class="featurette-divider">';

  echo '<div class="row featurette">';
    echo '<div class="col-md-7">';
      echo '<h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>';
      echo '<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>';
    echo '</div>';
    echo '<div class="col-md-5">';
      echo '<img class="featurette-image img-fluid mx-auto" src="img/fotovarie/plag6.jpg" data-src="holder.js/500x500/auto" alt="Generic placeholder image">';
    echo '</div>';
  echo '</div>';
  echo '<hr class="featurette-divider">';
  echo '<!-- /END THE FEATURETTES -->';
echo '</div>';


//**************************************************************************************************************
//toast da pulsante
/*
echo '<div class="container">'."\n";
echo '<button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>';
  echo '<p><button type="button" class="btn btn-secondary" id="liveToastBtn">Show live toast</button></p>';
echo '</div>';
*/
echo '<div class="position-fixed bottom-0 right-0 p-3" style="z-index: 5; right: 0; bottom: 0;">';
echo '<div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2000">';
echo '<div class="toast-header">';
echo '<img src="img/toast/toast.jpg" class="rounded mr-2" alt="logo">';
echo '<strong class="mr-auto">So.No.Sprechi</strong>';
echo '<small></small>';
echo '<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">';
echo '<span aria-hidden="true">&times;</span>';
echo '</button>';
echo '</div>';
echo '<div class="toast-body">';
echo 'Accedi per accedere ai contenuti';
echo '</div>';
echo '</div>';
echo '</div>';
//*******************************************************************************************************************************


footer_gen();
closer();
}

 ?>
