<?php
// WP_Query arguments
if(get_field('page-cat')):
	$category = get_field('page-cat');
else: 
	$category = '';
endif;
$args = array (
	'post_type'              => array( 'testimonial' ),
	'testimonial-category'	=> $category,
	'posts_per_page'         => '1',
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ):
?>
<section class="testimonial">
<div class="container">
	<div class="row">
		<div class="col-md-12">
		
		<?php
			while ( $query->have_posts() ):
				$query->the_post();
				// Logic
				$linktype = get_field('website_link');
				if($linktype=='web'):
					$link = get_field('url');
				elseif($linktype=='case'):
					$link = get_field('case_link');

				endif;
			
		?>
		<p><?php the_content(); ?></p>
		<p class="meta">
		<?php the_field('contact'); ?>, <a href="<?php echo $link; ?>"><?php the_title(); ?></a>
		</p>
		<?php
				// do something
			endwhile;
		?>
		</div>
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