
<!DOCTYPE html>
<html  lang="en-US">
<?php
        require_once('includes/initialize.php');
    //Load Session details...
    if (! $session->is_logged_in() )
        session_start();
    
    if( ! isset($_SESSION['u_id']) )
        redirect_to('../homepage.php');

    $user=Users::find_by_id($_SESSION['u_id']);
?>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Debate Club</title>

    <!-- CSS -->
    <link href="wp-content/themes/openmind/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="wp-content/themes/openmind/css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href="wp-content/themes/openmind/css/animate.min.css" rel="stylesheet" media="screen">
    <link href="wp-content/themes/openmind/css/lightbox.css" rel="stylesheet" media="screen">
    <link href="wp-content/themes/openmind/style.css" rel="stylesheet" media="screen">
    <link href="wp-content/themes/openmind/css/color-niceblue.css" rel="stylesheet" media="screen" title="default">
    <link href="wp-content/themes/openmind/css/width-full.css" rel="stylesheet" media="screen" title="default">


<link rel="alternate" type="application/rss+xml" title="Open Mind &raquo; Home Option 1 Comments Feed" href="home-option-1/feed/index.html" />
<link rel='stylesheet' id='bootstrap-fa-icon-css'  href='wp-content/plugins/easy-bootstrap-shortcodes/styles/font-awesome.min0235.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='ebs_dynamic_css-css'  href='wp-content/plugins/easy-bootstrap-shortcodes/styles/ebs_dynamic_css0235.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='jetpack_css-css'  href='wp-content/plugins/jetpack/css/jetpack6de8.css?ver=3.3' type='text/css' media='all' />
<script type='text/javascript' src='wp-includes/js/jquery/jquery90f9.js?ver=1.11.1'></script>
<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min1576.js?ver=1.2.1'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.1.1" />
<link rel='canonical' href='index.html' />
<link rel='shortlink' href='http://wp.me/P4Cc4d-b' />

<!-- Jetpack Open Graph Tags -->
<meta property="og:type" content="website" />
<meta property="og:title" content="Open Mind" />
<meta property="og:description" content="Clean and elegant theme" />
<meta property="og:url" content="http://razonartificial.com/themes/openmind/wordpress/" />
<meta property="og:site_name" content="Open Mind" />
<meta property="og:image" content="http://razonartificial.com/themes/openmind/wordpress/wp-content/uploads/2014/05/pre3.png" />
<meta property="og:image" content="http://razonartificial.com/themes/openmind/wordpress/wp-content/uploads/2014/05/pre2.png" />
<meta property="og:image" content="http://razonartificial.com/themes/openmind/wordpress/wp-content/uploads/2014/05/au.jpg" />
<meta property="og:image" content="http://razonartificial.com/themes/openmind/wordpress/wp-content/uploads/2014/05/pre.png" />
<meta name="twitter:site" content="@jetpack" />
<meta name="twitter:image" content="http://razonartificial.com/themes/openmind/wordpress/wp-content/uploads/2014/05/pre.png?w=240" />
<meta name="twitter:card" content="summary" />
<style type="text/css" id="syntaxhighlighteranchor"></style>

<script type="text/javascript" src="http://www.google.com/jsapi">
</script>
<script type="text/javascript">
google.load("feeds", "1") //Load Google Ajax Feed API (version 1)
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
            <img src="daiict.jpg" alt="icon" style="width:370px;height:90px">
        </div>
    </div> <!-- container -->
</header> <!-- header -->

