<?php
/**
 * Template Name: Our Work
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'portfolio'); ?>
<?php endwhile; ?>
