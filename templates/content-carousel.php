
<div class="owl-carousel">
<?php 
// WP_Query arguments
$args = array (
    'post_type'              => array( 'case-study' ),
    'posts_per_page'        => '3',
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
    <div class="carousel-content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <ul class="categories">
                <?php $categories = get_the_terms($query->ID,'case-category');
                if($categories):
                    foreach($categories as $category):
                ?>
                <li>
                <?php
                    echo $category->name;
                ?>
                </li>
                <?php
                    endforeach;
                endif; ?>
                </ul>
                <div class="title">
                    <?php the_excerpt(); ?>
                </div>
        
             <a href="<?php the_permalink(); ?>" class="btn btn-primary">View Case Study <i class="fa fa-long-arrow-right"></i></a>
        </div>
    </div>
    </div>

    
   

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
<div class="clearfix"></div>

