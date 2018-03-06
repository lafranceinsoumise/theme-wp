<?php use Roots\Sage\Titles; ?>
<?php if(!is_front_page() && Titles\title()[0] !== '\\') {?>
<div class="<?=(is_front_page())? '' : 'page-header'?>">
  <h1><?= Titles\title(); ?></h1>
  <?php
  if (is_category()) {
      echo category_description();
  }
  ?>
</div>
<?php
}
