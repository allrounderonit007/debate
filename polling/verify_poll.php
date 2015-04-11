<?php 
		session_start();
		$pid=$_GET['p'];
		$uid=$_SESSION['u_id'];
        $connect = mysql_connect('localhost','root','');
		mysql_select_db('debate',$connect);
		$query = mysql_query("SELECT * FROM polls WHERE po_id='$pid' and po_u_ID='$uid'");
        if (mysql_num_rows($query) == 0)
        {
           echo "1";
		}
		else
		{
			echo "0";
		}
?>