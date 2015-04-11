<?php
session_start();
if(isset($_POST['addq']))
{	
	$topi= $_POST['topic'];
	$ui= $_SESSION['u_id'];
	$connect = mysql_connect('localhost','root','');
	if($connect)
	{
	mysql_select_db('debate',$connect);
		$sql = "insert into polling(p_authorID , p_topic , p_y , p_n)      values('$ui','$topi','0','0')";
		
		$result=mysql_query($sql);
	if($result)
	{
		
	}
	
	mysql_close($connect);
	echo "<script>
	alert('Successful Posted Question');
	window.location.href='../homepage2.php';
	</script>";
	}
	}
	else
	{
		echo "Database Cannot be connected";
	}

	
?>