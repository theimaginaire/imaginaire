<article <?php post_class(); ?>>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
    
    <?php
    if ( has_post_thumbnail( $page_id ) ) :
	    $image_array = wp_get_attachment_image_src( get_post_thumbnail_id( $page_id ), 'optional-size' );
	    $image = $image_array[0];
	?>
	<div class="image">
	<img class="img-responsive" src="<?php echo $image; ?>" alt="<?php the_title(); ?>" />
	</div>
	<?php 
	endif;
	?>

  <div class="entry-summary">
    <?php the_excerpt(); ?>
    <p><a href="<?php the_permalink(); ?>">Read more</a>
  </div>
</article>
