<?php

// check if the repeater field has rows of data
if( have_rows('sections') ):

 	// loop through the rows of data
    while ( have_rows('sections') ) : the_row();
?>
<section class="<?php if(get_sub_field('css_class')): the_sub_field('css_class'); else: echo 'default'; endif; ?>">
<div class="container">
	<?php the_sub_field('sec_content'); ?>
</div>
</section>
<?php
    endwhile;

else :

    // no rows found

endif;

?>