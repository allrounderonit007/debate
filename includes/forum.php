<?php 
	require_once('initialize.php');
	require_once('MySQLDatabase.php');

	
	class forums extends DatabaseObject
	{
		protected static $class_name = 'forums';
		protected static $table_name = 'forum';
		
		// Do NOT change the order...
		protected static $db_fields = array( 'f_id' , 'f_authorID' , 'f_topic' , 'f_description' , 'f_time');
		public $f_id; 
		public $f_authorID; 
		public $f_topic;
		public $f_description;
		public $f_time;
		
		
		//Overrided because of diffrent column name...
		public static function find_by_id( $f_id = 0 )
		{
			global $database;
			$result_array = static::find_by_sql( 'select * from ' . static::$table_name . ' where f_id='.$f_id );
												
			return !empty($result_array) ? array_shift($result_array) : false;
		}
	}

?>
      
