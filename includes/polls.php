<?php
require_once('initialize.php');
require_once('MySQLDatabase.php');

class Poll extends DatabaseObject
{
    protected static $class_name = 'poll';
    protected static $table_name = 'polls';
    
    protected static $db_fields = array('po_id','po_u_ID', 'po_time');
    public $po_id;
    public $po_u_ID;
    public $po_time;

     public static function find_by_id( $p_id=0)
		{
			global $database;
			$result_array = static::find_by_sql('select * from ' . static::$table_name . ' where po_id='.$p_id);
			return !empty($result_array) ? array_shift($result_array) : false;
		}
	}

