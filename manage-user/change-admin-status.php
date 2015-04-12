<?php
	 require_once('../includes/initialize.php');
$get1=mysql_query("SELECT u_isAdmin FROM user WHERE u_id ='". $_GET['id']. "'"); 
$option1 = '';
while($row = mysql_fetch_assoc($get1))
{
  $option1=$row['u_isAdmin'];
}

if($option1==0){
	$sql=mysql_query("UPDATE user SET u_isAdmin = 1 WHERE u_id ='". $_GET['id']. "' ");
	}
	else{
	$sql=mysql_query("UPDATE user SET u_isAdmin = 0 WHERE u_id ='". $_GET['id']. "' ");
	}
	redirect_to( $_SERVER['HTTP_REFERER'] );
?>	