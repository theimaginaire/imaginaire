<?php 
function button($atts, $content){
	$a = shortcode_atts( array(
        'link' => '',
    ), $atts );
    $link = $a['link'];
	$content = '<a href="'.$link.'" class="btn-primary">'.$content.'</a>';
	return $content;
}
add_shortcode('button', 'button');
?>