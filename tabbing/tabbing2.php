<!DOCTYPE html>
<html  lang="en-US">
<?php
require_once('../includes/initialize.php');
    //Load Session details...
    if (! $session->is_logged_in() )
        session_start();
    
    if( ! isset($_SESSION['u_id']) )
        redirect_to('../homepage.php');

    $user=Users::find_by_id($_SESSION['u_id']);

$variable=array();
$inc=0;
$sum=0;
$sum1=0;
$sum2=0;
$sum3=0;
$sum4=0;
$sum5=0;
?>

<?php
if( isset( $_POST['submit'] ) )
{

$variable[$inc] = $_POST['o1'];
$a=array(); 
$get1=mysql_query("SELECT u_rating FROM user WHERE u_name ='". $variable[$inc]. "'");       
$option1 = '';
while($row = mysql_fetch_assoc($get1))
{
  $option1=$row['u_rating'];
} 
$sum=$option1;
$inc++;


$variable[$inc] = $_POST['o2'];
$get1=mysql_query("SELECT u_rating FROM user WHERE u_name ='". $variable[$inc]. "'");       
$option1 = '';
while($row = mysql_fetch_assoc($get1))
{
  $option1=$row['u_rating'];
} 
$sum=$sum+$option1;
$inc++;


$variable[$inc] = $_POST['o3'];
$get1=mysql_query("SELECT u_rating FROM user WHERE u_name ='". $variable[$inc]. "'");       
$option1 = '';
while($row = mysql_fetch_assoc($get1))
{
  $option1=$row['u_rating'];
} 
$sum=$sum+$option1;
$inc++;

$variable[$inc] = $_POST['o4'];
$a=array(); 
$get1=mysql_query("SELECT u_rating FROM user WHERE u_name ='". $variable[$inc]. "'");       
$option1 = '';
while($row = mysql_fetch_assoc($get1))
{
  $option1=$row['u_rating'];
} 
$sum1=$option1;
$inc++;


$variable[$inc] = $_POST['o5'];
$get1=mysql_query("SELECT u_rating FROM user WHERE u_name ='". $variable[$inc]. "'");       
$option1 = '';
while($row = mysql_fetch_assoc($get1))
{
  $option1=$row['u_rating'];
} 
$sum1=$sum1+$option1;
$inc++;


$variable[$inc] = $_POST['o6'];
$get1=mysql_query("SELECT u_rating FROM user WHERE u_name ='". $variable[$inc]. "'");       
$option1 = '';
while($row = mysql_fetch_assoc($get1))
{
  $option1=$row['u_rating'];
} 
$sum1=$sum1 + $option1;
$inc++;
  
$variable[$inc] = $_POST['o7'];
$get1=mysql_query("SELECT u_rating FROM user WHERE u_name ='". $variable[$inc]. "'");       
$option1 = '';
while($row = mysql_fetch_assoc($get1))
{
  $option1=$row['u_rating'];
} 
$sum2=$option1;
$inc++;


$variable[$inc] = $_POST['o8'];
$get1=mysql_query("SELECT u_rating FROM user WHERE u_name ='". $variable[$inc]. "'");       
$option1 = '';
while($row = mysql_fetch_assoc($get1))
{
  $option1=$row['u_rating'];
} 
$sum2=$sum2+$option1;
$inc++;


$variable[$inc] = $_POST['o9'];
$get1=mysql_query("SELECT u_rating FROM user WHERE u_name ='". $variable[$inc]. "'");       
$option1 = '';
while($row = mysql_fetch_assoc($get1))
{
  $option1=$row['u_rating'];
} 
$sum2=$sum2+$option1;
$inc++;

$variable[$inc] = $_POST['o10'];
$a=array(); 
$get1=mysql_query("SELECT u_rating FROM user WHERE u_name ='". $variable[$inc]. "'");       
$option1 = '';
while($row = mysql_fetch_assoc($get1))
{
  $option1=$row['u_rating'];
} 
$sum3=$option1;
$inc++;


$variable[$inc] = $_POST['o11'];
$get1=mysql_query("SELECT u_rating FROM user WHERE u_name ='". $variable[$inc]. "'");       
$option1 = '';
while($row = mysql_fetch_assoc($get1))
{
  $option1=$row['u_rating'];
} 
$sum3=$sum3+$option1;
$inc++;


$variable[$inc] = $_POST['o12'];
$get1=mysql_query("SELECT u_rating FROM user WHERE u_name ='". $variable[$inc]. "'");       
$option1 = '';
while($row = mysql_fetch_assoc($get1))
{
  $option1=$row['u_rating'];
} 
$sum3=$sum3+$option1;
$inc++;

$variable[$inc] = $_POST['o13'];
$get1=mysql_query("SELECT u_rating FROM user WHERE u_name ='". $variable[$inc]. "'");       
$option1 = '';
while($row = mysql_fetch_assoc($get1))
{
  $option1=$row['u_rating'];
} 
$sum4=$option1;
$inc++;
  
$variable[$inc] = $_POST['o14'];
$a=array(); 
$get1=mysql_query("SELECT u_rating FROM user WHERE u_name ='". $variable[$inc]. "'");       
$option1 = '';
while($row = mysql_fetch_assoc($get1))
{
  $option1=$row['u_rating'];
} 
$sum4=$sum4 + $option1;
$inc++;


$variable[$inc] = $_POST['o15'];
$get1=mysql_query("SELECT u_rating FROM user WHERE u_name ='". $variable[$inc]. "'");       
$option1 = '';
while($row = mysql_fetch_assoc($get1))
{
  $option1=$row['u_rating'];
} 
$sum4=$sum4+$option1;
$inc++;


$variable[$inc] = $_POST['o16'];
$get1=mysql_query("SELECT u_rating FROM user WHERE u_name ='". $variable[$inc]. "'");       
$option1 = '';
while($row = mysql_fetch_assoc($get1))
{
  $option1=$row['u_rating'];
} 
$sum5=$option1;
$inc++;

$variable[$inc] = $_POST['o17'];
$a=array(); 
$get1=mysql_query("SELECT u_rating FROM user WHERE u_name ='". $variable[$inc]. "'");       
$option1 = '';
while($row = mysql_fetch_assoc($get1))
{
  $option1=$row['u_rating'];
} 
$sum5=$sum5 + $option1;
$inc++;


$variable[$inc] = $_POST['o18'];
$get1=mysql_query("SELECT u_rating FROM user WHERE u_name ='". $variable[$inc]. "'");       
$option1 = '';
while($row = mysql_fetch_assoc($get1))
{
  $option1=$row['u_rating'];
} 
$sum5=$sum5+$option1;
$inc++;

array_push($a,$sum);
array_push($a,$sum1);
array_push($a,$sum2);
array_push($a,$sum3);
array_push($a,$sum4);
array_push($a,$sum5);
$_SESSION['myarray'] = $a;

redirect_to("tabbing8.php");

}
?>



