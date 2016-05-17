<?php

// check if the repeater field has rows of data
if( have_rows('process') ):

 	// loop through the rows of data
    while ( have_rows('process') ) : the_row();
?>
<section class="<?php if(get_sub_field('css_class')): the_sub_field('css_class'); else: echo 'default'; endif; ?>">
<div class="container">
	<?php the_sub_field('process_description'); ?>
</div>
</section>
<?php
    endwhile;

else :

    // no rows found

endif;

?>