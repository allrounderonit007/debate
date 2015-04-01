<?php 
		$uid=$_GET['p'];
        $connect = mysql_connect('localhost','root','');
		mysql_select_db('debate',$connect);
		$query = mysql_query("SELECT u_id FROM user WHERE u_id='$uid'");
        if (mysql_num_rows($query) != 0)
        {
           echo "1";
		}
		else
		{
			echo "0";
		}
?>