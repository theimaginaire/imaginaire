<?php

// check if the repeater field has rows of data
if( have_rows('sections') ):

 	// loop through the rows of data
    while ( have_rows('sections') ) : the_row();
?>
<?php if(get_sub_field('css_class')=='full-width'): ?>
<section class="full-width hidden-xs">
<div class="container-fluid">
	<div class="row">
	<div class="col-md-12">
		<?php the_sub_field('sec_content'); ?>
	</div>
	</div>
</div>
</section>
<?php else: ?>
<section class="<?php if(get_sub_field('css_class')): the_sub_field('css_class'); else: echo 'default'; endif; ?> hidden-xs">
<div class="row">
<?php if(get_sub_field('img_align')=='left'): ?>
	<div class="col-md-6 bg-img" style="background-image:url(<?php echo get_sub_field('bg_image'); ?>);">

	</div>
	<div class="col-md-6">
		<div class="section-text">
			<?php the_sub_field('sec_content'); ?>
		</div>
	</div> 
<?php else: ?>
	<div class="col-md-6">
		<div class="section-text">
			<?php the_sub_field('sec_content'); ?>
		</div>
	</div> 
	<div class="col-md-6 bg-img" style="background-image:url(<?php echo get_sub_field('bg_image'); ?>);">
	</div>
<?php endif; ?>
</div>
</section>
<?php
	endif;
    endwhile;

else :

    // no rows found

endif;

?>