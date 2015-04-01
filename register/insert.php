<?php
//echo $_POST['signup'];
if(isset($_POST['signup']))
{
//echo "kunal";	
	$id= $_POST['uid'];
	$name = $_POST['uname'];
	$email= $_POST['uemail'];
	$aemail= $_POST['uaemail'];
	$pwd= $_POST['upwd'];
	$sq= $_POST['usq'];
	$sa=$_POST['usa'];
	$connect = mysql_connect('localhost','root','');
	if($connect)
	{
	mysql_select_db('debate',$connect);
//to see dat blank boxes dont go into database..
	
	
		$sql = "insert into user(u_id, u_name, u_emailID, u_aemailID, u_password, u_isAdmin, u_photo, u_rating, u_securityQ, u_securityA)      values('$id','$name','$email','$aemail','$pwd','0','0','0','$sq','$sa')";
		
		$result=mysql_query($sql);
	if($result)
	{
		
	}
	
	mysql_close($connect);
	echo "<script>
	alert('Successful Signup');
	window.location.href='../homepage.php';
	</script>";
	}
	}
	else
	{
		echo "Database Cannot be connected";
	}

	
?>