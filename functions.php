<?php if ( function_exists( 'register_nav_menu' ) ) {
	register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'first'),
    'secondary' => __( 'Secondary Menu', 'second' ),
 ) );
} ?>