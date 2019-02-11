<?php
add_action('login_form_register', 'devspace_redirect_register');
	function devspace_redirect_register() {
		wp_redirect('https://example.com/registration');
	    	exit();
	}
?>