<nav class="navbar navbar-static-top navbar-mind" role="navigation">
    <div class="container">
        
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-mind-collapse">
            <ul id="menu-mainmenu" class="nav navbar-nav">
                <li id="menu-item-1" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children">
                    <a title="Home" href="#">Home</a>
                </li>
                <li id="menu-item-2" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children">
                    <a title="Profile" href="#">Profile</a>
                </li>

                
                <ul role="menu" class=" dropdown-menu"></ul>
                <li id="menu-item-4" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4 dropdown"><a title="Forums" href="#" data-toggle="dropdown" class="dropdown-toggle">Forums <span class="caret"></span></a>
                    <ul role="menu" class=" dropdown-menu">
                        <li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20">
                            <a title="addforum" href="forums/add-forum.php">Add Forum</a>
                        </li>
                        <li id="menu-item-21" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21">
                                <a title="forum" href="forums/forums2.php">View Forum </a>
                        </li>
                    </ul>
                </li>
            
                 <ul role="menu" class=" dropdown-menu"></ul>
                <li id="menu-item-30" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-30 dropdown"><a title="Blog" href="#" data-toggle="dropdown" class="dropdown-toggle">Blogs <span class="caret"></span></a>
                    <ul role="menu" class=" dropdown-menu">
                        <li id="menu-item-31" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31">
                            <a title="addblog" href="blog/add-blog1.php">Add a blog</a>
                        </li>
                        <li id="menu-item-41" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41">
                                <a title="viewblog" href="blog/blog2.php">View Blogs</a>
                        </li>
                    </ul>
                </li>
                
                <ul role="menu" class=" dropdown-menu"></ul>
                <li id="menu-item-22" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-22 dropdown"><a title="Polling" href="#" data-toggle="dropdown" class="dropdown-toggle">Polling <span class="caret"></span></a>
                    <ul role="menu" class=" dropdown-menu">
                        <li id="menu-item-23" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23">
                            <a title="Addpoll" href="polling/add-polling.php">Add Polling</a>
                        </li>
                        <li id="menu-item-24" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24">
                                <a title="Poll" href="polling/polling2.php">View Poll</a>
                        </li>
                    </ul>
                </li>
            
            
                <ul role="menu" class=" dropdown-menu"></ul>
                <li id="menu-item-25" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-25 dropdown"><a title="events" href="#" data-toggle="dropdown" class="dropdown-toggle">Events <span class="caret"></span></a>
                    <ul role="menu" class=" dropdown-menu">
                        <li id="menu-item-26" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26">
                            <a title="Addevent" href="events/add-event.php">Add Event</a>
                        </li>
                        <li id="menu-item-27" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27">
                                <a title="Event" href="events/events2.php">View Event</a>
                        </li>
                    </ul>
                </li>    
                <li id="menu-item-9" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9">
                    <a title="Tabbing" href="tabbing/tabbing2.php">Tabbing</a>
                </li>
                
                <li id="menu-item-10" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10">
                    <a title="Senate" href="senate/senate2.php">Senate</a>
                </li>
                
                <li id="menu-item-11" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11">
                    <a title="Topic" href="topic/topic2.php">Debate Topic</a>
                </li>
                
                <li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-12 dropdown">
                    <a title="About Us" href="#" data-toggle="dropdown" class="dropdown-toggle">About Us <span class="caret"></span></a>
            
            <ul role="menu" class=" dropdown-menu">
                <li id="menu-item-13" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13">
                    <a title="Debate Club Details" href="club/club2.php">Debate Club Details</a>
                </li>
                
                <li id="menu-item-14" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14">
                    <a title="Members" href="members/front-page2.php">Members</a>
                </li>
            </ul>
    </ul>
            
            <ul class="nav navbar-nav navbar-right">
              <li class="profile-info dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src = "profile_pic/<?php echo $user->u_photo ;?>" alt="" class="img-circle" width="44" />
                      <?php   
                        echo $_SESSION['u_name'];
                      ?>
                  </a>

        
                <ul class="dropdown-menu">
          
                    <li>
                      <a href="change-profile/edit-profile2.php">
                        <i class="entypo-user"></i>
                        Edit Profile
                      </a>
                    </li>
                    
                    <li>
                      <a href="change-profile/edit-password2.php">
                        <i class="entypo-lock"></i>
                        Edit Password
                      </a>
                    </li>
              
                    <li>
                      <a href="change-profile/upload-pic2.php">
                        <i class="entypo-user"></i>
                        Edit Picture
                      </a>
                    </li>

                    <li>
                        <a href="login/check_login.php?action=logout">Log Out </a> <i class="entypo-logout right"></i>
                    </li>
              
              </ul>
            </li>
          </ul> <!-- nav nabvar-nav -->
        </div><!-- navbar-collapse -->
    </div> <!-- container -->
