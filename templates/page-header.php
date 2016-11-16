<?php use Roots\Sage\Titles; ?>

<div class="page-header">
  <h1><?= Titles\title(); ?></h1>
  <?php
  if (is_category()) {
      echo category_description();
  }
  ?>
</div>
