<?php
error_reporting(E_ALL);

$email=$_GET['a'];
//echo $email;
$connect = mysql_connect('localhost','root','');
	if($connect)
	{echo "";}
	mysql_select_db('debate',$connect);
	$sql = "update user set u_isAdmin='0' where u_emailID='$email'";
	$result=mysql_query($sql);
	echo "Account Confirmed <a href='../homepage.php'> Log In Now </a>";	

?>