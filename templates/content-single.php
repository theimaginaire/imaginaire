
<?php while (have_posts()) : the_post(); ?>

  <article <?php post_class(); ?>>

    <div class="entry-content">
      <?php the_content(); ?>
    </div>
  </article>

<div class="nav-links">
<h2>Enjoy this post? Here's some more</h2>
<div class="nav-previous">
<?php previous_post_link(); ?>
</div>
<div class="nav-next">
<?php next_post_link(); ?>
</div>
</div>
<?php endwhile; ?>
