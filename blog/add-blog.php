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

<link rel='stylesheet' id='bootstrap-fa-icon-css'  href='../wp-content/plugins/easy-bootstrap-shortcodes/styles/font-awesome.min0235.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='ebs_dynamic_css-css'  href='../wp-content/plugins/easy-bootstrap-shortcodes/styles/ebs_dynamic_css0235.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='jetpack_css-css'  href='../wp-content/plugins/jetpack/css/jetpack6de8.css?ver=3.3' type='text/css' media='all' />
<script type='text/javascript' src='../wp-includes/js/jquery/jquery90f9.js?ver=1.11.1'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/jquery-migrate.min1576.js?ver=1.2.1'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.1.1" />

<!-- Jetpack Open Graph Tags -->
<meta property="og:type" content="website" />
<meta property="og:title" content="Open Mind" />
<meta property="og:description" content="Clean and elegant theme" />
<meta property="og:url" content="http://razonartificial.com/themes/openmind/wordpress/blog/" />
<meta property="og:site_name" content="Open Mind" />
<meta property="og:image" content="https://s0.wp.com/i/blank.jpg" />
<meta name="twitter:site" content="@jetpack" />
<style type="text/css" id="syntaxhighlighteranchor"></style>
<script language="javascript" type="text/javascript">
    
function btopic_validate()
  {
     if(document.getElementById("btopic").value.length==0)
     {
        
        document.getElementById("err_btopic").innerHTML="!! PLEASE WRITE THE TOPIC !!";
     }
     else
     {document.getElementById("err_btopic").innerHTML="";}
  }
  function bdescription_validate()
  {
     if(document.getElementById("bdescription").value.length==0)
     {
        
        document.getElementById("err_bdescription").innerHTML="!! PLEASE WRITE THE Description !!";
     }
     else
     {document.getElementById("err_bdescription").innerHTML="";}
  }
  function bcategory_validate()
  {
     if(document.getElementById("bcategory").value.length==0)
     {
        
        document.getElementById("err_bcategory").innerHTML="!! PLEASE WRITE THE Category !!";
     }
     else
     {document.getElementById("err_bcategory").innerHTML="";}
  }
  function final1_check()
    {
        if(document.getElementById('err_btopic').innerHTML!="")
        {
            alert("OOPS! YOU DID NOT ENTER Topic.");
            return false
        }
        else if(document.getElementById('err_bdescription').innerHTML!="")
        {
            alert("OOPS! YOU DID NOT ENTER Description.");
            return false
        }
        else if(document.getElementById('err_bcategory').innerHTML!="")
        {
            alert("OOPS! YOU DID NOT ENTER Category.");
            return false
        }
        else
        {
            return true;
        }


    }
  </script>
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
                    <a title="Home" href="../homepage1.php">Home</a>
                </li>
                
                <li id="menu-item-5" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5">
                    <a title="Forums" href="../forums/forums1.php">Forums</a>
                </li>

                <ul role="menu" class=" dropdown-menu"></ul>
                <li id="menu-item-30" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-30 dropdown"><a title="Blog" href="#" data-toggle="dropdown" class="dropdown-toggle">Blogs <span class="caret"></span></a>
                    <ul role="menu" class=" dropdown-menu">
                        <li id="menu-item-31" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31">
                            <a title="addblog" href="add-blog.php">Add a blog</a>
                        </li>
                        <li id="menu-item-41" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41">
                                <a title="viewblog" href="../blog/blog1.php">View Blogs</a>
                        </li>
                    </ul>
                </li>
            
                
                <li id="menu-item-7" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7">
                    <a title="Polling" href="../polling/polling1.php">Polling</a>
                </li>
                
                <li id="menu-item-8" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8">
                    <a title="Events" href="../events/events1.php">Events</a>
                </li>
                
                <li id="menu-item-9" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9">
                    <a title="Tabbing" href="../tabbing/tabbing1.php">Tabbing</a>
                </li>
                
                <li id="menu-item-10" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10">
                    <a title="Senate" href="../senate/senate1.php">Senate</a>
                </li>
                
                <li id="menu-item-11" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11">
                    <a title="Topic" href="../topic/topic1.php">Debate Topic</a>
                </li>

                <li id="menu-item-11" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11">
                    <a title="Topic" href="../leader-board/leader-board1.php">Leader-Board</a>
                </li>
                
                <li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-12 dropdown">
                    <a title="About Us" href="#" data-toggle="dropdown" class="dropdown-toggle">About Us <span class="caret"></span></a>
            
            <ul role="menu" class=" dropdown-menu">
                <li id="menu-item-13" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13">
                    <a title="Debate Club Details" href="../club/club1.php">Debate Club Details</a>
                </li>
                
                <li id="menu-item-14" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14">
                    <a title="Members" href="../members/front-page1.php">Members</a>
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
        <h1 class="page-title">Add Blog</h1>
    </div>
