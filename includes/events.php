<?php
	require_once('initialize.php');
	require_once(LIB_PATH.DS.'MySQLDatabase.php');

	class Events extends DatabaseObject
	{
		protected static $class_name = 'events';
		protected static $table_name = 'event';

		protected static $db_fields = array( 'e_id' , 'e_name' , 'e_description' , 'e_venue' , 'e_time' , 'e_date' , 
			'e_duration' );

		public $e_id; 
		public $e_name;
		public $e_description;
		public $e_venue;
		public $e_time;
		public $e_date;
		public $e_duration;

		public static function find_by_id( $event_id = 0 )
		{
			global $database;
			$result_array = static::find_by_sql( 'select * from ' . static::$table_name . ' where e_id='.$event_id );
												
			return !empty($result_array) ? array_shift($result_array) : false;
		}

	 			
	}
?>