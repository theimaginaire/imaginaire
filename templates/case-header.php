<?php use Roots\Sage\Titles; ?>
<?php
$page_id = get_queried_object_id();
if ( has_post_thumbnail( $page_id ) ) :
    $image_array = wp_get_attachment_image_src( get_post_thumbnail_id( $page_id ), 'optional-size' );
    $image = $image_array[0];
    $style = 'style="background-image: url('.$image.');"';
endif;
?>
<div class="case-header" <?php if ( has_post_thumbnail( $page_id ) ) : echo $style; endif; ?>>
<div class="container">
<div class="header-info">
  <h1><?= Titles\title(); ?></h1>
 	<ul>
 	<li><a href="<?php the_field('url'); ?>" target="_blank">View Live Website</a></li>
 	</ul>
</div>	
</div>
</div>
</section>
