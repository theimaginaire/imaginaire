<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');

    ?>
    <div class="cd-main-content">
    <?php
    if(is_front_page() || is_page_template('template-service.php')):
    ?>
      <section class="intro">
      
        <div class="intro-content">
         <div class="container-fluid">
         <div class="row">
            <div class="col-md-8">
                <h1><?php the_field('h1'); ?></h1>
              <h4><?php the_field('subheading'); ?></h4>
            </div>
            <div class="col-md-4">
                <?php kw_sc_logo_carousel('accreditation'); ?>
            </div>


         </div>

              
          </div>
      </div>
      </section>
      <?php get_template_part('templates/blocks'); ?>
    <?php
    endif;
    ?>
    
    <div class="wrap container-fluid">
      <div class="content row">
        <main class="main">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
        <?php if (Setup\display_sidebar()) : ?>
          <aside class="sidebar">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
      </div><!-- /.content -->
    </div><!-- main content -->
    <?php if(is_front_page()):
    get_template_part('templates/home', 'sections'); 
    endif; ?>
    <?php 
    do_action('get_footer');
      get_template_part('templates/footer');
    ?>
    </div>

    <!-- Navigation --> 

    <nav id="cd-lateral-nav">
    <?php
      wp_nav_menu( array(
        'menu' => 'Full Navigation',
        'menu_class' => 'cd-navigation',
    ) ); 
    ?>
    

    <div class="cd-navigation socials">
      <a class="cd-twitter cd-img-replace" href="#0">Twitter</a>
      <a class="cd-github cd-img-replace" href="#0">Git Hub</a>
      <a class="cd-facebook cd-img-replace" href="#0">Facebook</a>
      <a class="cd-google cd-img-replace" href="#0">Google Plus</a>
    </div> <!-- socials -->
  </nav>
    <?php
      wp_footer();
    ?>
  </body>
</html>