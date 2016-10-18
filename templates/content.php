<article <?php post_class(); ?>>
  <div class="content">
    <?php
    if (get_post_type() === 'post' && get_post_format() === 'video') {
        $content = do_shortcode(apply_filters('the_content', get_the_content()));
        $embeds = get_media_embedded_in_content($content);
        if(!empty($embeds)) {
    ?>
        <div class="entry-content-asset">
          <?php echo $embeds[0]; ?>
        </div>
    <?php
        } else if (has_post_thumbnail()) {
            the_post_thumbnail('large');
        }
    } else if (has_post_thumbnail()) {
      the_post_thumbnail('large');
    }
    ?>
    <header>
      <h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-summary">
      <?php the_excerpt(); ?>
    </div>
  </div>
</article>
