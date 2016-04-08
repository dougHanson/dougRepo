<?php
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, true );

	$page_title = _sb('setup_title');

	// ---------------
	// POST PROCESSING
	// ---------------

	$temp_max_entries = intval($_POST['blog_max_entries' ] );
	if ( $temp_max_entries <= 0) {
		$temp_max_entries = 5;
	}

	$rss_max_entries = intval($_POST['rss_max_entries' ] );
	if ( $rss_max_entries <= 0) {
		$rss_max_entries = 10;
	}

	$temp_blog_comment_days_expiry = intval($_POST['blog_comment_days_expiry' ] );
	if ( $temp_blog_comment_days_expiry < 0) {
		$temp_blog_comment_days_expiry = 0;
	}

	$temp_blog_counter_hours = intval($_POST['blog_counter_hours' ] );
	if ( $temp_blog_counter_hours < 1) {
		$temp_blog_counter_hours = 1;
	}

	$tag_array = array( 'b', 'i', 'strong', 'em', 'del', 'ins', 'strike', 'img', 'url', 'blockquote', 'hN', 'pre', 'code', 'html','center' );	 
	$temp_array = array();
	for ( $i = 0; $i < count( $tag_array ); $i++ ) {
		$tag = $tag_array[$i];
		if ( $_POST[ $tag ] == 'on' ) {
			array_push( $temp_array, $tag );
		}
	}
	$comment_tags_allowed = implode( ',', $temp_array );

	// Clean up the Blog Email list...
	$temp_email = explode( ',', sb_stripslashes($_POST['blog_email' ] ) );
	if ( $temp_email === false ) {
		$temp_email = '';
	} else if ( is_array( $temp_email ) ) {
		for ( $i=0; $i < count($temp_email); $i++ ) {
			$temp_email[$i] = trim( $temp_email[$i] );
		}
		$temp_email = implode( ',', $temp_email );
	}
	$back_years = intval($_POST['back_years']);
        if ($back_years > 98) {
		$back_years = 98;
	}
	
	$new_config = new Configuration();
	$new_config->read_file();
	
	// @htmlspecialchars( $str, ENT_QUOTES, $GLOBALS['lang_string']['php_charset'] );
	$new_config->setTag('BLOG_TITLE', 				sb_stripslashes($_POST['blog_title']));
	$new_config->setTag('BLOG_AUTHOR', 				sb_stripslashes($_POST['blog_author']));
	$new_config->setTag('BLOG_FOOTER', 				sb_stripslashes($_POST['blog_footer']));
	$new_config->setTag('BLOG_LANGUAGE', 			$_POST['blog_language']);
	$new_config->setTag('BLOG_ENTRY_ORDER', 		$_POST['blog_entry_order']);
	$new_config->setTag('BLOG_COMMENT_ORDER', 		$_POST['blog_comment_order']);
	$new_config->setTag('BLOG_MAX_ENTRIES', 		$temp_max_entries);
	$new_config->setTag('COMMENT_TAGS_ALLOWED', 	$comment_tags_allowed);
	$new_config->setTag('BLOG_EMAIL', 				sb_stripslashes($_POST['blog_email']));
	$new_config->setTag('BLOG_AVATAR', 				$_POST['blog_avatar']);
	$new_config->setTag('BLOG_PING_URLS', 			sb_stripslashes($_POST['blog_ping_urls']));
	$new_config->setTag('BLOG_CALENDAR_START', 		$_POST['blog_calendar_start']);
	$new_config->setTag('BLOG_COMMENT_DAYS_EXPIRY', $temp_blog_comment_days_expiry);
	$new_config->setTag('STATIC_BLOCK_OPTIONS', 	$_POST['static_block_options']);
	$new_config->setTag('STATIC_BLOCK_BORDER', 		$_POST['static_block_border']);
	$new_config->setTag('BLOG_HEADER_GRAPHIC', 		$_POST['blog_header_graphic']);
	$new_config->setTag('BLOG_COUNTER_HOURS', 		$temp_blog_counter_hours);
	$new_config->setTag('BLOG_ENABLE_START_CATEGORY_SELECTION', $_POST['blog_enable_start_category_selection']);
	$new_config->setTag('HTTPS', $_POST['https']);
	$new_config->setTag('HTTPS_URL', $_POST['https_url']);
	$new_config->setTag('BACK_YEARS', 		$back_years);
	$new_config->setTag('RSS_MAX_ENTRIES', 		$rss_max_entries);
	$new_config->setTag('STATIC_HOME', 		sb_stripslashes($_POST['static_home']));

	// checkboxes
	$checkboxes = array('BLOG_COMMENTS_POPUP','BLOG_ENABLE_COMMENTS','BLOG_ENABLE_GZIP_TXT',
		'BLOG_ENABLE_GZIP_OUTPUT','BLOG_EMAIL_NOTIFICATION','BLOG_SEND_PINGS','BLOG_ENABLE_VOTING',
		'BLOG_TRACKBACK_ENABLED','BLOG_TRACKBACK_AUTO_DISCOVERY','BLOG_ENABLE_CACHE',
		'BLOG_COUNT_VIEWS','BLOG_ENABLE_CALENDAR','BLOG_ENABLE_TITLE','BLOG_ENABLE_PERMALINK',
		'BLOG_ENABLE_STATS','BLOG_ENABLE_LASTCOMMENTS','BLOG_ENABLE_LASTENTRIES','BLOG_ENABLE_CAPCHA',
		'BLOG_ENABLE_CAPCHA_IMAGE','BLOG_ENABLE_ARCHIVES','BLOG_ENABLE_LOGIN','BLOG_ENABLE_COUNTER',
		'BLOG_FOOTER_COUNTER','BLOG_COMMENTS_MODERATION','BLOG_SEARCH_TOP','BLOG_ENABLE_STATIC_BLOCK',
		'BLOG_ENABLE_START_CATEGORY','BLOG_ENABLE_PRINT','USE_EMOTICONS','USE_JS_EDITOR'
	);
	foreach ($checkboxes as $box) {
		$new_config->setTag(strtoupper($box), $_POST[strtolower($box)] == 'on');
	}

	// $new_config->setTag('BANNED_ADDRESS_LIST','');
	// $new_config->setTag('BANNED_WORD_LIST','');

	global $ok;
	$ok = $new_config->write_file();

	if ( $ok === true ) {
		redirect_to_url( 'index.php' );
	}

	require_once('scripts/sb_header.php');
	
	// ------------
	// PAGE CONTENT
	// ------------
	function page_content() {
		global $blog_config, $ok;
	
		// SUBJECT
		$entry_array = array();
		$entry_array[ 'subject' ] = _sb('setup_title');
		
		// PAGE CONTENT BEGIN
		ob_start();
		
		if ( $ok !== true ) {
			echo( _sb('setup_error') . $ok . '<p />' );
		} else {
			echo( _sb('setup_success') . '<p />' );
		}
		echo( '<a href="index.php">' . _sb('home') . '</a>' );
		
		// PAGE CONTENT END
		$entry_array[ 'entry' ] = ob_get_clean();
		
		// THEME ENTRY
		echo( theme_staticentry( $entry_array ) );
	}

	require_once(ROOT_DIR . '/scripts/sb_footer.php');
?>
