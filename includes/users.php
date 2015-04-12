<?php
require_once('initialize.php');
require_once('DatabaseObject.php');

class Users extends DatabaseObject
{
    protected static $class_name = 'users';
    protected static $table_name = 'user';
    
    protected static $db_fields = array('u_id','u_name', 'u_emailID', 'u_aemailID', 'u_password' , 'u_isAdmin' , 'u_photo' , 'u_rating' ,'u_securityQ' , 'u_securityA');
    
    public $u_id;
    public $u_name;
    public $u_emailID;
    public $u_aemailID;
    public $u_password;
    public $u_photo;
    public $u_rating;
    public $u_securityA;
    public $u_securityQ;
    public $u_isAdmin;

public static function find_by_id( $uid = 0 )
        {
            global $database;
            $result_array = static::find_by_sql( 'select * from ' . static::$table_name . ' where u_id='. $uid );
                                                
            return !empty($result_array) ? array_shift($result_array) : false;
        }

public static function authenticate( $email='' ,$password='' )
        {
            global $database;
            $email = $database->escape_value( $email );
            $password = $database->escape_value( $password );
            
            $sql = "select * from user where u_id='" . $email . "' and u_password='" . $password . "';";
            
            $result_array = self::find_by_sql( $sql );
            return !empty($result_array) ? array_shift($result_array) : false;
            
        }
    
public function update_name($name,$u_id)
{
     global $database;
        $result_array = static::find_by_sql('update ' . static::$table_name . ' set u_name ="' .$name . '" where u_id = '. $u_id);
        
        return !empty($result_array) ? array_shift($result_array) : false;
}
public function update_email($email,$u_id)
{
     global $database;
        $result_array = static::find_by_sql('update ' . static::$table_name . ' set u_emailID ="' .$email . '" where u_id = '. $u_id);
        
        return !empty($result_array) ? array_shift($result_array) : false;
}
public function update_aemail($aemail,$u_id)
{
     global $database;
        $result_array = static::find_by_sql('update ' . static::$table_name . ' set u_aemail ="' .$aemail . '" where u_id = '. $u_id);
        
        return !empty($result_array) ? array_shift($result_array) : false;
}
public function update_securityQ($sq,$u_id)
{
     global $database;
        $result_array = static::find_by_sql('update ' . static::$table_name . ' set u_securityQ ="' .$sq . '" where u_id = '. $u_id);
        
        return !empty($result_array) ? array_shift($result_array) : false;
}
public function update_securityA($sa,$u_id)
{
     global $database;
        $result_array = static::find_by_sql('update ' . static::$table_name . ' set u_securityA ="' .$sa . '" where u_id = '. $u_id);
        
        return !empty($result_array) ? array_shift($result_array) : false;
}
public function update_password($u_id,$new_pwd)
{
     global $database;
        $result_array = static::find_by_sql('update ' . static::$table_name . ' set u_password ="' .$new_pwd . '" where u_id = '. $u_id);
        
        return !empty($result_array) ? array_shift($result_array) : false;
}
    }

?>