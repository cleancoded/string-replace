<?php

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

$delete_settings = ( get_option('cleancoded_strrep_settings_delsettuninst') == 'on' ) ? true : false;

if( $delete_settings ) {
	delete_option( 'cleancoded_strrep_version' );
	delete_option( 'cleancoded_strrep_settings_enable' );
	delete_option( 'cleancoded_strrep_settings_enable_on_admin' );
	delete_option( 'cleancoded_strrep_settings_delsettuninst' );
	delete_option( 'cleancoded_strrep_settings_replacesets' );
}
