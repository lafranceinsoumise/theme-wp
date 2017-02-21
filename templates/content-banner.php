<div class="row">

  <?php
    global $jlm2017_form_errors;
    global $jlm2017_form_user_email;
    global $jlm2017_form_user_zipcode;
  ?>

  <div class="banner-header hidden-print">
    <div class="background" style="background-image: url('<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url() : get_header_image(); ?>'); width: 100%; height: 100vh;">
      <div class="container container-menu">
        <div class="row">
          <div class="logo col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-4">
            <?php the_custom_logo(); ?>
          </div>
        </div>
        <div class="row row-menu container-signup-banner">
          <div class="menu" style="font-size: x-large" id="menu-export ">
            <?php
              if (has_nav_menu('home_page_left_navigation')) {
                wp_nav_menu( array(
                  'theme_location' => 'home_page_left_navigation',
                  'walker' => new wp_bootstrap_navwalker(),
                  'menu_class' => 'nav nav-pills nav-stacked text-center'
                ));
              }
            ?>
          </div>
          <div class="menu col-sm-push-6" style="font-size: x-large" id="menu-export2">
            <?php
              if (has_nav_menu('home_page_right_navigation')) {
                wp_nav_menu( array(
                  'theme_location' => 'home_page_right_navigation',
                  'walker' => new wp_bootstrap_navwalker(),
                  'menu_class' => 'nav nav-pills nav-stacked text-center'
                ));
              }
            ?>
          </div>
          <div class="col-sm-6 col-xs-12 col-sm-pull-3 card">
            <div class="row">
              <h3 class="text-center">J'appuie la candidature<br>de Jean-Luc Mélenchon</h3>
              <form id="carte_page_new_signup_form" method="POST" action="">
                <?php echo (strpos($jlm2017_form_errors, 'redirect') !== false) ?
                  '<p>Oups, une erreure est survenue, veuillez réessayer plus tard&nbsp;!</p>' : ''
                ?>
                <div class="form-group">
                  <input type="hidden" name="action" value="jlm2017_registration_form_valid">
                </div>
                <div class="col-sm-12 form-group <?= (strpos($jlm2017_form_errors, 'email') !== false) ? 'has-error has-feedback' : ''; ?>">
                <input required="" class="form-control input-lg" id="signup_email" name="signup_email" <?= ($jlm2017_form_errors !== '') ?   'value="'.$jlm2017_form_user_email.'"' : 'placeholder="Adresse email"' ?> type="email" />
                  <?php echo (strpos($jlm2017_form_errors, 'email') !== false) ?
                  '<i class="fa fa-exclamation-triangle" aria-hidden="true" style="float: right; margin-top: -33px; margin-right: 10px;   color: red;"></i>
                    <span class="help-block">Adresse email déjà existante dans la base de donnée.</span>' : ''
                  ?>
                </div>
                <div class="form-group">
                  <div class="col-sm-6 form-group <?= (strpos($jlm2017_form_errors, 'zipcode') !== false) ? 'has-error has-feedback' : ''; ?>">
                  <input required="" class="form-control input-lg" id="signup_address_zip" name="signup_zipcode" <?= ($jlm2017_form_errors   !== '') ? 'value="'.$jlm2017_form_user_zipcode.'"' : 'placeholder="Code Postal"'  ?> type="text" />
                    <?= (strpos($jlm2017_form_errors, 'zipcode') !== false) ?
                    '<i class="fa fa-exclamation-triangle" aria-hidden="true" style="float: right; margin-top: -33px; margin-right: 10px;   color: red;"></i>
                      <span class="help-block">Code postal incorrect.</span>' : ''
                    ?>
                  </div>
                  <div class="col-sm-6">
                    <button type="submit" class="btn btn-block btn-lg btn-primary">J'appuie</button>
                  </div>
                </div>
                <div class="col-xs-12 text-center">
                  <p>Je recevrai des informations sur la campagne de Jean-Luc Mélenchon</p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
