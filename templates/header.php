<header>
<div class="container-fluid">
<div class="row">
<div class="col-md-3">
    <a id="cd-logo" href="<?php bloginfo('url'); ?>"><img src="<?php the_field('logo', 'options'); ?>" alt="Homepage" class="img-responsive"></a>
</div>
<div class="col-md-8">
<nav id="cd-top-nav" class="pull-right">
<?php
	wp_nav_menu( array(
    'menu' => 'Primary Navigation'
) ); 
?>			
</nav>
</div>
  <a id="cd-menu-trigger" href="#0"><span class="cd-menu-icon"></span></a>

</div>
</div>
</header>
