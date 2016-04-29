
<?php while (have_posts()) : the_post(); ?>

  <article <?php post_class(); ?>>

      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>

    <div class="entry-content">
      <?php the_content(); ?>
    </div>
  </article>


<?php endwhile; ?>
