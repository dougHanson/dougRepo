<?php
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, false );
	
	$page_title = _sb('install03_title');
	require_once('scripts/sb_header.php');

	
	// ------------
	// PAGE CONTENT
	// ------------
	function page_content() {
		global $blog_config;
		
		// SUBJECT
		$entry_array = array();
		$entry_array[ 'subject' ] = _sb('install03_title');
		
		// PAGE CONTENT BEGIN
		ob_start();
		
		echo( _sb('install03_instructions') . '<p />' );
		
		crypto_check();

		// TODO warn if password is unencrypted
		?>
		
		<hr />
		
		<form action="install04.php?blog_language=<?php echo( $blog_config->getTag('BLOG_LANGUAGE') ); ?>" method="post">
			<label for="user"><?php echo( _sb('username') ); ?></label><br />
			<input type="text" name="user" autocomplete="OFF" size="40"><br /><br />
			
			<label for="pass"><?php echo( _sb('password') ); ?></label><br />
			<input type="password" name="pass" autocomplete="OFF" size="40"><br /><br />
			
			<input type="submit" name="submit" value="<?php echo( _sb('submit_btn') ); ?>" />
		</form>
		
		<?php 
		// PAGE CONTENT END
		$entry_array[ 'entry' ] = ob_get_clean();
		
		// THEME ENTRY
		echo( theme_staticentry( $entry_array ) );
	}

	require_once(ROOT_DIR . '/scripts/sb_footer.php');	
?>
