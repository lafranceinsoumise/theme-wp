<?php use Roots\Sage\Titles; ?>

<div class="page-header">
  <h1><?= Titles\title(); ?></h1>
  <?php
  if (has_post_thumbnail() && !is_category()) {
    the_post_thumbnail('large');
  }
  if (is_category()) {
      echo category_description();
  }
  ?>
</div>
