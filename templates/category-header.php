<?php use Roots\Sage\Titles; ?>
<?php
$page_id = get_queried_object_id();
if ( has_post_thumbnail( $page_id ) ) :
    $image_array = wp_get_attachment_image_src( get_post_thumbnail_id( $page_id ), 'optional-size' );
    $image = $image_array[0];
    $style = 'style="background-image: url('.$image.');"';
endif;
?>
<section class="page-header">
<div class="cat-overlay"></div>
<div class="category-header" <?php if ( has_post_thumbnail( $page_id ) ) : echo $style; endif; ?>>
<div class="container">
<div class="header-info">
  <h1><?= Titles\title(); ?></h1>
 	<ul>
 	<li><a href="<?php bloginfo('url'); ?>/case-study/">All</a></li>
 	<li><a href="<?php bloginfo('url'); ?>/case-category/web-design">Web Design</a></li>
 	<li><a href="<?php bloginfo('url'); ?>/case-category/digital-marketing">Digital Marketing</a></li>
 	<li><a href="<?php bloginfo('url'); ?>/case-category/seo">SEO</a></li>
 	<li><a href="<?php bloginfo('url'); ?>/case-category/ppc">PPC</a></li>
 	</ul>
</div>	
</div>
</div>
</section>
