<?php
// WP_Query arguments
if(get_field('case_category')):

$term = get_field('case_category');
$cat = $term->slug;
$args = array (
	'post_type'              => 'case-study',
	'posts_per_page'		=> '4',
	'orderby'				=> 'menu_order',
	'order'					=> 'ASC',
	'case-category'			=> $cat,
);

else:
$args = array (
	'post_type'              => array( 'case-study' ),
	'posts_per_page'		=> '4',
	'orderby'				=> 'menu_order',
	'order'					=> 'ASC',
);
endif;

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ):
?>
<div class="blocks">
<?php
	$count = 0;
	while ( $query->have_posts() ):
		$query->the_post();
		if($count == 0 || $count==10):
			$class = 'full-block';
			$delay = '2';
		else: 
			$class = 'half-block';
			$delay = $count*3;
		endif;

		$bg = get_field('tile_img');
?>
<a href="<?php the_permalink(); ?>">
<div class="<?php echo $class; ?> animated fadeIn" style="animation-delay: 0.<?php echo $delay; ?>s;">

<div class="bg" style="background-image: url(<?php echo $bg; ?>);">

</div>

	
</div>
</a>
<?php
	$count++;
	endwhile;
?>
<div class="half-block primary animated fadeIn" style="animation-delay: 1.2s;">
	<div class="text">
	<a href="<?php bloginfo('url'); ?>/project-planner/">Get a free quote <i class="fa fa-arrow-right"></i></a>
	</div>
</div>
</div>
<?php
	endif;

// Restore original Post Data
wp_reset_postdata();
?>
