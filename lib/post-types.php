<?php 
 
function customize_customtaxonomy_archive_display ( $query ) {
    if (($query->is_main_query()) && (is_tax('case-category') || is_archive('case-study')))
         
    $query->set( 'posts_per_page', '16' );
}
 
//Hook the function
 
add_action( 'pre_get_posts', 'customize_customtaxonomy_archive_display' );