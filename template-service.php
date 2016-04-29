<?php
/**
 * Template Name: Service Page Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'service'); ?>
<?php endwhile; ?>
