<?php
require_once("../includes/initialize.php");
if(isset($_POST['login']))
{
$id= $_POST['uid'];
$pwd= $_POST['upwd'];

$connect = mysql_connect('localhost','root','');
	if($connect)
	{//echo "successfully connected";
	}
	mysql_select_db('debate',$connect);
	
		$sql = "select * from user where u_id='$id' and u_password='$pwd'";
		$result=mysql_query($sql);
		
		$count=mysql_num_rows($result);
		$r=mysql_fetch_array($result);
		if($count==1){
			$_SESSION['u_id']=$r[0];
			$_SESSION['u_name']=$r[1];
			$_SESSION['u_emailID']=$r[2];
			$_SESSION['u_aemailID']=$r[3];
			$_SESSION['u_password']=$r[4];
			$_SESSION['u_isAdmin']=$r[5];
			$_SESSION['u_photo']=$r[6];
			$_SESSION['u_rating']=$r[7];
		$_SESSION['log'] = true;
		 
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

if( (!empty( $_GET['action'] )) && $_GET['action']=='logout' )
	{		
		$session->logout();
		session_destroy();
		redirect_to('../homepage.php');
	}

 if(isset($_POST['forget']))
    {
		$fid = $_POST['uid'];    	
        header("location:forget-password.php");
    }
?>