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
                <?php if(is_front_page()): kw_sc_logo_carousel('accreditation'); endif; ?>
            </div>


         </div>

              
          </div>
      </div>
      </section>

      <?php 
      if(is_front_page() || is_page_template('template-service.php')):
        get_template_part('templates/blocks');
      endif;
      ?>
    <?php
    endif;
    ?>
    <?php if(is_home() || is_singular('post') || is_category() ||is_page_template('template-info.php')):
        get_template_part('templates/page', 'header');
      elseif(is_tax('case-category') || is_archive('case-study')):
        get_template_part('templates/category', 'header');
      elseif(is_singular('case-study')):
        get_template_part('templates/case', 'header');
      endif; ?>
    <?php if(is_home()||is_singular('post')||is_page_template('template-info.php')): ?>
    <div class="wrap container">
  <?php else: ?>
    <div class="wrap container-fluid">
  <?php endif; ?>
      <div class="content row">
        <?php if(is_tax('case-category') || is_archive('case-study')): ?>
        <main class="category-main">
        <?php else: ?>
        <main class="main">
      <?php endif; ?>
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
        <?php if (Setup\display_sidebar()) : ?>
          <aside class="sidebar">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
      </div><!-- /.content -->
</div>

    <?php if(is_front_page()):
    get_template_part('templates/home', 'sections'); 
    endif; ?>
    <?php if(is_page_template('template-service.php')): 
    get_template_part('templates/sections', 'service');
    elseif(is_page_template('template-info.php')):
      get_template_part('templates/sections', 'info');
    elseif(is_singular('case-study')):
      get_template_part('templates/content', 'sections');
      get_template_part('templates/case', 'testimonial');
      get_template_part('templates/content', 'bigcta');
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
