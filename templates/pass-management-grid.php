<?php

$blogusers = get_users( array( 'fields' => array( 'display_name' ) ) );
// Array of stdClass objects.
/*foreach ( $blogusers as $user ) {
	echo '<div>' . esc_html( $user->display_name ) . '</div>';
}*/
	


	$redirectString = get_site_url().'/?pass-builder=templates';

	echo get_site_url();
	
	//http://localhost/wordpress/wp-login.php 

?>

<h1> Pass Management Grid </h1>