<?php

/**
 * @wordpress-plugin
 * Plugin Name:       2 Admin bar plus
 * Plugin URI:        http://easywebdesigntutorials.com/
 * Description:      Based on the plugin Admin bar plus by Kostas Vrouvas
 * Version:           1.0.0
 * Author:            Paal Joachim Romdahl
 * Author URI:        http://easywebdesigntutorials.com/
 */


//* Remove WP logo
add_action( 'admin_bar_menu', 'remove_wp_logo', 999 );

function remove_wp_logo( $wp_admin_bar ) {
	$wp_admin_bar->remove_node( 'wp-logo' );
} 


// Adds links to the site name bar
 add_action( 'admin_bar_menu', 'add_nodes_to_admin_bar',999 );
  function add_nodes_to_admin_bar($wp_admin_bar) {  
  
  global $wp_admin_bar;
  	if ( is_admin() ) {
  		//Empty, we don't need the options on the admin side :)  		
  		} else if ( current_user_can( 'read' ) ) { 				
  				// We're on the front end
  					
  					// Posts  					
  					$wp_admin_bar->add_menu( array(
  						'parent' => 'site-name',
  						'id'     => 'posts',
  						'title'  => __( 'Posts' ) ,
  						'href'   => admin_url('edit.php'),
  						'meta'	=>  array('rel' => 'dashicons-wordpress')
  						
  					) );
  				
  							$wp_admin_bar->add_menu( array(
  								'parent' => 'posts',
  								'id'     => 'posts-all',
  								'title'  => __( 'All Posts' ),
  								'href'   => admin_url('edit.php'),
  							) );
  				
  							$wp_admin_bar->add_menu( array(
  								'parent' => 'posts',
  								'id'     => 'posts-new',
  								'title'  => __( 'Add New' ),
  								'href'   => admin_url('post-new.php'),
  							) );
  				
  							$wp_admin_bar->add_menu( array(
  								'parent' => 'posts',
  								'id'     => 'posts-categories',
  								'title'  => __( 'Categories' ),
  								'href'   => admin_url('edit-tags.php?taxonomy=category'),
  							) );
  				
  							$wp_admin_bar->add_menu( array(
  								'parent' => 'posts',
  								'id'     => 'posts-tags',
  								'title'  => __( 'Tags' ),
  								'href'   => admin_url('edit-tags.php?taxonomy=post_tag'),
  							) );
  				
  					//Media
  					$wp_admin_bar->add_menu( array(
  						'parent' => 'site-name',
  						'id'     => 'media',
  						'title'  => __( 'Media' ),
  						'href'   => admin_url('upload.php'),
  					) );
  				
  							$wp_admin_bar->add_menu( array(
  								'parent' => 'media',
  								'id'     => 'media-library',
  								'title'  => __( 'Library' ),
  								'href'   => admin_url('upload.php'),
  							) );
  				
  							$wp_admin_bar->add_menu( array(
  								'parent' => 'media',
  								'id'     => 'media-new',
  								'title'  => __( 'Add New' ),
  								'href'   => admin_url('media-new.php'),
  							) );
  				
  					// Pages
  					$wp_admin_bar->add_menu( array(
  						'parent' => 'site-name',
  						'id'     => 'pages',
  						'title'  => __( 'Pages' ),
  						'href'   => admin_url('edit.php?post_type=page'),
  					) );
  				
  							$wp_admin_bar->add_menu( array(
  								'parent' => 'pages',
  								'id'     => 'pages-all',
  								'title'  => __( 'All Pages' ),
  								'href'   => admin_url('edit.php?post_type=page'),
  							) );
  				
  							$wp_admin_bar->add_menu( array(
  								'parent' => 'pages',
  								'id'     => 'pages-new',
  								'title'  => __( 'Add New' ),
  								'href'   => admin_url('post-new.php?post_type=page'),
  							) );
  					
  					
  					// Comments - places itself right after the Dashboard link
  						$wp_admin_bar->add_menu( array(
  							'parent' => 'site-name',
  							'id'     => 'comments-options',
  							'title'  => __( 'Comments' ),
  							'href'   => admin_url('edit-comments.php'),
  						) );
  					
  					
  					//* Adds Appearance
  					$wp_admin_bar->add_menu( array(
  								'parent' => 'site-name',
  								'id'     => 'appearance1',
  								'title'  => __( 'Appearance' ),
  								'href'   => admin_url('themes.php'),
  							) );
  						
  							$wp_admin_bar->add_menu( array(
  										'parent' => 'appearance1',
  										'id'     => 'options-appearance',
  										'title'  => __( 'Installed Themes' ),
  										'href'   => admin_url('themes.php'),
  									) );
  								
  							$wp_admin_bar->add_menu( array(
  										'parent' => 'appearance1',
  										'id'     => 'widgets',
  										'title'  => __( 'Widgets' ),
  										'href'   => admin_url('widgets.php'),
  									) );
  											
  							$wp_admin_bar->add_menu( array(
  										'parent' => 'appearance1',
  										'id'     => 'customize-options',
  										'title'  => __( 'Customize' ),
  										'href'   => admin_url('customize.php'),
  									) );
  											
  							$wp_admin_bar->add_menu( array(
  										'parent' => 'appearance1',
  										'id'     => 'menus',
  										'title'  => __( 'Menus' ),
  										'href'   => admin_url('nav-menus.php'),
  									) );
  											
  							$wp_admin_bar->add_menu( array(
  										'parent' => 'appearance1',
  										'id'     => 'header',
  										'title'  => __( 'Header' ),
  										'href'   => admin_url('customize.php?return=%2Fwp-admin%2Fthemes.php&autofocus%5Bcontrol%5D=header_image'),
  									) );
  											
  							$wp_admin_bar->add_menu( array(
  										'parent' => 'appearance1',
  										'id'     => 'background',
  										'title'  => __( 'Background' ),
  										'href'   => admin_url('customize.php?return=%2Fwp-admin%2Fthemes.php&autofocus%5Bcontrol%5D=background_image'),
  									) );
  											
  							$wp_admin_bar->add_menu( array(
  										'parent' => 'appearance1',
  										'id'     => 'editor',
  										'title'  => __( 'Editor' ),
  										'href'   => admin_url('theme-editor.php'),
  									) );
  									
  						
  					// Plugins
  					$wp_admin_bar->add_menu( array(
  						'parent' => 'site-name',
  						'id'     => 'plugins',
  						'title'  => __( 'Plugins' ),
  						'href'   => admin_url('plugins.php'),
  					) );
  				
  							$wp_admin_bar->add_menu( array(
  								'parent' => 'plugins',
  								'id'     => 'plugins-installed',
  								'title'  => __( 'Installed Plugins' ),
  								'href'   => admin_url('plugins.php'),
  							) );
  				
  							$wp_admin_bar->add_menu( array(
  								'parent' => 'plugins',
  								'id'     => 'plugins-new',
  								'title'  => __( 'Add New' ),
  								'href'   => admin_url('plugin-install.php'),
  							) );
  				
  							$wp_admin_bar->add_menu( array(
  								'parent' => 'plugins',
  								'id'     => 'plugins-editor',
  								'title'  => __( 'Editor' ),
  								'href'   => admin_url('plugin-editor.php'),
  							) );
  				
  					// Users
  					$wp_admin_bar->add_menu( array(
  						'parent' => 'site-name',
  						'id'     => 'users',
  						'title'  => __( 'Users' ),
  						'href'   => admin_url('users.php'),
  					) );
  				
  							$wp_admin_bar->add_menu( array(
  								'parent' => 'users',
  								'id'     => 'users-all',
  								'title'  => __( 'All Users' ),
  								'href'   => admin_url('users.php'),
  							) );
  				
  							$wp_admin_bar->add_menu( array(
  								'parent' => 'users',
  								'id'     => 'users-profile',
  								'title'  => __( 'Your Profile' ),
  								'href'   => admin_url('profile.php'),
  							) );
  				
  							$wp_admin_bar->add_menu( array(
  								'parent' => 'users',
  								'id'     => 'users-new',
  								'title'  => __( 'Add New' ),
  								'href'   => admin_url('user-new.php'),
  							) );
  				
  				// Adds Tools.
  					$wp_admin_bar->add_node( array(
  							'parent' => 'site-name',
  							'id'     => 'tools', 
  							'title'  => __( 'Tools' ),
  							'href'   => admin_url( 'tools.php' ),	
  					));	 
  					
  						$wp_admin_bar->add_node( array(
  									'parent' => 'tools',
  									'id'     => 'options-tools', 
  									'title'  => __( 'Tools' ),
  									'href'   => admin_url( 'tools.php' ),	
  							));	 
  							
  						$wp_admin_bar->add_node( array(
  									'parent' => 'tools',
  									'id'     => 'import', 
  									'title'  => __( 'Import' ),
  									'href'   => admin_url( 'import.php' ),	
  							));	 
  						
  						$wp_admin_bar->add_node( array(
  									'parent' => 'tools',
  									'id'     => 'export', 
  									'title'  => __( 'Export' ),
  									'href'   => admin_url( 'export.php' ),	
  							));	 
  				
  				
  					// Settings
  					$wp_admin_bar->add_menu( array(
  						'parent' => 'site-name',
  						'id'     => 'options',
  						'title'  => __( 'Settings' ),
  						'href'   => admin_url('options-general.php'),
  					) );
  				
  							$wp_admin_bar->add_menu( array(
  								'parent' => 'options',
  								'id'     => 'options-general',
  								'title'  => __( 'General' ),
  								'href'   => admin_url('options-general.php'),
  							) );
  				
  							$wp_admin_bar->add_menu( array(
  								'parent' => 'options',
  								'id'     => 'options-writing',
  								'title'  => __( 'Writing' ),
  								'href'   => admin_url('options-writing.php'),
  							) );
  				
  							$wp_admin_bar->add_menu( array(
  								'parent' => 'options',
  								'id'     => 'options-writing',
  								'title'  => __( 'Writing' ),
  								'href'   => admin_url('options-writing.php'),
  							) );
  				
  							$wp_admin_bar->add_menu( array(
  								'parent' => 'options',
  								'id'     => 'options-reading',
  								'title'  => __( 'Reading' ),
  								'href'   => admin_url('options-reading.php'),
  							) );
  				
  							$wp_admin_bar->add_menu( array(
  								'parent' => 'options',
  								'id'     => 'options-discussion',
  								'title'  => __( 'Discussion' ),
  								'href'   => admin_url('options-discussion.php'),
  							) );
  				
  							$wp_admin_bar->add_menu( array(
  								'parent' => 'options',
  								'id'     => 'options-media',
  								'title'  => __( 'Media' ),
  								'href'   => admin_url('options-media.php'),
  							) );
  				
  							$wp_admin_bar->add_menu( array(
  								'parent' => 'options',
  								'id'     => 'options-permalink',
  								'title'  => __( 'Permalink' ),
  								'href'   => admin_url('options-permalink.php'),
  							) );  			
  } }				  			
