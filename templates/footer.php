<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3>Company Information</h2>
          <div class="schema" itemscope itemtype="http://schema.org/LocalBusiness">
             <span itemprop="name">The Imaginaire Online Ltd,</span>
             <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
               <span itemprop="streetAddress">15 Grove Avenue,</span>
               <span itemprop="addressLocality">Nottingham,</span>
               <span itemprop="addressRegion">Nottinghamshire,</span>
               <span itemprop="postalCode">NG9 4ED</span>
             </div>
             <span itemprop="telephone">0115 971 8908</span>
          </div>
          <p>Company Registration: 000000</p>
          <p>VAT Number: 0000000</p>
      </div>
      <div class="col-md-3">
      <h3>Our Services</h3>
          <?php wp_nav_menu( array(
                  'menu' => 'Services'
          ) ); ?>
      </div>
      <div class="col-md-3">
      <h3>Information</h3>
          <?php wp_nav_menu( array(
                  'menu' => 'Info'
          ) ); ?>
      </div>
    </div>
   	<div class="row">
   		<div class="col-md-3">
   			<a href="<?php bloginfo('url'); ?>"><img src="<?php the_field('small_logo', 'options'); ?>" alt="Imaginaire Web Design &amp; Digital Marketing" /></a>
   		</div>
   		<div class="col-md-6">
   			<p class="center">&copy; <?php echo date('Y'); ?> All rights reserved, The Imaginaire Online Ltd</p>
   		</div>
   		<div class="col-md-3">
   		<p class="pull-right">
   			<a href="<?php the_field('facebook', 'options'); ?>"><i class="fa fa-facebook"></i></a>
   			<a href="<?php the_field('google', 'options'); ?>"><i class="fa fa-google-plus"></i></a>
   			<a href="<?php the_field('twitter', 'options'); ?>"><i class="fa fa-twitter"></i></a>
   			<a href="<?php the_field('linked_in', 'options'); ?>"><i class="fa fa-linkedin"></i></a>
   			<a href="<?php bloginfo('url'); ?>/contact-us/"><i class="fa fa-envelope-o"></i></a>
   		</p>
   		</div>
   	</div>
  </div>
</footer>
