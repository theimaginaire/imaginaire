<?php use Roots\Sage\Titles; ?>
<?php
$page_id = get_queried_object_id();
if ( has_post_thumbnail( $page_id ) ) :
    $image_array = wp_get_attachment_image_src( get_post_thumbnail_id( $page_id ), 'optional-size' );
    $image = $image_array[0];
    $style = 'style="background-image: url('.$image.');"';
endif;
?>
<div class="page-header" <?php if ( has_post_thumbnail( $page_id ) ) : echo $style; endif; ?>>
<div class="container">
<div class="entry-meta">
<?php if(is_singular('post')): ?>
		  <a class="hidden-xs" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">
		  <?php echo get_avatar( get_the_author_meta('ID'), 100); ?>
		  </a>
<?php endif; ?>
  <h1><?= Titles\title(); ?></h1>
 <?php if(is_singular('post')): ?>
 	<div class="hidden-xs">
  		<?php get_template_part('templates/entry-meta'); ?>
  	</div>
 <?php endif; ?>
</div>
</div>
</div>
