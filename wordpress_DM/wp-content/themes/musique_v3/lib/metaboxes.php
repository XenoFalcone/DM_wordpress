<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
 *
 * Be sure to replace all instances of 'yourprefix_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category YourThemeOrPlugin
 * @package  Demo_CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 */

/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */

if ( file_exists(get_template_directory() . '/cmb2/init.php' ) ) {
	require_once get_template_directory() . '/cmb2/init.php';
} elseif ( file_exists( get_template_directory() . '/CMB2/init.php' ) ) {
	require_once get_template_directory() . '/CMB2/init.php';
}

add_action( 'cmb2_admin_init', 'musique_register_artist_social_metabox' );
function musique_register_artist_social_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_musique_artist_social_';

	$cmb_musique_artist_social = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Artist Social Informations', 'musique' ),
		'object_types'  => array( 'artist', )
	) );
	
	$cmb_musique_artist_social->add_field( array(
			'name' => __( 'Facebook ', 'musique' ),
			'id'   => $prefix . 'facebook',
			'type' => 'text_url'
	) );	
	
	$cmb_musique_artist_social->add_field( array(
			'name' => __( 'Twitter ', 'musique' ),
			'id'   => $prefix . 'twitter',
			'type' => 'text_url'
	) );
}

add_action( 'cmb2_admin_init', 'musique_register_artist_options_metabox' );
function musique_register_artist_options_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_musique_artist_options_';

	$cmb_musique_artist_options = new_cmb2_box( array(
			'id'            => $prefix . 'metabox',
			'title'         => __( 'Artist Options', 'musique' ),
			'object_types'  => array( 'artist', )
	) );

	$cmb_musique_artist_options->add_field( array(
			'name'    => __( 'Artist Color', 'musique' ),
			'desc'    => __( 'Select Artist color', 'musique' ),
			'id'      => $prefix . 'artist_color',
			'type'    => 'colorpicker',
			'default' => '#70d628',
	) );
}

add_action( 'cmb2_admin_init', 'musique_register_video_metabox' );
function musique_register_video_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_musique_video_';

	$cmb_musique_video_informations = new_cmb2_box( array(
			'id'            => $prefix . 'metabox',
			'title'         => __( 'Video Informations', 'musique' ),
			'object_types'  => array( 'video', )
	) );

	$cmb_musique_video_informations->add_field( array(
			'name' => __( 'Video Code ', 'musique' ),
			'desc' => __('Enter a youtube, twitter, or instagram URL', 'musique'),
			'id'   => $prefix . 'video',
			'type' => 'oembed'
	) );
	
	$cmb_musique_video_informations->add_field( array(
			'name' => __( 'Music Style', 'musique' ),
			'desc' => __('Music Style of the video', 'musique'),
			'id'   => $prefix . 'style_video',
			'type' => 'taxonomy_select',
			'taxonomy' => 'musique_style'
	) );
	
	$cmb_musique_video_informations->add_field( array(
			'name' => __( 'Artist', 'musique' ),
			'desc' => __('Artist of the video', 'musique'),
			'id'   => $prefix . 'artist_video',
			'type' => 'select',
			'options' => 'get_artists_array'
	) );	
}