</nav> <!-- navbar navbar-default -->
            
        <section>
            <div id="slider1" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#slider1" data-slide-to="0" class="active"></li>
                    <li data-target="#slider1" data-slide-to="1"></li>
                    <li data-target="#slider1" data-slide-to="2"></li>
                    <li data-target="#slider1" data-slide-to="3"></li>
                    <li data-target="#slider1" data-slide-to="4"></li>
                    <li data-target="#slider1" data-slide-to="5"></li>
                    <li data-target="#slider1" data-slide-to="6"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="photo_slider1.jpg" alt="Photo1" style="margin:0px auto;display:block;width:500px;height:400px">
                    </div>    
                    
                    <div class="item">
                        <img src="photo_slider2.jpg" alt="Photo2" style="margin:0px auto;display:block;width:500px;height:400px">
                    </div>

                    <div class="item">
                        <img src="photo_slider3.jpg" alt="Photo3" style="margin:0px auto;display:block;width:500px;height:400px">
                    </div>    
                    
                    <div class="item">
                        <img src="photo_slider4.jpg" alt="Photo4" style="margin:0px auto;display:block;width:500px;height:400px">
                    </div>

                    <div class="item">
                        <img src="photo_slider5.jpg" alt="Photo5" style="margin:0px auto;display:block;width:500px;height:400px">
                    </div>

                    <div class="item">
                        <img src="photo_slider6.jpg" alt="Photo6" style="margin:0px auto;display:block;width:500px;height:400px">
                    </div>    
                    
                    <div class="item">
                        <img src="photo_slider7.jpg" alt="Photo7" style="margin:0px auto;display:block;width:500px;height:400px">
                    </div>
                </div>

                                <!-- Controls -->
                <a class="left carousel-control" href="#slider1" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                
                <a class="right carousel-control" href="#slider1" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </section> <!-- carousel -->

        <section id="mind-features">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                       <article class="mind-features-item hover animated bounceInLeft animation-delay-8">
                           <div class="item-icon">
                               <img src="forum.jpg" width="180" height="180">
                           </div>
                           
                           <div class="item-content">
                               <h3>Forums</h3>
                               <p>An online discussion site where people can hold conversations in form of posted messages.Several people are associated with a single thread or topic few agreeing or disagreeing.</p>
                               <a href="forums/forums2.php" class="btn btn-success pull-right">View Forums</a>
                           </div>
                       </article> <!-- mind-features-item -->
                   </div>
                   
                   <div class="col-md-3 col-sm-6">
                       <article class="mind-features-item hover animated bounceInLeft animation-delay-3">
                           <div class="item-icon">
                               <img src="blog.jpg" width="180" height="180">
                           </div>

                           <div class="item-content">
                               <h3>Blogs</h3>
                               <p>Discussion or informational site consisting of discrete entries displayed in reverse chronlogical order.Some are personal entries while others may be related to informational stuff.</p>
                               <a href="blog/blog2.php" class="btn btn-success pull-right">View Blogs</a>
                           </div>
                       </article> <!-- mind-features-item -->
                   </div>

                   <div class="col-md-3 col-sm-6">
                       <article class="mind-features-item hover animated bounceInRight animation-delay-6">
                           <div class="item-icon">
                               <img src="polls.jpg" width="160" height="160">
                           </div>

                           <div class="item-content">
                               <h3>Polling</h3>
                               <p>Site to express your views or opinions in terms of yes or no followed by discussions,debates in form of comments.</p>
                               <a href="polling/polling2.php" class="btn btn-success pull-right">View Polling</a>
                           </div>
                       </article> <!-- mind-features-item -->
                   </div>

                   <div class="col-md-3 col-sm-6">
                       <article class="mind-features-item hover animated bounceInRight animation-delay-10">
                           <div class="item-icon">
                               <img src="achievement.jpg" width="180" height="180">
                           </div>

                           <div class="item-content">
                               <h3>Achievements</h3>
                               <p>Includes the overall details and description of the achievements of Debate Club.</p>
                               <a href="achievements/achievements2.php" class="btn btn-success pull-right">View Achievements</a>
                           </div>
                       </article> <!-- mind-features-item -->
                   </div>
                </div>
            </div>
        </section>

        <section class="animated fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="section-title">About us</h2>

                        <img src="about-us.JPG" alt="pre" height="350" width="330" class="alignleft imageborder size-full" />
                        <p class="p-lg">The Debate Club Core Committee comprises of 5 members who work behind the scenes to manage the functioning of the club in an efficient manner. There are also regular members who provide the required helping hand in different events organised under the aegis of the club.</p>
                        <p class="p-lg">The Current Core Committee is as follows:</p>
                        <p class="p-lg">1.Akshay Ratan (Convenor)</p>
                        <p class="p-lg">2.Malveeka Bhandari</p>
                        <p class="p-lg">3.Dhruvi Shah</p>
                        <p class="p-lg">4.Vedant Tikku</p>
                        <p class="p-lg">5.Visharad Bansal</p>
                        
                        
                    </div>
             
                    <div class="col-md-4">
                        <h2 class="section-title">Our mission</h2>
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            Goal #1
                                        </a>
                                    </h4>
                                </div>
             
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        The Debate Club is one of the most active clubs in DA-IICT. The hallmark of the club are its regular debate session which are organized every working wednesday.
                                    </div>
                                </div>
                            </div>
             
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">
                                            Goal #2
                                        </a>
                                    </h4>
                                </div>
             
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        The Club aims to boost the debating culture in the college by nurturing talents, and creating them as well, so that they possess the necessary leverage of required skill sets to be competent in the national debating arena. 
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">
                                            Goal #3
                                        </a>
                                    </h4>
                                </div>
             
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Since its inception, the club has witnessed tremendous growth with participation increasing every year and therefore, has a high stake in the identity of DA-IICT outside.
                                    </div>
                                </div>
                            </div>
             
             
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">
                                            Goal #4
                                        </a>
                                    </h4>
                                </div>
             
                                <div id="collapseFour" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Having enhanced its purview to activities like Group Discussions, Open Forum Debates and Model United Nations, it attempts to create an atmosphere to proper reasoning and argumentation. 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- container -->
        </section>    


    
    <section id="home-blog">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="section-title">Latest post</h2>
                </div>
             
                <div class="col-md-7">
                    <section class="home-post">

                        <a href="https://www.blogger.com/blogger.g?blogID=4217456278277800867" class="thumbnail">
                            <img width="727" height="360" src="wp-content/uploads/2014/05/7-727x360.jpg" class="attachment-, img-responsive wp-post-image" alt="7" />                                                    </a>
                                <h2 class="home-post-title"><a href="2014/05/know-the-best-deals-on-getaway-for-the-weekend/index.html">Know the best deals on getaway for the weekend</a></h2>
                                <div class="no-img"><p><img src="wp-content/uploads/2014/05/7.jpg" alt="7" width="760" height="405" class="aligncenter img-responsive imageborder size-full wp-image-89" /></p>
                                
                                <p>Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est. Quisque id mi. Ut tincidunt tincidunt erat. Etiam feugiat lorem non metus. Vestibulum dapibus nunc ac augue. Curabitur vestibulum aliquam leo. Praesent egestas neque eu enim. In hac habitasse platea dictumst. Fusce a quam. Etiam ut purus mattis mauris sodales aliquam. Curabitur nisi. Quisque malesuada placerat nisl. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus.</p>
                                <p>Sed augue ipsum, egestas nec, vestibulum et, malesuada adipiscing, dui. Vestibulum facilisis, purus nec pulvinar iaculis,&#8230;</div>

                        <div class="row home-post-footer">
                            <div class="col-md-8">
                                <div class="home-post-meta">
                                    <i class="fa fa-clock-o"></i> May 20, 2014 
                                    <i class="fa fa-folder-open"></i> <a href="category/nature/index.html" rel="category tag">Nature</a>                                    <i class="fa fa-tags"></i><a href="tag/landscape/index.html" rel="tag">Landscape</a>, <a href="tag/nature/index.html" rel="tag">Nature</a>, <a href="tag/weekend/index.html" rel="tag">Weekend</a>                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <a href="#" class="btn btn-primary btn-block">Read more</a>
                            </div>
                        </div>
                    </section>
                </div>
    