<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Debate Club</title>

    <!-- CSS -->
    <link href="../wp-content/themes/openmind/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../wp-content/themes/openmind/css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href="../wp-content/themes/openmind/css/animate.min.css" rel="stylesheet" media="screen">
    <link href="../wp-content/themes/openmind/css/lightbox.css" rel="stylesheet" media="screen">
    <link href="../wp-content/themes/openmind/style.css" rel="stylesheet" media="screen">
    <link href="../wp-content/themes/openmind/css/color-niceblue.css" rel="stylesheet" media="screen" title="default">
    <link href="../wp-content/themes/openmind/css/width-full.css" rel="stylesheet" media="screen" title="default">
    <link rel="alternate" type="application/rss+xml" title="Open Mind &raquo; Portfolio Comments Feed" href="feed/index.html" />

<link rel='stylesheet' id='bootstrap-fa-icon-css'  href='../wp-content/plugins/easy-bootstrap-shortcodes/styles/font-awesome.min0235.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='ebs_dynamic_css-css'  href='../wp-content/plugins/easy-bootstrap-shortcodes/styles/ebs_dynamic_css0235.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='jetpack_css-css'  href='../wp-content/plugins/jetpack/css/jetpack6de8.css?ver=3.3' type='text/css' media='all' />
<script type='text/javascript' src='../wp-includes/js/jquery/jquery90f9.js?ver=1.11.1'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/jquery-migrate.min1576.js?ver=1.2.1'></script>

 
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.1.1" />
<link rel='canonical' href='index.html' />
<link rel='shortlink' href='http://wp.me/P4Cc4d-7' />

<!-- Jetpack Open Graph Tags -->
<meta property="og:type" content="article" />
<meta property="og:title" content="Portfolio" />
<meta property="og:url" content="http://razonartificial.com/themes/openmind/wordpress/portfolio/" />
<meta property="og:description" content="Visit the post for more." />
<meta property="article:published_time" content="2014-05-18T02:57:26+00:00" />
<meta property="article:modified_time" content="2014-05-18T02:57:26+00:00" />
<meta property="article:author" content="http://razonartificial.com/themes/openmind/wordpress/author/adrigm/" />
<meta property="og:site_name" content="Open Mind" />
<meta property="og:image" content="https://s0.wp.com/i/blank.jpg" />
<meta name="twitter:site" content="@jetpack" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Visit the post for more." />
<style type="text/css" id="syntaxhighlighteranchor"></style>
</head>

<body>
<div class="boxed">
<header id="header" class="hidden-xs">
    <div class="container">
        <div id="header-title">
            <h1 class="animated fadeInDown">Debate <font color="red">Club</font></a></h1>
            <p class="animated fadeInLeft">Don't Raise Your Voice,Improve Your Argument</p>
        </div>
        <div id="search-header" class="hidden-xs animated fadeInRight">
            <img src="../daiict.jpg" alt="icon" style="width:370px;height:90px">
        </div>
    </div> <!-- container -->
</header> <!-- header -->

