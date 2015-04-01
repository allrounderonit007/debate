<?php
require_once('initialize.php');
require_once('MySQLDatabase.php');

class Users extends DatabaseObject
{
    protected static $class_name = 'users';
    protected static $table_name = 'user';
    
    protected static $db_fields = array('u_id','u_name', 'u_emailID', 'u_aemailID', 'u_photo', 'u_rating', 'u_password' , 'u_securityQ' , 'u_securityA' , 'u_isAdmin');
    
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

        public $errors = array();
    
        public $upload_errors = array (
        UPLOAD_ERR_OK => "No errors",
        UPLOAD_ERR_INI_SIZE => "Larger than maximum upload size",
        UPLOAD_ERR_FORM_SIZE => "Larger than maximum file size",
        UPLOAD_ERR_PARTIAL => "Partial upload",
        UPLOAD_ERR_NO_FILE => "No file",
        UPLOAD_ERR_NO_TMP_DIR => "No temp dir",
        UPLOAD_ERR_CANT_WRITE => "Can't write",
        UPLOAD_ERR_EXTENSION => "File stopped by extension"
        );

        public $temp_path;
        private $upload_dir = "profile_pic";
        
public static function find_by_id( $u_id=0 )
        {
            global $database;
            $result_array = static::find_by_sql('select * from ' . static::$table_name . ' where u_id="'.$u_id.'"');
            return !empty($result_array) ? array_shift($result_array) : false;
        }
    
function update_name($name,$u_id)
{
     global $database;
        $result_array = static::find_by_sql('update ' . static::$table_name . ' set u_name ="' .$name . '" where u_id = '. $u_id);
        
        return !empty($result_array) ? array_shift($result_array) : false;
}
function update_email($email,$u_id)
{
     global $database;
        $result_array = static::find_by_sql('update ' . static::$table_name . ' set u_emailID ="' .$email . '" where u_id = '. $u_id);
        
        return !empty($result_array) ? array_shift($result_array) : false;
}
function update_aemail($aemail,$u_id)
{
     global $database;
        $result_array = static::find_by_sql('update ' . static::$table_name . ' set u_aemail ="' .$aemail . '" where u_id = '. $u_id);
        
        return !empty($result_array) ? array_shift($result_array) : false;
}
function update_securityQ($sq,$u_id)
{
     global $database;
        $result_array = static::find_by_sql('update ' . static::$table_name . ' set u_securityQ ="' .$sq . '" where u_id = '. $u_id);
        
        return !empty($result_array) ? array_shift($result_array) : false;
}
function update_securityA($sa,$u_id)
{
     global $database;
        $result_array = static::find_by_sql('update ' . static::$table_name . ' set u_securityA ="' .$sa . '" where u_id = '. $u_id);
        
        return !empty($result_array) ? array_shift($result_array) : false;
}
function update_password($u_id,$new_pwd)
{
     global $database;
        $result_array = static::find_by_sql('update ' . static::$table_name . ' set u_password ="' .$new_pwd . '" where u_id = '. $u_id);
        
        return !empty($result_array) ? array_shift($result_array) : false;
}

    public function attach_file($file)
            {
            if(!$file || empty($file) || !is_array($file))
            {
                $this->errors[] = "No files uploaded";
                return false;
            }
            else
            {
                $this->temp_path = $file['tmp_name'];
                $this->u_photo = basename($file['name']);
                return true;
            }       
        }
            public function update()
        {
            global $database;
            $attributes = static::sanitized_attributes();
            $attribute_pairs = array();
            
            foreach( $attributes as $key => $value )
            {
                $attribute_pairs[] = $key."='".$value."'";
            }
            
            $sql  = "UPDATE " . static::$table_name . " SET ";
            $sql .= join( ", " , $attribute_pairs ) . " ";
            $sql .= "WHERE id=" . $database->escape_value( $this->id );
        
            
            $database->execute_query( $sql );
            return ( $database->affected_rows() == 1 ) ? true : false;
                        
        }

        public function save()
        {
            
            if(isset($this->u_id))
            {
                if(!empty($this->errors))
                    return false;
                if(empty($this->u_photo) || empty($this->temp_path))
                {
                    echo $this->temp_path;
                    $this->errors[] = "The file location was not available";
                    return false;
                }

                $target_path = SITE_ROOT.DS.$this->upload_dir.DS.$this->u_photo;
            
                if(file_exists($target_path))
                {   
                    $this->errors[]="The file {$this->u_photo} already exists. \nPlease choose different name and try again.";
                    return false;
                }


                if(move_uploaded_file($this->temp_path,$target_path))
                {
                    if($this->update())
                    {
                        unset($this->temp_path);
                        return true;
                    }
                }   
                else
                {
                    $this->errors[] = "The file upload failed possibly due to incorrect permissions";
                    return false;   
                }
            
            }
            return true;
        }
        

}

