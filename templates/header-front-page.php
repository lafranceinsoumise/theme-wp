<header class="home-header hidden-print banner">
  <div class="background" style="background-image: url('<?php header_image(); ?>');">
    <div class="container container-menu">
      <div class="row">
        <div class="logo">
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
      </div>
      <div class="row row-menu">
        <div class="menu">
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills nav-stacked']);
          endif;
          ?>
        </div>
        <div class="subheadline">
          <?php bloginfo('description') ?>
        </div>
      </div>
    </div>
  </div>
</header>
