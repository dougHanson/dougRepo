<?php
	require_once("container.php");
	// TODO remove config.php dependency, pass in $this->path
	/**
	* Blog preferences.
	*
	* @author		Alexander Palmo <apalmo at bigevilbrain dot com>
	* @access		public
	*/
	class Configuration extends container {
		var $path, $tags;
		
		/**
		* Contructor
		*
		* @param		string $filename
		* @return		null
		*/
		function Configuration($filename='configuration.txt') {
			$this->path = CONFIG_DIR;
		
			$this->filename = $filename;
			
			$this->setDefaults();
		}
		
		function setDefaults() {
			$defaults = array(
			'BLOG_TITLE' => 'No Title',
			'BLOG_AUTHOR' => 'No Author',
			'BLOG_FOOTER' => 'No Footer',
			'BLOG_LANGUAGE' => 'english',
			'BLOG_ENTRY_ORDER' => 'new_to_old',
			'BLOG_COMMENT_ORDER' => 'new_to_old',
			'BLOG_ENABLE_COMMENTS' => 1,
			'BLOG_MAX_ENTRIES' => 5,
			'BLOG_COMMENTS_POPUP' => 0,
			'COMMENT_TAGS_ALLOWED' => 'b,i,strong,em,url',
			'BLOG_EMAIL' => 'email@myblog.com',
			'BLOG_AVATAR' => '',
			'BLOG_ENABLE_GZIP_TXT' => 0,
			'BLOG_ENABLE_GZIP_OUTPUT' => 0,
			'BLOG_EMAIL_NOTIFICATION' => 0,
			'BLOG_SEND_PINGS' => 0,
			'BLOG_PING_URLS' => '',
			'BLOG_ENABLE_VOTING' => 1,
			'BLOG_TRACKBACK_ENABLED' => 0,
			'BLOG_TRACKBACK_AUTO_DISCOVERY' => 0,
			'BLOG_ENABLE_CACHE' => 1,
			'BLOG_COUNT_VIEWS' => 1,
			'BLOG_ENABLE_CALENDAR' => 1,
			'BLOG_CALENDAR_START' => 'sunday',
			'BLOG_ENABLE_TITLE' => 1,
			'BLOG_ENABLE_PERMALINK' => 1,
			'BLOG_ENABLE_STATS' => 1,
			'BLOG_ENABLE_LASTCOMMENTS' => 1,
			'BLOG_ENABLE_LASTENTRIES' => 1,
			'BLOG_ENABLE_CAPCHA' => 1,
			'BLOG_COMMENT_DAYS_EXPIRY' => 0,
			'BLOG_ENABLE_CAPCHA_IMAGE' => function_exists( 'imagecreate' ),
			'BLOG_ENABLE_ARCHIVES' => 1,
			'BLOG_ENABLE_LOGIN' => 1,
			'BLOG_ENABLE_COUNTER' => 1,
			'BLOG_FOOTER_COUNTER' => 1,
			'BLOG_COUNTER_HOURS' => 24,
			'BLOG_COMMENTS_MODERATION' => 0,
			'BLOG_SEARCH_TOP' => 0,
			'BLOG_ENABLE_STATIC_BLOCK' => 0,
			'STATIC_BLOCK_OPTIONS' => '',
			'STATIC_BLOCK_BORDER' => 'border',
			'BLOG_HEADER_GRAPHIC' => '',
			'BLOG_ENABLE_START_CATEGORY' => 0,
			'BLOG_ENABLE_START_CATEGORY_SELECTION' => '',
			'BLOG_ENABLE_PRINT' => 0,
			'INFO_KEYWORDS' => '',
			'INFO_DESCRIPTION' => '',
			'INFO_COPYRIGHT' => '',
			'TRACKING_CODE' => '',
			'BANNED_ADDRESS_LIST' => '',
			// 'BANNED_WORD_LIST' => '',
			'BLOG_THEME' => 'default',
			'HTTPS' => 'WARN',
			'HTTPS_URL' => '',
			'RSS_MAX_ENTRIES' => 10,
			//'SHOW_COMMENTS' => 0,
			//'RATING_LOGIN' => 0,
			//'CAPCHA_RATING' => 0,
			'BACK_YEARS' => 10,
			'USE_EMOTICONS' => 1,
			'STATIC_HOME' => '',
			'USE_JS_EDITOR' => 1,
			);
			// Allowed Tags
			$this->tags = array_keys($defaults);
			
			// Default Empty Values for all, then default if exists
			foreach ($this->tags as $key) {
				$this->setTag($key, '');
				if (array_key_exists($key, $defaults)) {
					$this->setTag($key, $defaults[$key]);
                                }
			}
		}
		
		function write_file() {
			$result = parent::write_file();
			return $result;
		}
	}
?>