</header>



<div class="panel panel-primary">

  <div class="panel-heading">
    <div class="panel-title">Enter Details</div>
    <div class="panel-options">
      <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
    </div>
  </div>
  
  <div class="panel-body">
  
    <form role="form" id="form1" method="post" class="validate" action="insertblog.php" onSubmit="return final1_check()">
      
      <div class="form-group" >
        <label for="field-1" class="control-label">Topic :</label>
        <br />
        <div class="col-sm-5">
          <input type="text" class="form-control"  name="btopic" id="btopic"  onBlur="btopic_validate()" required>  
        </div>
        <div id="err_btopic" style="color:#F03"></div>
      </div>
      <br /><br /><br />
      
      
      <div class="form-group" >
        <label for="field-1" class="control-label">Description :</label>
        <br />
        <div class="col-sm-15">
        <textarea name="bdescription" cols="150" rows="10" id="bdescription" onBlur="bdescription_validate()" required></textarea><br />
        </div>
         <div id="err_bdescription" style="color:#F03"></div>
      </div>
      </div>
      <br /><br /><br />
      
  
      <div class="form-group" >
        <label for="field-1" class="control-label">Category :</label>
        <br />
        <div class="col-sm-5">
        <input type="text" class="form-control" name="bcategory" id="bcategory" onBlur="bcategory_validate()" required>
        </div>
        <div id="err_bcategory" style="color:#F03"></div>
      </div>
      </div>
      <br /><br /><br />
      
      
      <div class="form-group">
        <button type="submit" name="addblog" class="btn btn-success">Add a blog</button>
        <button type="button" class="btn" onClick="window.location.assign('../homepage1.php')">Cancel </button>
      </div>

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
       <p><br></p>
                        
    </div>

   
    </div> <!-- container -->


    </form>
  
  </div>  
</div>




<aside id="footer-widgets">
    <div class="container">
        <div class="row">
            
                <div class="col-md-4">
                    <h3 class="footer-widget-title">Sitemap</h3>
                        <li id="menu-item-16" class="menu-item menu-item-type-post_type menu-item-object-page current_page_parent menu-item-16">
                            <a href="../contact/contact1.php">Contact Us</a>
                        </li>
                        
                        <li id="menu-item-17" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17">
                            <a href="../faq/faq1.php">Frequently Asked Questions</a>
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

<script type='text/javascript' src='../../../../../s0.wp.com/wp-content/js/devicepx-jetpack8aa1.js?ver=201512'></script>

  <script src="../../../../../stats.wp.com/e-201512.js" type="text/javascript"></script>
  <script type="text/javascript">
  st_go({v:'ext',j:'1:3.3',blog:'68208197',post:'4',tz:'0'});
  var load_cmc = function(){linktracker_init(68208197,4,2);};
  if ( typeof addLoadEvent != 'undefined' ) addLoadEvent(load_cmc);
  else load_cmc();
  </script>
<script>
    window.location.refresh()
</script>

</body>


<!-- Mirrored from razonartificial.com/themes/openmind/wordpress/blog/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Mar 2015 20:11:33 GMT -->
</html>
