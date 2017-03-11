<?php
// WP_User_Query arguments
$args = array(
	'role'           => 'custom-role',
	'number'         => '10',
	'order'          => 'ASC',
	'orderby'        => 'user_name',
	'count_total'    => true,
	'fields'         => 'all',
);

// The User Query
$user_query = new WP_User_Query( $args );

// The User Loop
if ( ! empty( $user_query->results ) ) {
	foreach ( $user_query->results as $user ) {
		// do something
	}
} else {
	// no users found
}