<div class="col-md-5">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
        <li class="active"><a href="#" data-toggle="tab">Top News</a></li>    
    </ul>

    <div class="tab-content">
        <div class="tab-pane active" id="topnews">             
            <div id="feedtopnews">
            </div>
                <script type="text/javascript">

                var feedcontainer=document.getElementById("feedtopnews")
                var feedurl="http://news.feedzilla.com/en_us/headlines/top-news.rss"
                var feedlimit=13
                var rssoutput="<b>Top News:</b><br /><ul>"

                function rssfeedsetup(){
                var feedpointer=new google.feeds.Feed(feedurl) //Google Feed API method
                feedpointer.setNumEntries(feedlimit) //Google Feed API method
                feedpointer.load(displayfeed) //Google Feed API method
                }

                function displayfeed(result){
                if (!result.error){
                var thefeeds=result.feed.entries
                for (var i=0; i<thefeeds.length; i++)
                rssoutput+="<li><a href='" + thefeeds[i].link + "'>" + thefeeds[i].title + "</a></li>"
                rssoutput+="</ul>"
                feedcontainer.innerHTML=rssoutput
                }
                else
                alert("Error fetching feeds!")
                }

                window.onload=function(){
                rssfeedsetup()
                }

                </script>   

                <div class="clearfix"></div>                           
        </div>
            </div> <!-- tab content -->
         </div>
        </div>
    </div> <!-- container -->
