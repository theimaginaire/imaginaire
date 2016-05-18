<section class="big-cta">
<div class="container center">
	<?php if(get_field('cta')):
	the_field('cta'); 
	else: ?>
	<p>Did you know we offer a free initial consultation on all new projects?</p>
	<p>Call us today on <?php echo do_shortcode('[phone]'); ?></p>
<?php endif; ?>
</div>
</section>