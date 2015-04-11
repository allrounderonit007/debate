<?php

require_once('initialize.php');
require_once('MySQLDatabase.php');

class pollings extends DatabaseObject
{
    protected static $class_name = 'pollings';
    protected static $table_name = 'polling';
    
    protected static $db_fields = array('p_id','p_authorID', 'p_topic', 'p_time', 'p_y', 'p_n');
    
    public $p_id;
    public $p_authorID;
    public $p_topic;
    public $p_time;
    public $p_y;
    public $p_n;

    public static function find_by_id( $poll_id=0 )
		{
			global $database;
			$result_array = static::find_by_sql('select * from ' . static::$table_name . ' where p_id="'.$poll_id.'"');
			return !empty($result_array) ? array_shift($result_array) : false;
		}
    
    public static function find_by_user($user_id=0)
    {
        global $database;
        $result_array = static::find_by_sql( 'select p_topic from ' . static::$table_name . ' where p_authorID='.$user_id );
												
			return !empty($result_array) ? array_shift($result_array) : false;
		}
    
    public static function update_yes($question_id =0,$y=0)
    {
        global $database;
        $result_array = static::find_by_sql('update ' . static::$table_name . ' set p_y = '. $y . ' where p_id = ' . $question_id);
        
        return !empty($result_array) ? array_shift($result_array) : false;
    }
    
    public static function update_no($question_id =0,$n=0)
    {
        global $database;
        $n=$n+1;
        $result_array = static::find_by_sql('update ' . static::$table_name . ' set p_n = ' . $n . ' where p_id = ' . $question_id);
        
        return !empty($result_array) ? array_shift($result_array) : false;
    }
    //this will be retrieved by progress bar
    public static function yes_percent(){
        
        global $database;
        
        $result = ($p_y/($p_y + $p_n))*100;
        return $result;
    }
        
    }




?>
