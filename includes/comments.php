<?php 
	
	require_once('initialize.php');
	require_once('MySQLDatabase.php');
	
	class comments extends DatabaseObject
	{
		protected static $class_name = 'comments';
		protected static $table_name = 'comment';
		
		// Do NOT change the order...
		protected static $db_fields = array('c_authorID' , 'c_id' , 'c_o_ID' , 'c_text' , 'c_time' , 'c_type');
		
		public $c_authorID; 
		public $c_id;
		public $c_o_ID;
		public $c_text;
		public $c_time;
		public $c_type;
		
		public static function find_by_authorID( $c_authorID = 0 )
		{
			global $database;
			$result_array = static::find_by_sql( 'select * from ' . static::$table_name . ' where c_authorID='.$c_authorID );
												
			return !empty($result_array) ? array_shift($result_array) : false;
		}
		
		
		public static function find_by_id( $c_id = 0 )
		{
			global $database;
			$result_array = static::find_by_sql( 'select * from ' . static::$table_name . ' where c_id='.$c_id );
												
			return !empty($result_array) ? array_shift($result_array) : false;
		}		
	}
?>