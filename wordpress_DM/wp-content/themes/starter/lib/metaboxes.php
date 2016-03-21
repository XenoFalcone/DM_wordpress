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

/*add_action ( 'cmb2_admin_init', 'sejour_metabox' );
function sejour_metabox() {
	$prefix = '_sejour';

	$cmb_musique_concert_artist = new_cmb2_box ( array (
			'id' => $prefix . 'metabox',
			'title' => __ ( 'Concert Informations', 'musique' ),
			'object_types' => array (
					'concert'
			)
	) );

	$group_field_id = $cmb_musique_concert_artist->add_field ( array (
			'id' => $prefix . 'demo',
			'type' => 'group',
			'description' => __ ( 'Generates reusable form entries', 'cmb2' ),
			'options' => array (
					'group_title' => __ ( 'Entry {#}', 'cmb2' ), // {#} gets replaced by row number
					'add_button' => __ ( 'Add Another Entry', 'cmb2' ),
					'remove_button' => __ ( 'Remove Entry', 'cmb2' ),
					'sortable' => true
			) // beta
			                         // 'closed' => true, // true to have the groups closed by default

	) );

	$cmb_musique_concert_artist->add_group_field ( $group_field_id, array (
			'id' => $prefix . 'artist',
			'name' => __ ( 'Artiste concert', 'musique' ),
			'type' => 'select',
			'options' => 'get_artists_array'
	) );

}*/
