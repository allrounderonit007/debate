<?php
	 require_once('../includes/initialize.php');
	
	$sql=mysql_query("DELETE FROM user WHERE u_id ='". $_GET['id']. "' ");
	
	redirect_to( $_SERVER['HTTP_REFERER'] );
?>	