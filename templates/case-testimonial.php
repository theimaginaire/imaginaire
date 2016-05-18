<?php if(get_field('testimonial')): ?>
<section class="testimonial">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php the_field('testimonial'); ?>
		</div>
	</div>
</div>
</section>
<?php endif; ?>