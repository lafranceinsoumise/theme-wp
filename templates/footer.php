<footer class="content-info">
  <?php
    global $jlm2017_form_errors;
    global $jlm2017_form_user_email;
    global $jlm2017_form_user_zipcode;
  ?>
  <div class="container container-signup-footer hidden-print">
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
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
</footer>
