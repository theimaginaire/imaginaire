<?php
/**
 * Template Name: Information Page Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'service'); ?>
<?php endwhile; ?>
