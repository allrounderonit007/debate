<?php
if(isset($_POST['submit']))
{
	
	$author = $_SESSION['u_id'];
	$topic= $_POST['topic'];
	$description= $_POST['description'];
	$connect = mysql_connect('localhost','root','');
	if($connect)
	{
	mysql_select_db('debate',$connect);
//to see dat blank boxes dont go into database..
		$sql = "insert into forum(f_authorID, f_topic, f_description) values('$author','$topic','$description')";
		$result=mysql_query($sql);
	
	mysql_close($connect);
	echo "<script>
	alert('Succesfully Written Forum');
	window.location.href='../homepage2.php';
	</script>";
	}
	}
	else
	{
		echo "Database Cannot be connected";
	}

	
?>