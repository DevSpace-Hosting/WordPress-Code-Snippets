<?php
add_action('admin_menu', 'replace_plugin_page', 999, 0);

function replace_plugin_page() {
  	if (!current_user_can('update_core')) {
		global $pagenow;
      
		if ('plugins.php' === $pagenow ) {
	    	if (function_exists('admin_url')) {
	        	wp_redirect(admin_url('admin.php?page=pretty-plugins.php'));
	        	exit();
	      	}      
	      
	      	else {
	        	wp_redirect( get_option('siteurl').'/wp-admin/'.'admin.php?page=pretty-plugins.php');
	        	exit();
	  		}
	  	}
	}
}
?>
