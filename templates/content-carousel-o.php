<div class="owl-carousel">
<div>Test</div>


<?php 
// WP_Query arguments
$args = array (
    'post_type'              => array( 'case-study' ),
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ):
    while ( $query->have_posts() ):
        $query->the_post();
    $thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, true);
    $img_url = $thumb_url_array[0];
?>
<div class="item" style="background-image:url(<?php echo $img_url; ?>);">
    <div class="overlay"></div>
    <div class="content">
    <?php the_title(); ?>
    </div>
</div>
<?php
    endwhile;
    else:
    // no posts found
endif;

// Restore original Post Data
wp_reset_postdata();
?>
</div><!-- #owl-carousel -->

