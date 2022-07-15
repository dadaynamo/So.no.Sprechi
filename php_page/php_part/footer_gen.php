<?php
function footer_gen(){

  echo '<footer class="new_footer_area bg_color">';
    echo '<div class="new_footer_top">';
      echo '<div class="container">';
        echo '<div class="row">';

          echo '<div class="col-lg-3 col-md-6">';
            echo '<div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">';
              echo '<h3 class="f-title f_600 t_color f_size_18">Resta Aggiornato</h3>';
              echo '<p>Non perderti nessuna offerta iscrivendoti alla nostra newsletter!</p>';
              echo '<form action="#" class="f_subscribe_two mailchimp" method="post" novalidate="true" _lpchecked="1">';
                echo '<input type="text" name="emailnewsletter" class="form-control memail" placeholder="Inserisci Email">';
                echo '<button class="btn btn_get btn_get_two" type="submit">Subscribe</button>';
                echo '<p class="mchimp-errmessage" style="display: none;"></p>';
                echo '<p class="mchimp-sucmessage" style="display: none;"></p>';
              echo '</form>';
            echo '</div>';
          echo '</div>';

          echo '<div class="col-lg-3 col-md-6">';
            echo '<div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">';
              echo '<h3 class="f-title f_600 t_color f_size_18">Download</h3>';
              echo '<ul class="list-unstyled f_list">';
                echo '<li><a href="#">Company</a></li>';
                echo '<li><a href="#">Android App</a></li>';
                echo '<li><a href="#">ios App</a></li>';
                echo '<li><a href="#">Desktop</a></li>';
                echo '<li><a href="#">Projects</a></li>';
                echo '<li><a href="#">My tasks</a></li>';
              echo '</ul>';
            echo '</div>';
          echo '</div>';

          echo '<div class="col-lg-3 col-md-6">';
            echo '<div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">';
              echo '<h3 class="f-title f_600 t_color f_size_18">Help</h3>';
              echo '<ul class="list-unstyled f_list">';
              echo '<li><a href="#">FAQ</a></li>';
              echo '<li><a href="#">Term &amp; conditions</a></li>';
              echo '<li><a href="#">Reporting</a></li>';
              echo '<li><a href="#">Documentation</a></li>';
              echo '<li><a href="#">Support Policy</a></li>';
              echo '<li><a href="#">Privacy</a></li>';
              echo '</ul>';
            echo '</div>';
          echo '</div>';

          echo '<div class="col-lg-3 col-md-6">';
            echo '<div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">';
              echo '<h3 class="f-title f_600 t_color f_size_18">Seguici sui nostri social !!!</h3>';
                echo '<div class="f_social_icon">';
                  echo '<a href="#" class="fab fa-facebook"></a>';
                  echo '<a href="#" class="fab fa-twitter"></a>';
                  echo '<a href="#" class="fab fa-linkedin"></a>';
                  echo '<a href="#" class="fab fa-pinterest"></a>';
                echo '</div>';
              echo '</div>';
            echo '</div>';
          echo '</div>';

        echo '</div>';

        echo '<div class="footer_bg">';
          echo '<div class="footer_bg_one"></div>';
          echo '<div class="footer_bg_two"></div>';
        echo '</div>';
      echo '</div>';

      echo '<div class="footer_bottom">';
        echo '<div class="container">';
          echo '<div class="row align-items-center">';
            echo '<div class="col-lg-6 col-sm-7">';
              echo '<p class="mb-0 f_400">©LDPcomputer Tutti i diritti sono riservati.</p>';
            echo '</div>';
          echo '<div class="col-lg-6 col-sm-5 text-right">';
            echo '<p>Made by <i class="icon_heart"></i>  <a href="#">Mattia Daday</a></p>';
          echo '</div>';
        echo '</div>';
      echo '</div>';

    echo '</div>';
  echo '</footer>';



}






 ?>
