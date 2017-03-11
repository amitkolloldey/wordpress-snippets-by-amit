<?php
// WP_Term_Query arguments
$args = array(
	'taxonomy'               => array( 'tags' ),
	'name'                   => array( 'men', 'women' ),
	'slug'                   => array( 'men', 'women' ),
);

// The Term Query
$term_query = new WP_Term_Query( $args );
