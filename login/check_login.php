<?php
session_start();
if(isset($_POST['login']))
{

$id= $_POST['uid'];
$pwd= $_POST['upwd'];

$connect = mysql_connect('localhost','root','');
	if($connect)
	{//echo "successfully connected";
	}
	mysql_select_db('debate',$connect);
//to see dat blank boxes dont go into database..
	
	
		$sql = "select * from user where u_id='$id' and u_password='$pwd'";
		$result=mysql_query($sql);
		
		$count=mysql_num_rows($result);
		$r=mysql_fetch_array($result);
		if($count==1){
			
		//print_r (mysql_fetch_array($result));
		
		
		
			$_SESSION['u_id']=$r[0];
			$_SESSION['u_name']=$r[1];
			$_SESSION['u_emailID']=$r[2];
			$_SESSION['u_aemailID']=$r[3];
			$_SESSION['u_password']=$r[4];
			$_SESSION['u_isAdmin']=$r[5];
			$_SESSION['u_photo']=$r[6];
			$_SESSION['u_rating']=$r[7];
			//$_SESSION['age'] = date('Y',time())- date('Y',strtotime($_SESSION['dob']));
			//$a =$_SESSION['age'];
	//$sql = "update signup set age=$a where id=$r[0] ";
		//$result12=mysql_query($sql);
		$_SESSION['log'] = true;
		 
	//	print_r ($_SESSION);
		if($_SESSION['u_isAdmin']==0){
		header("location:../homepage1.php");
		}
		elseif($_SESSION['u_isAdmin']==1)
		{
			header("location:../homepage2.php");
		}
		else
		{
			header("location:../homepage2.php");
		}
	}
		
}

 if(isset($_POST['forget']))
    {
        header("location:forget-password.php");
    }
?>