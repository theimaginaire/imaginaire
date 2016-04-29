<?php

// check if the repeater field has rows of data
if( have_rows('capabilities') ):
	$count = 1;
?>
<div class="row">
<?php
 	// loop through the rows of data
    while ( have_rows('capabilities') ) : the_row();
    if($count==4||$count==8): ?>
?>
	<div class="row">
<?php endif; ?>
<div class="col-md-4">
	<div class="pane">
		<h2><?php if(get_sub_field('link')): ?>
		<a href="<?php the_sub_field('link'); ?>">
		<?php endif; ?>
		<?php the_sub_field('title'); ?><?php if(get_sub_field('link')): ?></a><?php endif; ?></h2>
	</div>
</div>
<?php if($count==3||$count==6): ?>
	</div>
<?php
endif;
	$count++;
    endwhile;
else :
	echo "<h1>no</h1>";
    // no rows found

endif;

?>		