</section>


    
        <section id="home-works">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="section-title text-center">MENTORS OF DEBATE CLUB</h2>
                    </div>
                            
                        <div class="row-md-4 row-sm-6">
                            <div class="img-caption" >
                                <img src="madhumita_mazumdar.jpg" style="margin:0px auto;display:block;width:500px;height:400px" alt="w2"/>                                                                
                                <div class="caption">
                                    <div class="caption-content">
                                        <h4>Madhumita Mazumder,Professor Mentor</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                      <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="img-caption">
                                <img width="800" height="480" src="yognik.jpg" alt="w1" />                                                                <div class="caption">
                                    <div class="caption-content">
                                        <h4>Yognik Baghel,Student Mentor</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <div class="col-md-4 col-sm-4">
                            <div class="img-caption">
                                <img width="800" height="480" src="mertia.jpg" alt="w1" />                                                                <div class="caption">
                                    <div class="caption-content">
                                        <h4>Sandip Mertia,Student Mentor</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                            
                        <div class="col-md-4 col-sm-4">
                            <div class="img-caption">
                                <img width="800" height="480" src="niyam.jpg" alt="w6" />                                                                <div class="caption">
                                    <div class="caption-content">
                                        <h4>NiyamSan Chhaya</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </section>
    
<div class="container"></div>

<aside id="footer-widgets">
    <div class="container">
        <div class="row">
            
                <div class="col-md-4">
                    <h3 class="footer-widget-title">Sitemap</h3>
                        <li id="menu-item-16" class="menu-item menu-item-type-post_type menu-item-object-page current_page_parent menu-item-16">
                            <a href="contact/contact2.php">Contact Us</a>
                        </li>
                        
                        <li id="menu-item-17" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17">
                            <a href="faq/faq2.php">Frequently Asked Questions</a>
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
    <script src="wp-content/themes/openmind/js/jquery-1.10.2.min.js"></script>
    <script src="wp-content/themes/openmind/js/jquery.cookie.js"></script>
    <script src="wp-content/themes/openmind/js/bootstrap.min.js"></script>
    <script src="wp-content/themes/openmind/js/jquery.mixitup.min.js"></script>
    <script src="wp-content/themes/openmind/js/lightbox-2.6.min.js"></script>
    <script src="wp-content/themes/openmind/js/holder.js"></script>
    <script src="wp-content/themes/openmind/js/app.js"></script>

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

<script type='text/javascript' src='wp-includes/js/comment-reply.min0235.js?ver=4.1.1'></script>
<script type='text/javascript' src='../../../../s0.wp.com/wp-content/js/devicepx-jetpack8aa1.js?ver=201512'></script>

    <script src="../../../../stats.wp.com/e-201512.js" type="text/javascript"></script>
    <script type="text/javascript">
    st_go({v:'ext',j:'1:3.3',blog:'68208197',post:'11',tz:'0'});
    var load_cmc = function(){linktracker_init(68208197,11,2);};
    if ( typeof addLoadEvent != 'undefined' ) addLoadEvent(load_cmc);
    else load_cmc();
    </script>
<script>
    window.location.refresh()
</script>

</body>


<!-- Mirrored from razonartificial.com/themes/openmind/wordpress/?PHPSESSID=r91al5rip4sj8p0176bjdgdfb5 by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Mar 2015 20:10:49 GMT -->
</html>
