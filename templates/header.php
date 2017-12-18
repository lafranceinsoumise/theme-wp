<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<header class="banner">
  <nav class="nav-primary navbar navbar-default navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse" aria-expanded="false">
          Menu <span class="caret"></span>
        </button>
        <?php
          if (has_custom_logo()) {
            the_custom_logo();
          } else { ?>
            <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
              <?php bloginfo('name'); ?>
            </a> <?php
          }
        ?>
      </div>
      <div class="collapse navbar-collapse" id="main-navbar-collapse">
        <?php
        if (has_nav_menu('primary_navigation')) {
          wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'walker' => new wp_bootstrap_navwalker(),
            'menu_class' => 'nav navbar-nav navbar-right'
          ]);
        } else {
        ?>
          <div id="menu-export"></div>
          <script>
          (function() {
            /** SETTINGS **/
            var themeLocation = 'primary_navigation';
            var addBootstrapCSS = true;
            var menu_class = 'nav%20navbar-nav%20navbar-right';
            var container = '';

            var r = new XMLHttpRequest();
            r.open('GET', 'https://lafranceinsoumise.fr/?menu_export=1&theme_location='+themeLocation+
            '&menu_class='+menu_class+'&container='+container+
            (addBootstrapCSS?'&bootstrap=1':''),true);
            r.onreadystatechange=function(){if(r.readyState!=4||r.status!=200)return;
            document.getElementById('menu-export').innerHTML = r.responseText;};
            r.send();
          })();
          </script>
        <?php
        }
        ?>
      </div>
    </div>
  </nav>
  <?php if (Setup\display_secondary_navbar()) : ?>
  <nav class="navbar navbar-secondary">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#supporter-nav-collapse">
          <span class="sr-only">Activer la navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div id="supporter-nav-collapse" class="collapse navbar-collapse">
        <?php
        if (has_nav_menu('secondary_navigation')) :
          wp_nav_menu([
            'theme_location' => 'secondary_navigation',
            'walker' => new wp_bootstrap_navwalker(),
            'menu_class' => 'nav navbar-nav'
          ]);
        endif;
        ?>
        <?php get_search_form(); ?>
      </div>
    </div>
  </nav>
<? endif; ?>
</header>
