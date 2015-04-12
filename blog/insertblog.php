<?php
//echo $_POST['signup'];
session_start();
if(isset($_POST['addblog']))
{
//echo "kunal";	
	
	$ba = $_SESSION['u_id'];
	$bt= $_POST['btopic'];
	$bd= $_POST['bdescription'];
	$bc= $_POST['bcategory'];
	$connect = mysql_connect('localhost','root','');
	if($connect)
	{
	mysql_select_db('debate',$connect);
//to see dat blank boxes dont go into database..
	
	
		$sql = "insert into blog(b_authorID, b_topic, b_description, b_category)      values('$ba','$bt','$bd','$bc')";
		
		$result=mysql_query($sql);
	if($result)
	{
		
	}
	
	mysql_close($connect);
	echo "<script>
	alert('Succesfully Written Blog');
	window.location.href='../homepage1.php';
	</script>";
	}
	}
	else
	{
		echo "Database Cannot be connected";
	}

	
?>