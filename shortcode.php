<?php
// Add Shortcode
function amit_shortcode_function( $atts ) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'src' => '',
			'width' => '',
			'height' => '',
		),
		$atts,
		'amit_shortcode'
	);

	// Return custom embed code
	return '<embed 
	         src="' . $atts['src'] . '"
	         width="' . $atts['width'] . '"
	         height="' . $atts['height'] . '"
	         type="application/x-shockwave-flash"
	         allowscriptaccess="always"
	         allowfullscreen="true">';

}
add_shortcode( 'amit_shortcode', 'amit_shortcode_function' );


// Add Double Shortcode
function amit_shortcode_function_double( $atts , $content = null ) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'src' => '',
			'width' => '',
			'height' => '',
		),
		$atts,
		'amit_shortcode_double'
	);

	// Return custom embed code
	return '<embed 
	         src="' . $atts['src'] . '"
	         width="' . $atts['width'] . '"
	         height="' . $atts['height'] . '"
	         type="application/x-shockwave-flash"
	         allowscriptaccess="always"
	         allowfullscreen="true">';

}
add_shortcode( 'amit_shortcode_double', 'amit_shortcode_function_double' );
