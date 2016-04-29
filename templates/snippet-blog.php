<?php
// WP_Query arguments
$args = array (
	'post_type'              => array( 'post' ),
	'posts_per_page'         => '3',
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ):
	?>
<section class="blog-snippet">
<div class="container">
<div class="row">
<div class="col-md-12">
<h2>Latest from the blog</h2>
</div>
</div>
<div class="row">
<?php
	while ( $query->have_posts() ):
		$query->the_post();
?>
	<div class="col-md-4">
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<p><?php the_excerpt(); ?></p>
	</div>
<?php
	endwhile;
?>
</div>
</div>
</section>
<?php
else:
	// no posts found
endif;

// Restore original Post Data
wp_reset_postdata();
?>