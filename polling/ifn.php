<?php 

		session_start();
		$pid=$_GET['p'];
		$uid=$_SESSION['u_id'];
        $connect = mysql_connect('localhost','root','');
		mysql_select_db('debate',$connect);
		$query = mysql_query("SELECT * FROM polling WHERE p_id='$pid'");
		//$row = $query['p_n'];
		$r=mysql_fetch_array($query);
		//echo $r[2];}
		$row=$r[5];
		++$row;
        $query1=mysql_query("UPDATE polling SET p_n='$row' WHERE p_id='$pid'");
        $query2=mysql_query("insert into polls(po_id , po_u_ID)      values('$pid' , '$uid')");
        if (mysql_num_rows($query) == 0)
        {
           //echo $row;
           mysql_close($connect);
		}
		else
		{
			//echo $row;
			mysql_close($connect);
		}
?>