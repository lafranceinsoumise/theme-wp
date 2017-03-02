<?php
/**
 * Template Name: Banner (No content)
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content', 'banner'); ?>
<?php endwhile; ?>
