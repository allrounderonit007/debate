<?php 
	require_once('initialize.php');
	require_once('MySQLDatabase.php');

	
	class blogs extends DatabaseObject
	{
		protected static $class_name = 'blogs';
		protected static $table_name = 'blog';
		
		// Do NOT change the order...
		protected static $db_fields = array( 'b_id' , 'b_authorID' , 'b_topic' , 'b_description' , 'b_category' , 'f_time');
		public $b_id; 
		public $b_authorID; 
		public $b_topic;
		public $b_description;
		public $b_category;
		public $b_time;
		
		
		//Overrided because of diffrent column name...
		public static function find_by_id( $b_id = 0 )
		{
			global $database;
			$result_array = static::find_by_sql( 'select * from ' . static::$table_name . ' where b_id='.$b_id );
												
			return !empty($result_array) ? array_shift($result_array) : false;
		}
	}

?>
      
