<?php
// Register Custom Taxonomy
function date_sejour_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Date Sejours', 'Taxonomy General Name', 'musique' ),
		'singular_name'              => _x( 'Date Sejour', 'Taxonomy Singular Name', 'musique' ),
		'menu_name'                  => __( 'Date Sejours', 'musique' ),
		'all_items'                  => __( 'All Date Sejours', 'musique' ),
		'parent_item'                => __( 'Parent Date Sejours', 'musique' ),
		'parent_item_colon'          => __( 'Parent Date Sejours:', 'musique' ),
		'new_item_name'              => __( 'New Date Sejour Name', 'musique' ),
		'add_new_item'               => __( 'Add New Date Sejour', 'musique' ),
		'edit_item'                  => __( 'Edit Date Sejour', 'musique' ),
		'update_item'                => __( 'Update Date Sejour', 'musique' ),
		'view_item'                  => __( 'View Item', 'musique' ),
		'separate_items_with_commas' => __( 'Separate Date Sejours with commas', 'musique' ),
		'add_or_remove_items'        => __( 'Add or remove Date Sejours', 'musique' ),
		'choose_from_most_used'      => __( 'Choose from the most used Date Sejours', 'musique' ),
		'popular_items'              => __( 'Popular Date Sejours', 'musique' ),
		'search_items'               => __( 'SearchDate Sejours', 'musique' ),
		'not_found'                  => __( 'Not Date Sejours Found', 'musique' ),
		'no_terms'                   => __( 'No items', 'musique' ),
		'items_list'                 => __( 'Items list', 'musique' ),
		'items_list_navigation'      => __( 'Items list navigation', 'musique' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'date_sejour', array( 'sejour' ), $args );

}
add_action( 'init', 'date_sejour_taxonomy', 0 );

// Register Custom Taxonomy
function sejour_location_taxonomy() {

	$labels = array(
		'name'                       => _x( 'sejour Locations', 'Taxonomy General Name', 'musique' ),
		'singular_name'              => _x( 'sejour Location', 'Taxonomy Singular Name', 'musique' ),
		'menu_name'                  => __( 'sejour Locations', 'musique' ),
		'all_items'                  => __( 'All sejour Locations', 'musique' ),
		'parent_item'                => __( 'Parent sejour Locations', 'musique' ),
		'parent_item_colon'          => __( 'Parent sejour Locations:', 'musique' ),
		'new_item_name'              => __( 'New sejour Location Name', 'musique' ),
		'add_new_item'               => __( 'Add New sejour Location', 'musique' ),
		'edit_item'                  => __( 'Edit sejour Location', 'musique' ),
		'update_item'                => __( 'Update sejour Location', 'musique' ),
		'view_item'                  => __( 'View Item', 'musique' ),
		'separate_items_with_commas' => __( 'Separate sejour Locations with commas', 'musique' ),
		'add_or_remove_items'        => __( 'Add or remove sejour Locations', 'musique' ),
		'choose_from_most_used'      => __( 'Choose from the most used sejour Location', 'musique' ),
		'popular_items'              => __( 'Popular sejour Locations', 'musique' ),
		'search_items'               => __( 'Search sejour Locations', 'musique' ),
		'not_found'                  => __( 'Not sejour Locations Found', 'musique' ),
		'no_terms'                   => __( 'No items', 'musique' ),
		'items_list'                 => __( 'Items list', 'musique' ),
		'items_list_navigation'      => __( 'Items list navigation', 'musique' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'sejour_location', array( 'sejour' ), $args );

}
add_action( 'init', 'sejour_location_taxonomy', 0 );

// Register Custom Taxonomy
function centre_location_taxonomy() {

	$labels = array(
		'name'                       => _x( 'centre Locations', 'Taxonomy General Name', 'musique' ),
		'singular_name'              => _x( 'centre Location', 'Taxonomy Singular Name', 'musique' ),
		'menu_name'                  => __( 'centre Locations', 'musique' ),
		'all_items'                  => __( 'All centre Locations', 'musique' ),
		'parent_item'                => __( 'Parent centre Locations', 'musique' ),
		'parent_item_colon'          => __( 'Parent centre Locations:', 'musique' ),
		'new_item_name'              => __( 'New centre Location Name', 'musique' ),
		'add_new_item'               => __( 'Add New centre Location', 'musique' ),
		'edit_item'                  => __( 'Edit centre Location', 'musique' ),
		'update_item'                => __( 'Update centre Location', 'musique' ),
		'view_item'                  => __( 'View Item', 'musique' ),
		'separate_items_with_commas' => __( 'Separate centre Locations with commas', 'musique' ),
		'add_or_remove_items'        => __( 'Add or remove centre Locations', 'musique' ),
		'choose_from_most_used'      => __( 'Choose from the most used centre Location', 'musique' ),
		'popular_items'              => __( 'Popular centre Locations', 'musique' ),
		'search_items'               => __( 'Search centre Locations', 'musique' ),
		'not_found'                  => __( 'Not centre Locations Found', 'musique' ),
		'no_terms'                   => __( 'No items', 'musique' ),
		'items_list'                 => __( 'Items list', 'musique' ),
		'items_list_navigation'      => __( 'Items list navigation', 'musique' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'centre_location', array( 'centre' ), $args );

}
add_action( 'init', 'centre_location_taxonomy', 0 );