<nav class="navbar navbar-static-top navbar-mind" role="navigation">
    <div class="container">
        
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-mind-collapse">
            <ul id="menu-mainmenu" class="nav navbar-nav">
                <li id="menu-item-1" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children">
                    <a title="Home" href="../homepage2.php">Home</a>
                </li>
                
                <ul role="menu" class=" dropdown-menu"></ul>
                <li id="menu-item-4" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4 dropdown"><a title="Forums" href="#" data-toggle="dropdown" class="dropdown-toggle">Forums <span class="caret"></span></a>
                    <ul role="menu" class=" dropdown-menu">
                        <li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20">
                            <a title="addforum" href="../forums/add-forum.php">Add Forum</a>
                        </li>
                        <li id="menu-item-21" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21">
                                <a title="forum" href="../forums/forums2.php">View Forum </a>
                        </li>
                    </ul>
                </li>
            
                 <ul role="menu" class=" dropdown-menu"></ul>
                <li id="menu-item-30" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-30 dropdown"><a title="Blog" href="#" data-toggle="dropdown" class="dropdown-toggle">Blogs <span class="caret"></span></a>
                    <ul role="menu" class=" dropdown-menu">
                        <li id="menu-item-31" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31">
                            <a title="addblog" href="../blog/add-blog1.php">Add a blog</a>
                        </li>
                        <li id="menu-item-41" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41">
                                <a title="viewblog" href="../blog/blog2.php">View Blogs</a>
                        </li>
                    </ul>
                </li>
                
                <ul role="menu" class=" dropdown-menu"></ul>
                <li id="menu-item-22" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-22 dropdown"><a title="Polling" href="#" data-toggle="dropdown" class="dropdown-toggle">Polling <span class="caret"></span></a>
                    <ul role="menu" class=" dropdown-menu">
                        <li id="menu-item-23" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23">
                            <a title="Addpoll" href="../polling/add-polling.php">Add Polling</a>
                        </li>
                        <li id="menu-item-24" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24">
                                <a title="Poll" href="../polling/polling2.php">View Poll</a>
                        </li>
                    </ul>
                </li>
            
            
                <ul role="menu" class=" dropdown-menu"></ul>
                <li id="menu-item-25" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-25 dropdown"><a title="events" href="#" data-toggle="dropdown" class="dropdown-toggle">Events <span class="caret"></span></a>
                    <ul role="menu" class=" dropdown-menu">
                        <li id="menu-item-26" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26">
                            <a title="Addevent" href="../events/add-event.php">Add Event</a>
                        </li>
                        <li id="menu-item-27" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27">
                                <a title="Event" href="../events/events2.php">View Event</a>
                        </li>
                    </ul>
                </li>    
                <li id="menu-item-9" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9">
                    <a title="Tabbing" href="tabbing2.php">Tabbing</a>
                </li>
                
                <li id="menu-item-10" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10">
                    <a title="Senate" href="../senate/senate2.php">Senate</a>
                </li>
                
                <li id="menu-item-11" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11">
                    <a title="Topic" href="../topic/topic2.php">Debate Topic</a>
                </li>

                <li id="menu-item-11" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11">
                    <a title="Topic" href="../leader-board/leader-board2.php">Leader-Board</a>
                </li>

                <li id="menu-item-11" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11">
                    <a title="Topic" href="../manage-user/manage-user.php">Manage User</a>
                </li>
                
                
                <li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-12 dropdown">
                    <a title="About Us" href="#" data-toggle="dropdown" class="dropdown-toggle">About Us <span class="caret"></span></a>
            
            <ul role="menu" class=" dropdown-menu">
                <li id="menu-item-13" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13">
                    <a title="Debate Club Details" href="../club/club2.php">Debate Club Details</a>
                </li>
                
                <li id="menu-item-14" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14">
                    <a title="Members" href="../members/front-page2.php">Members</a>
                </li>
            </ul>
    </ul>
            
            <ul class="nav navbar-nav navbar-right">
              <li class="profile-info dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src = "../profile_pic/<?php echo $user->u_photo ;?>" alt="" class="img-circle" width="44" />
                      <?php   
                        echo $_SESSION['u_name'];
                      ?>
                  </a>
        
                <ul class="dropdown-menu">
          
                    <li>
                      <a href="../change-profile/edit-profile1.php">
                        <i class="entypo-user"></i>
                        Edit Profile
                      </a>
                    </li>
                    
                    <li>
                      <a href="../change-profile/edit-password1.php">
                        <i class="entypo-lock"></i>
                        Edit Password
                      </a>
                    </li>
              
                    <li>
                      <a href="../change-profile/upload-pic1.php">
                        <i class="entypo-user"></i>
                        Edit Picture
                      </a>
                    </li>

                    <li>
                        <a href="../login/check_login.php?action=logout">Log Out </a> <i class="entypo-logout right"></i>
                    </li>
              
              </ul>
            </li>
          </ul> <!-- nav nabvar-nav -->
        </div><!-- navbar-collapse -->
    </div> <!-- container -->
</nav> <!-- navbar navbar-default -->


