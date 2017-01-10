<header class="banner">

  <?php
    global $jlm2017_form_errors;
    global $jlm2017_form_user_email;
    global $jlm2017_form_user_zipcode;
  ?>

  <div class="home-header hidden-print">
    <div class="background" style="background-image: url('<?php echo get_header_image(); ?>'); width: 100%;">
      <div class="container container-menu">
        <div class="row">
          <div class="logo">
            <!-- <img alt="logo orange bleu" src="<?php echo the_custom_logo(); ?>"> -->
            <?php the_custom_logo(); ?>
          </div>
          <!-- <div class="login_button">
            {% if request.logged_in? %}
            <a href="{{ request.current_signup.logout_url }}" class="btn btn-default btn-block">Se déconnecter</a>
            {% else %}
            <a href="/login" class="btn btn-default btn-block">Se connecter</a>
            {% endif %}
          </div> -->
        </div>
        <div class="row row-menu">
          <div class="menu" id="menu-export"></div>
          <script>
            (function() {
              /** SETTINGS **/
              var themeLocation = 'primary_navigation';
              var addBootstrapCSS = true;
              var menu_class = 'nav%20nav-pills%20nav-stacked';
              var container = '';

              var r = new XMLHttpRequest();
              r.open('GET', 'https://actus.jlm2017.fr/?menu_export=1&theme_location='+themeLocation+
              '&menu_class='+menu_class+'&container='+container+
              (addBootstrapCSS?'&bootstrap=1':''),true);
              r.onreadystatechange=function(){if(r.readyState!=4||r.status!=200)return;
              document.getElementById('menu-export').innerHTML = r.responseText;};
              r.send();
            })();
            </script>
          <div class="subheadline">
              <?php bloginfo('description'); ?>
          </div>
        </div>
      </div>
    </div>
    <div class="container container-signup-banner">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 col-sm-10 col-sm-offset-1 col-xs-12 card">
          <div class="row">
            <h3 class="text-center">J'appuie la candidature<br>de Jean-Luc Mélenchon</h3>
            <form id="carte_page_new_signup_form" method="POST" action="">
              <?php echo (strpos($jlm2017_form_errors, 'redirect') !== false) ?
                '<p class="text-center">Oups, une erreure est survenue, veuillez réessayer, merci</p>' : ''
              ?>
              <div class="form-group">
                <input type="hidden" name="action" value="jlm2017_registration_form_valid">
              </div>
              <div class="<?php echo (strpos($jlm2017_form_errors, 'email') !== false) ? 'col-sm-12 form-group has-error has-feedback' : 'col-sm-12 form-group'; ?>">
                <input required="" class="form-control input-lg" id="signup_email" name="signup_email" <?php echo ($jlm2017_form_errors !== '') ? 'value="'.$jlm2017_form_user_email.'" style="background-color:#ef6969;"' : 'placeholder="Adresse Email"' ?> type="email" />
                <?php echo (strpos($jlm2017_form_errors, 'email') !== false) ?
                  '<i class="fa fa-exclamation-triangle" aria-hidden="true" style="float: right; margin-top: -33px; margin-right: 10px; color: red;"></i>
                  <p class="">Addresse email déjà existante dans notre base de donnée</p>' : ''
                ?>
              </div>
              <div class="form-group">
                <div class="<?php echo (strpos($jlm2017_form_errors, 'zipcode') !== false) ? 'col-sm-6 form-group has-error has-feedback' : 'col-sm-6 form-group'; ?>">
                  <input required="" class="form-control input-lg" id="signup_address_zip" name="signup_zipcode" <?php echo ($jlm2017_form_errors !== '') ? 'value="'.$jlm2017_form_user_zipcode.'" style="background-color:#ef6969;"' : 'placeholder="Code Postal"'  ?> type="text" />
                  <?php echo (strpos($jlm2017_form_errors, 'zipcode') !== false) ?
                    '<i class="fa fa-exclamation-triangle" aria-hidden="true" style="float: right; margin-top: -33px; margin-right: 10px; color: red;"></i>
                    <p class="">Code postal erroné</p>' : ''
                  ?>
                </div>
                <div class="col-sm-6">
                  <button type="submit" class="btn btn-block btn-lg btn-primary">J'appuie</button>
                </div>
              </div>

              <script>
                jQuery(function($) {
                  $('#signup_email').on('input', function (){
                    $('#signup_email').css("background-color", "white");
                  });
                  $('#signup_address_zip').on('input', function (){
                    $('#signup_address_zip').css("background-color", "white");
                  });
                });
              </script>
              <div class="col-xs-12 text-center">
                <p>Je recevrai des informations sur la campagne de Jean-Luc Mélenchon</p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
