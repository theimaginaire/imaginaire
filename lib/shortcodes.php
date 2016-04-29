<?php 
function button($atts, $content){
	$a = shortcode_atts( array(
        'link' => '',
    ), $atts );
    $link = $a['link'];
	$content = '<a href="'.$link.'" class="btn-primary">'.$content.'</a>';
	return $content;
}
function phone(){
	$phone = get_field('telephone', 'options');
	return $phone;
}
function company(){
	$company = get_field('company', 'options');
	return $company;
}
add_shortcode('company', 'company');
add_shortcode('phone', 'phone');
add_shortcode('button', 'button');
?>