<header class="wrap-title">
    <div class="container">
        <h1 class="page-title">TEAM 1</h1>
    </div>
</header>


            <?php
                $get=mysql_query("SELECT u_name FROM user");
                $option = '';
                while($row = mysql_fetch_assoc($get))
                {
                $option .= '<option value = "'.$row['u_name'].'">'.$row['u_name'].'</option>';
                }
            ?>
<div class="container" align="center">

<form action="tabbing2.php" method="post">
    <div class="row">            
            <div class="col-md-6">
                <h2>TEAM 1</h2>
                    <div class="row">
                    <select name="o1" id="option1" style="height:40px;width:100px">
                    <?php echo $option; ?>
                    </select>
                    <button type="button" id="opt1" onClick="f()">Confirm</button>
                    </div>
                    </br>

                    <div class="row">
                    <select name="o2" id="option2" style="height:40px;width:100px">
                    <?php echo $option; ?>
                    </select>
                    <button type="button" id="opt2" onClick="f1()">Confirm</button>
                    </div>
                    </br>

                    <div class="row">
                    <select name="o3" id="option3" style="height:40px;width:100px">
                    <?php echo $option; ?>
                    </select>
                    <button type="button" id="opt3" onClick="f2()">Confirm</button>
                    </div>
                    </br>
                    </br>
                    </br>
            </div>
            <div class="col-md-6">
                    <h2>TEAM 2</h2>
                    <div class="row">
                    <select name="o4" id="option4" style="height:40px;width:100px">
                    <?php echo $option; ?>
                    </select>
                    <button type="button" id="opt4" onClick="f3()">Confirm</button>
                    </div>
                    </br>

                    <div class="row">
                    <select name="o5" id="option5" style="height:40px;width:100px">
                    <?php echo $option; ?>
                    </select>
                    <button type="button" id="opt5" onClick="f4()">Confirm</button>
                    </div>
                    </br>

                     <div class="row">
                    <select name="o6" id="option6" style="height:40px;width:100px">
                    <?php echo $option; ?>
                    </select>
                    <button type="button" id="opt6" onClick="f5()">Confirm</button>
                    </div>
                    </br>
                    </br>
                    </br>
            </div>
            <div class="col-md-6">
                    <h2>TEAM 3</h2>
                    <div class="row">
                    <select name="o7" id="option7" style="height:40px;width:100px">
                    <?php echo $option; ?>
                    </select>
                    <button type="button" id="opt7"  onClick="f6()">Confirm</button>
                    </div>
                    </br>

                    <div class="row">
                    <select name="o8" id="option8" style="height:40px;width:100px">
                    <?php echo $option; ?>
                    </select>
                    <button type="button" id="opt8" onClick="f7()">Confirm</button>
                    </div>
                    </br>

                    <div class="row">
                    <select name="o9" id="option9" style="height:40px;width:100px">
                    <?php echo $option; ?>
                    </select>
                    <button type="button" id="opt9" onClick="f8()">Confirm</button>
                    </div>
                    </br>
                    </br>
                    </br>
            </div>
            <div class="col-md-6">
                    <h2>TEAM 4</h2>
                    <div class="row">
                    <select name="o10" id="option10" style="height:40px;width:100px">
                    <?php echo $option; ?>
                    </select>
                    <button type="button" id="opt10" onClick="f9()">Confirm</button>
                    </div>
                    </br>

                    <div class="row">
                    <select name="o11" id="option11" style="height:40px;width:100px">
                    <?php echo $option; ?>
                    </select>
                    <button type="button" id="opt11"  onClick="f10()">Confirm</button>
                    </div>
                    </br>

                    <div class="row">
                    <select name="o12" id="option12" style="height:40px;width:100px">
                    <?php echo $option; ?>
                    </select>
                    <button type="button" id="opt12" onClick="f11()">Confirm</button>
                    </div>
                    </br>
                    </br>
                    </br>
            </div>
            <div class="col-md-6">
                    <h2>TEAM 5</h2>
                    <div class="row">
                    <select name="o13" id="option13" style="height:40px;width:100px">
                    <?php echo $option; ?>
                    </select>
                    <button type="button" id="opt13" onClick="f12()">Confirm</button>
                    </div>
                    </br>

                    <div class="row">
                    <select name="o14" id="option14" style="height:40px;width:100px">
                    <?php echo $option; ?>
                    </select>
                    <button type="button" id="opt14" onClick="f13()">Confirm</button>
                    </div>
                    </br>

                    <div class="row">
                    <select name="o15" id="option15" style="height:40px;width:100px">
                    <?php echo $option; ?>
                    </select>
                    <button type="button" id="opt15" onClick="f14()">Confirm</button>
                    </div>
                    </br>
                    </br>
                    </br>
            </div>
            <div class="col-md-6">
                    <h2>TEAM 6</h2>
                    <div class="row">
                    <select name="o16" id="option16" style="height:40px;width:100px">
                    <?php echo $option; ?>
                    </select>
                    <button type="button" id="opt16" onClick="f15()">Confirm</button>
                    </div>
                    </br>

                    <div class="row">
                    <select name="o17" id="option17" style="height:40px;width:100px">
                    <?php echo $option; ?>
                    </select>
                    <button type="button" id="opt17"  onClick="f16()">Confirm</button>
                    </div>
                    </br>

                    <div class="row">
                    <select name="o18" id="option18" style="height:40px;width:100px">
                    <?php echo $option; ?>
                    </select>
                    <button type="button" id="opt18" onClick="f17()">Confirm</button>
                    </div>
                    </br>
                    </br>
                    </br>
            </div>
        </div>
