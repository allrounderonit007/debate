<?php

	defined('DS') ? null : define('DS' , DIRECTORY_SEPARATOR );
	
	defined('SITE_ROOT') ? null :
		define('SITE_ROOT' , DS.'opt' . DS .'lampp' . DS . 'htdocs' . DS . 'debate');
	
	defined('LIB_PATH') ? null :
		define('LIB_PATH' , SITE_ROOT.DS.'includes' );
	
	defined('SITE_NAME') ? null :
		define('SITE_NAME' , 'Debate Club' );
		
	defined('FOOTER') ? null :
		define('FOOTER' , '&copy 2015. The Debate Club,DA-IICT');
	
	
	require_once( LIB_PATH.DS.'config.php' );
	//require_once( LIB_PATH.DS.'users.php' );
	require_once( LIB_PATH.DS.'functions.php' );
	require_once( LIB_PATH.DS.'MySQLDatabase.php' );
	require_once( LIB_PATH.DS.'DatabaseObject.php' );
	require_once( LIB_PATH.DS.'Session.php' );
	require_once( LIB_PATH.DS.'events.php' );
	require_once( LIB_PATH.DS.'forum.php' );
	require_once( LIB_PATH.DS.'comments.php' );
	require_once( LIB_PATH.DS.'pollings.php' );
	require_once( LIB_PATH.DS.'polls.php' );
?>
