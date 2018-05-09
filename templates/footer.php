<footer class="content-info">
  <?php
    global $jlm2017_form_signup_errors;
    global $jlm2017_form_signup_email;
    global $jlm2017_form_signup_zipcode;
  ?>
  <div class="container container-signup-footer hidden-print">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 col-sm-10 col-sm-offset-1 col-xs-12 card">
        <div class="row">
          <h3 class="text-center">Je rejoins la France Insoumise</h3>
          <form method="POST" action="">
            <?php if (isset($jlm2017_form_signup_errors['form'])) {
                echo '<p>'.$jlm2017_form_signup_errors['form'].'</p>';
            } ?>
            <div class="form-group">
              <input type="hidden" name="action" value="jlm2017_signup_form">
            </div>
            <div class="col-sm-12 form-group <?= isset($jlm2017_form_signup_errors['email']) ? 'has-error has-feedback' : ''; ?>">
              <input required class="form-control input-lg" id="signup_email" name="jlm2017_form_signup_email" value="<?= $jlm2017_form_signup_email ?>" placeholder="Adresse email" type="email" />
              <?php if (isset($jlm2017_form_signup_errors['email'])) { ?>
                <i class="fa fa-exclamation-triangle" aria-hidden="true" style="float: right; margin-top: -33px; margin-right: 10px; color: red;"></i>
                <span class="help-block"><?= $jlm2017_form_signup_errors['email'] ?></span>
              <?php } ?>
            </div>
            <div class="form-group">
              <div class="col-sm-6 form-group <?= isset($jlm2017_form_signup_errors['zipcode']) ? 'has-error has-feedback' : ''; ?>">
                <input required class="form-control input-lg" id="signup_address_zip" name="jlm2017_form_signup_zipcode"  value="<?= $jlm2017_form_signup_zipcode ?>" placeholder="Code Postal" type="text" />
                <?php if (isset($jlm2017_form_signup_errors['zipcode'])) { ?>
                  <i class="fa fa-exclamation-triangle" aria-hidden="true" style="float: right; margin-top: -33px; margin-right: 10px; color: red;"></i>
                  <span class="help-block"><?= $jlm2017_form_signup_errors['zipcode'] ?></span>
                <?php } ?>
              </div>
              <div class="col-sm-6">
                <button type="submit" class="btn btn-block btn-lg btn-primary">Je rejoins</button>
              </div>
            </div>
            <div class="col-xs-12">
              <p>
                  En remplissant ce formulaire, j'accepte que la France Insoumise utilise ces données
                  pour m'envoyer des informations.
              </p>
              <p class="text-right">
                <small>Si vous habitez à l'étranger, <a href="http://agir.lafranceinsoumise.fr/inscription">cliquez ici</a>.</small>
              </p>
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