<br>
<br>
<br>
<div style="width:100%;height:100%;position:absolute;vertical-align:middle;text-align:center;">
            <button type="submit" name="submit">Submit</button><br/>

</form>
</div> <!-- container -->
 <script type="text/javascript">
            var x0 = document.getElementById("option1");
            function f()
            {
                var x1 = document.getElementById("option2");
                x1.remove(x0.selectedIndex);
                document.getElementById("opt1").style.display="none";
                
            }
            function f1()
            {
                var x1 = document.getElementById("option2");
                var x2 = document.getElementById("option3");
                x2.remove(x0.selectedIndex);
                x2.remove(x1.selectedIndex);
                document.getElementById("opt2").style.display="none";
            }
            function f2()
            {
                var x1 = document.getElementById("option2");
                var x2 = document.getElementById("option3");
                var x3 = document.getElementById("option4");
                x3.remove(x0.selectedIndex);
                x3.remove(x1.selectedIndex);
                x3.remove(x2.selectedIndex);
                document.getElementById("opt3").style.display="none";
            }
            function f3()
            {
                var x1 = document.getElementById("option2");
                var x2 = document.getElementById("option3");
                var x3 = document.getElementById("option4");
                var x4 = document.getElementById("option5");
                x4.remove(x0.selectedIndex);
                x4.remove(x1.selectedIndex);
                x4.remove(x2.selectedIndex);
                x4.remove(x3.selectedIndex);
                document.getElementById("opt4").style.display="none";
            }
            function f4()
            {
                var x1 = document.getElementById("option2");
                var x2 = document.getElementById("option3");
                var x3 = document.getElementById("option4");
                var x4 = document.getElementById("option5");
                var x5 = document.getElementById("option6");
                x5.remove(x0.selectedIndex);
                x5.remove(x1.selectedIndex);
                x5.remove(x2.selectedIndex);
                x5.remove(x3.selectedIndex);
                x5.remove(x4.selectedIndex);
                document.getElementById("opt5").style.display="none";
            }
            function f5()
            {
                var x1 = document.getElementById("option2");
                var x2 = document.getElementById("option3");
                var x3 = document.getElementById("option4");
                var x4 = document.getElementById("option5");
                var x5 = document.getElementById("option6");
                var x6 = document.getElementById("option7");
                x6.remove(x0.selectedIndex);
                x6.remove(x1.selectedIndex);
                x6.remove(x2.selectedIndex);
                x6.remove(x3.selectedIndex);
                x6.remove(x4.selectedIndex);
                x6.remove(x5.selectedIndex);
                document.getElementById("opt6").style.display="none";
            }
            function f6()
            {
                var x1 = document.getElementById("option2");
                var x2 = document.getElementById("option3");
                var x3 = document.getElementById("option4");
                var x4 = document.getElementById("option5");
                var x5 = document.getElementById("option6");
                var x6 = document.getElementById("option7");
                var x7 = document.getElementById("option8");
                x7.remove(x0.selectedIndex);
                x7.remove(x1.selectedIndex);
                x7.remove(x2.selectedIndex);
                x7.remove(x3.selectedIndex);
                x7.remove(x4.selectedIndex);
                x7.remove(x5.selectedIndex);
                x7.remove(x6.selectedIndex);
                document.getElementById("opt7").style.display="none";
            }
            function f7()
            {
                var x1 = document.getElementById("option2");
                var x2 = document.getElementById("option3");
                var x3 = document.getElementById("option4");
                var x4 = document.getElementById("option5");
                var x5 = document.getElementById("option6");
                var x6 = document.getElementById("option7");
                var x7 = document.getElementById("option8");
                var x8 = document.getElementById("option9");
                x8.remove(x0.selectedIndex);
                x8.remove(x1.selectedIndex);
                x8.remove(x2.selectedIndex);
                x8.remove(x3.selectedIndex);
                x8.remove(x4.selectedIndex);
                x8.remove(x5.selectedIndex);
                x8.remove(x6.selectedIndex);
                x8.remove(x7.selectedIndex);
                document.getElementById("opt8").style.display="none";
            }
            function f8()
            {
                var x1 = document.getElementById("option2");
                var x2 = document.getElementById("option3");
                var x3 = document.getElementById("option4");
                var x4 = document.getElementById("option5");
                var x5 = document.getElementById("option6");
                var x6 = document.getElementById("option7");
                var x7 = document.getElementById("option8");
                var x8 = document.getElementById("option9");
                var x9 = document.getElementById("option10");
                x9.remove(x0.selectedIndex);
                x9.remove(x1.selectedIndex);
                x9.remove(x2.selectedIndex);
                x9.remove(x3.selectedIndex);
                x9.remove(x4.selectedIndex);
                x9.remove(x5.selectedIndex);
                x9.remove(x6.selectedIndex);
                x9.remove(x7.selectedIndex);
                x9.remove(x8.selectedIndex);
                document.getElementById("opt9").style.display="none";
            }
            function f9()
            {
                var x1 = document.getElementById("option2");
                var x2 = document.getElementById("option3");
                var x3 = document.getElementById("option4");
                var x4 = document.getElementById("option5");
                var x5 = document.getElementById("option6");
                var x6 = document.getElementById("option7");
                var x7 = document.getElementById("option8");
                var x8 = document.getElementById("option9");
                var x9 = document.getElementById("option10");
                var x10 = document.getElementById("option11");
                x10.remove(x0.selectedIndex);
                x10.remove(x1.selectedIndex);
                x10.remove(x2.selectedIndex);
                x10.remove(x3.selectedIndex);
                x10.remove(x4.selectedIndex);
                x10.remove(x5.selectedIndex);
                x10.remove(x6.selectedIndex);
                x10.remove(x7.selectedIndex);
                x10.remove(x8.selectedIndex);
                x10.remove(x9.selectedIndex);
                document.getElementById("opt10").style.display="none";
            }
            function f10()
            {
                var x1 = document.getElementById("option2");
                var x2 = document.getElementById("option3");
                var x3 = document.getElementById("option4");
                var x4 = document.getElementById("option5");
                var x5 = document.getElementById("option6");
                var x6 = document.getElementById("option7");
                var x7 = document.getElementById("option8");
                var x8 = document.getElementById("option9");
                var x9 = document.getElementById("option10");
                var x10 = document.getElementById("option11");
                var x11 = document.getElementById("option12");
                x11.remove(x0.selectedIndex);
                x11.remove(x1.selectedIndex);
                x11.remove(x2.selectedIndex);
                x11.remove(x3.selectedIndex);
                x11.remove(x4.selectedIndex);
                x11.remove(x5.selectedIndex);
                x11.remove(x6.selectedIndex);
                x11.remove(x7.selectedIndex);
                x11.remove(x8.selectedIndex);
                x11.remove(x9.selectedIndex);
                x11.remove(x10.selectedIndex);
                document.getElementById("opt11").style.display="none";
            }
            function f11()
            {
                var x1 = document.getElementById("option2");
                var x2 = document.getElementById("option3");
                var x3 = document.getElementById("option4");
                var x4 = document.getElementById("option5");
                var x5 = document.getElementById("option6");
                var x6 = document.getElementById("option7");
                var x7 = document.getElementById("option8");
                var x8 = document.getElementById("option9");
                var x9 = document.getElementById("option10");
                var x10 = document.getElementById("option11");
                var x11 = document.getElementById("option12"); 
                var x12 = document.getElementById("option13");
                x12.remove(x0.selectedIndex);
                x12.remove(x1.selectedIndex);
                x12.remove(x2.selectedIndex);
                x12.remove(x3.selectedIndex);
                x12.remove(x4.selectedIndex);
                x12.remove(x5.selectedIndex);
                x12.remove(x6.selectedIndex);
                x12.remove(x7.selectedIndex);
                x12.remove(x8.selectedIndex);
                x12.remove(x9.selectedIndex);
                x12.remove(x10.selectedIndex);
                x12.remove(x11.selectedIndex);
                document.getElementById("opt12").style.display="none";
            }
            function f12()
            {
                var x1 = document.getElementById("option2");
                var x2 = document.getElementById("option3");
                var x3 = document.getElementById("option4");
                var x4 = document.getElementById("option5");
                var x5 = document.getElementById("option6");
                var x6 = document.getElementById("option7");
                var x7 = document.getElementById("option8");
                var x8 = document.getElementById("option9");
                var x9 = document.getElementById("option10");
                var x10 = document.getElementById("option11");
                var x11 = document.getElementById("option12"); 
                var x12 = document.getElementById("option13");
                var x13 = document.getElementById("option14");
                x13.remove(x0.selectedIndex);
                x13.remove(x1.selectedIndex);
                x13.remove(x2.selectedIndex);
                x13.remove(x3.selectedIndex);
                x13.remove(x4.selectedIndex);
                x13.remove(x5.selectedIndex);
                x13.remove(x6.selectedIndex);
                x13.remove(x7.selectedIndex);
                x13.remove(x8.selectedIndex);
                x13.remove(x9.selectedIndex);
                x13.remove(x10.selectedIndex);
                x13.remove(x11.selectedIndex);
                x13.remove(x12.selectedIndex);
                document.getElementById("opt13").style.display="none";
            }
            function f13()
            {
                var x1 = document.getElementById("option2");
                var x2 = document.getElementById("option3");
                var x3 = document.getElementById("option4");
                var x4 = document.getElementById("option5");
                var x5 = document.getElementById("option6");
                var x6 = document.getElementById("option7");
                var x7 = document.getElementById("option8");
                var x8 = document.getElementById("option9");
                var x9 = document.getElementById("option10");
                var x10 = document.getElementById("option11");
                var x11 = document.getElementById("option12"); 
                var x12 = document.getElementById("option13");
                var x13 = document.getElementById("option14");
                var x14 = document.getElementById("option15");
                x14.remove(x0.selectedIndex);
                x14.remove(x1.selectedIndex);
                x14.remove(x2.selectedIndex);
                x14.remove(x3.selectedIndex);
                x14.remove(x4.selectedIndex);
                x14.remove(x5.selectedIndex);
                x14.remove(x6.selectedIndex);
                x14.remove(x7.selectedIndex);
                x14.remove(x8.selectedIndex);
                x14.remove(x9.selectedIndex);
                x14.remove(x10.selectedIndex);
                x14.remove(x11.selectedIndex);
                x14.remove(x12.selectedIndex);
                x14.remove(x13.selectedIndex);
                document.getElementById("opt14").style.display="none";
            }
            function f14()
            {
                var x1 = document.getElementById("option2");
                var x2 = document.getElementById("option3");
                var x3 = document.getElementById("option4");
                var x4 = document.getElementById("option5");
                var x5 = document.getElementById("option6");
                var x6 = document.getElementById("option7");
                var x7 = document.getElementById("option8");
                var x8 = document.getElementById("option9");
                var x9 = document.getElementById("option10");
                var x10 = document.getElementById("option11");
                var x11 = document.getElementById("option12"); 
                var x12 = document.getElementById("option13");
                var x13 = document.getElementById("option14");
                var x14 = document.getElementById("option15");
                var x15 = document.getElementById("option16");
                x15.remove(x0.selectedIndex);
                x15.remove(x1.selectedIndex);
                x15.remove(x2.selectedIndex);
                x15.remove(x3.selectedIndex);
                x15.remove(x4.selectedIndex);
                x15.remove(x5.selectedIndex);
                x15.remove(x6.selectedIndex);
                x15.remove(x7.selectedIndex);
                x15.remove(x8.selectedIndex);
                x15.remove(x9.selectedIndex);
                x15.remove(x10.selectedIndex);
                x15.remove(x11.selectedIndex);
                x15.remove(x12.selectedIndex);
                x15.remove(x13.selectedIndex);
                x15.remove(x14.selectedIndex);
                document.getElementById("opt15").style.display="none";
            }
            function f15()
            {
                var x1 = document.getElementById("option2");
                var x2 = document.getElementById("option3");
                var x3 = document.getElementById("option4");
                var x4 = document.getElementById("option5");
                var x5 = document.getElementById("option6");
                var x6 = document.getElementById("option7");
                var x7 = document.getElementById("option8");
                var x8 = document.getElementById("option9");
                var x9 = document.getElementById("option10");
                var x10 = document.getElementById("option11");
                var x11 = document.getElementById("option12"); 
                var x12 = document.getElementById("option13");
                var x13 = document.getElementById("option14");
                var x14 = document.getElementById("option15");
                var x15 = document.getElementById("option16");
                var x16 = document.getElementById("option17");
                x16.remove(x0.selectedIndex);
                x16.remove(x1.selectedIndex);
                x16.remove(x2.selectedIndex);
                x16.remove(x3.selectedIndex);
                x16.remove(x4.selectedIndex);
                x16.remove(x5.selectedIndex);
                x16.remove(x6.selectedIndex);
                x16.remove(x7.selectedIndex);
                x16.remove(x8.selectedIndex);
                x16.remove(x9.selectedIndex);
                x16.remove(x10.selectedIndex);
                x16.remove(x11.selectedIndex);
                x16.remove(x12.selectedIndex);
                x16.remove(x13.selectedIndex);
                x16.remove(x14.selectedIndex);
                x16.remove(x15.selectedIndex);
                document.getElementById("opt16").style.display="none";
            }
            function f16()
            {
                var x1 = document.getElementById("option2");
                var x2 = document.getElementById("option3");
                var x3 = document.getElementById("option4");
                var x4 = document.getElementById("option5");
                var x5 = document.getElementById("option6");
                var x6 = document.getElementById("option7");
                var x7 = document.getElementById("option8");
                var x8 = document.getElementById("option9");
                var x9 = document.getElementById("option10");
                var x10 = document.getElementById("option11");
                var x11 = document.getElementById("option12"); 
                var x12 = document.getElementById("option13");
                var x13 = document.getElementById("option14");
                var x14 = document.getElementById("option15");
                var x15 = document.getElementById("option16");
                var x16 = document.getElementById("option17");
                var x17 = document.getElementById("option18");
                x17.remove(x0.selectedIndex);
                x17.remove(x1.selectedIndex);
                x17.remove(x2.selectedIndex);
                x17.remove(x3.selectedIndex);
                x17.remove(x4.selectedIndex);
                x17.remove(x5.selectedIndex);
                x17.remove(x6.selectedIndex);
                x17.remove(x7.selectedIndex);
                x17.remove(x8.selectedIndex);
                x17.remove(x9.selectedIndex);
                x17.remove(x10.selectedIndex);
                x17.remove(x11.selectedIndex);
                x17.remove(x12.selectedIndex);
                x17.remove(x13.selectedIndex);
                x17.remove(x14.selectedIndex);
                x17.remove(x15.selectedIndex);
                x17.remove(x16.selectedIndex);
                document.getElementById("opt17").style.display="none";
            }
            function f17()
            {
                document.getElementById("opt18").style.display="none";
            }
            </script>

