<div class="container">
<div class="center">
<?php the_content(); ?>
</div>
</div>


<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
