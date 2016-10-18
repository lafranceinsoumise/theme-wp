<span class="text-muted">
<time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
dans
<?php
  $categories = get_the_category();

  foreach ($categories as $key => $category) {
?>
<a href="<?= get_category_link($category->cat_ID) ?>">
  <?= $category->name; ?>
</a><?= $key < count($categories) - 1 ? ', ': '' ?>
<?php } ?>
</span>