<div class="container">

    <div class="row" id="Grid">
       <p><br></p>
       <p><br></p>
       <p><br></p>
       <p><br></p>
       <p><br></p>
       <p><br></p>
       <p><br></p>
       <p><br></p>
       <p><br></p>
       <p><br></p>
       <p><br></p>                        
    </div>

   
    </div> <!-- container -->

<aside id="footer-widgets">
    <div class="container">
        <div class="row">
            
                <div class="col-md-4">
                    <h3 class="footer-widget-title">Sitemap</h3>
                        <li id="menu-item-16" class="menu-item menu-item-type-post_type menu-item-object-page current_page_parent menu-item-16">
                            <a href="../contact/contact2.php">Contact Us</a>
                        </li>
                        
                        <li id="menu-item-17" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17">
                            <a href="../faq/faq2.php">Frequently Asked Questions</a>
                        </li>

                    
                </div>
            </div> <!-- row -->
    </div> <!-- container -->
</aside> <!-- footer-widgets -->


</div> <!-- boxed -->

<div id="back-top">
    <a href="#header"><i class="fa fa-chevron-up"></i></a>
</div>

    <!-- Scripts -->
    <script src="../wp-content/themes/openmind/js/jquery-1.10.2.min.js"></script>
    <script src="../wp-content/themes/openmind/js/jquery.cookie.js"></script>
    <script src="../wp-content/themes/openmind/js/bootstrap.min.js"></script>
    <script src="../wp-content/themes/openmind/js/jquery.mixitup.min.js"></script>
    <script src="../wp-content/themes/openmind/js/lightbox-2.6.min.js"></script>
    <script src="../wp-content/themes/openmind/js/holder.js"></script>
    <script src="../wp-content/themes/openmind/js/app.js"></script>

    <script>
        if($.cookie("color-wp")) {
            $("link[href|='http://razonartificial.com/themes/openmind/wordpress/wp-content/themes/openmind/css/color']").attr("href","http://razonartificial.com/themes/openmind/wordpress/wp-content/themes/openmind/css/" + $.cookie("color-wp"));
        }

        if($.cookie("width-wp")) {
            $("link[href|='http://razonartificial.com/themes/openmind/wordpress/wp-content/themes/openmind/css/width']").attr("href","http://razonartificial.com/themes/openmind/wordpress/wp-content/themes/openmind/css/" + $.cookie("width-wp"));
        }

        $(document).ready(function() { 
            $("#color-switcher-content .color").click(function() { 
                $("link[href|='http://razonartificial.com/themes/openmind/wordpress/wp-content/themes/openmind/css/color']").attr("href", "http://razonartificial.com/themes/openmind/wordpress/wp-content/themes/openmind/css/" + $(this).attr('rel'));
                $.cookie("color-wp",$(this).attr('rel'), {expires: 7, path: '/'});
                return false;
            });

            $("#color-switcher-content .option").click(function() { 
                $("link[href|='http://razonartificial.com/themes/openmind/wordpress/wp-content/themes/openmind/css/width']").attr("href", "http://razonartificial.com/themes/openmind/wordpress/wp-content/themes/openmind/css/" + $(this).attr('rel'));
                console.log('test');
                $.cookie("width-wp",$(this).attr('rel'), {expires: 7, path: '/'});
                return false;
            });
        });
    </script>

<script type='text/javascript' src='../wp-includes/js/comment-reply.min0235.js?ver=4.1.1'></script>
<script type='text/javascript' src='../../../../../s0.wp.com/wp-content/js/devicepx-jetpack8aa1.js?ver=201512'></script>

	<script src="../../../../../stats.wp.com/e-201512.js" type="text/javascript"></script>
	<script type="text/javascript">
	st_go({v:'ext',j:'1:3.3',blog:'68208197',post:'7',tz:'0'});
	var load_cmc = function(){linktracker_init(68208197,7,2);};
	if ( typeof addLoadEvent != 'undefined' ) addLoadEvent(load_cmc);
	else load_cmc();
	</script>
<script>
    window.location.refresh()
</script>

</body>


<!-- Mirrored from razonartificial.com/themes/openmind/wordpress/portfolio/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Mar 2015 20:12:17 GMT -->
</html>
