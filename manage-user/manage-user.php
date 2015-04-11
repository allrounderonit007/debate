<!DOCTYPE html>
<html  lang="en-US">

<?php
    
    require_once('../includes/initialize.php');
    //Load Session details...
    if (! $session->is_logged_in() )
        session_start();
    
    if( ! isset($_SESSION['u_id']) )
        redirect_to('../homepage.php');

    $usr=Users::find_by_id($_SESSION['u_id']);
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
    <link rel="alternate" type="application/rss+xml" title="Open Mind &raquo; Our Team Comments Feed" href="feed/index.html" />

<link rel='stylesheet' id='bootstrap-fa-icon-css'  href='../wp-content/plugins/easy-bootstrap-shortcodes/styles/font-awesome.min0235.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='ebs_dynamic_css-css'  href='../wp-content/plugins/easy-bootstrap-shortcodes/styles/ebs_dynamic_css0235.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='jetpack_css-css'  href='../wp-content/plugins/jetpack/css/jetpack6de8.css?ver=3.3' type='text/css' media='all' />
<script type='text/javascript' src='../wp-includes/js/jquery/jquery90f9.js?ver=1.11.1'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/jquery-migrate.min1576.js?ver=1.2.1'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.1.1" />
<link rel='canonical' href='index.html' />
<link rel='shortlink' href='http://wp.me/P4Cc4d-2V' />

<!-- Jetpack Open Graph Tags -->
<meta property="og:type" content="article" />
<meta property="og:title" content="Our Team" />
<meta property="og:url" content="http://razonartificial.com/themes/openmind/wordpress/our-team/" />
<meta property="og:description" content="Sheldon Cooper Programmer Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, explicabo, impedit, voluptatibus fugiat saepe mollitia modi ab itaque cumque perferendis aut ducimus volupt..." />
<meta property="article:published_time" content="2014-05-20T19:52:02+00:00" />
<meta property="article:modified_time" content="2014-05-20T19:52:02+00:00" />
<meta property="article:author" content="http://razonartificial.com/themes/openmind/wordpress/author/adrigm/" />
<meta property="og:site_name" content="Open Mind" />
<meta property="og:image" content="http://razonartificial.com/themes/openmind/wordpress/wp-content/uploads/2014/05/t1.jpg" />
<meta property="og:image" content="http://razonartificial.com/themes/openmind/wordpress/wp-content/uploads/2014/05/t2.jpg" />
<meta property="og:image" content="http://razonartificial.com/themes/openmind/wordpress/wp-content/uploads/2014/05/t3.jpg" />
<meta property="og:image" content="http://razonartificial.com/themes/openmind/wordpress/wp-content/uploads/2014/05/t6.jpg" />
<meta property="og:image" content="http://razonartificial.com/themes/openmind/wordpress/wp-content/uploads/2014/05/t4.jpg" />
<meta property="og:image" content="http://razonartificial.com/themes/openmind/wordpress/wp-content/uploads/2014/05/t5.jpg" />
<meta name="twitter:site" content="@jetpack" />
<meta name="twitter:image" content="http://razonartificial.com/themes/openmind/wordpress/wp-content/uploads/2014/05/t1.jpg?w=240" />
<meta name="twitter:card" content="summary" />
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
            <img src="../daiict.jpg" alt="icon" style="width:370px;height:90px">        </div>
    </div> 
    <!-- container -->
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
                    <a title="Tabbing" href="../tabbing/tabbing2.php">Tabbing</a>
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
                      <a href="../change-profile/edit-profile2.php">
                        <i class="entypo-user"></i>
                        Edit Profile
                      </a>
                    </li>
                    
                    <li>
                      <a href="../change-profile/edit-password2.php">
                        <i class="entypo-lock"></i>
                        Edit Password
                      </a>
                    </li>
              
                    <li>
                      <a href="../change-profile/upload-pic2.php">
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
                <h1 class="page-title">Information</h1>
                </ol>
            </div>
        </header>

        
		
		
		
		
		
<div class="container">
		
		
<form action="manage-user.php" method="post">
		
		
<h3>Manage Members</h3>

<table class="table table-bordered table-striped datatable" id="table-2">
	<thead>
		<tr>
			<th>CheckBox</th>
			<th>User Name</th>
			<th>User ID</th>
			<th>Is Admin</th>
			<th>Action</th>
			<th>Change Admin Status</th>
		</tr>
	</thead>
	
	<tbody>
    <?php 
 	  $user_array = users::find_all();
	  foreach($user_array as $user)
	  {
	  ?>
		<tr>
			<td>
				<div class="checkbox checkbox-replace">
					<input type="checkbox" id="chk-1">
				</div>
			</td>
			
			<td> <?php echo $user->u_name ;?></td>
			
			<td><?php echo $user->u_id ;?></td>
			
			<td><?php echo $user->u_isAdmin;?></td>
			
			<td>
								
				<a href="#" class="btn btn-danger btn-sm btn-icon icon-left" onClick="window.location.assign('delete-user.php?id=<?php echo $user->u_id ?>')" >
					<i class="entypo-cancel"></i>
					Delete
				</a>
				
				
			</td>
			
			<td>
								
				<a href="#" class="btn btn-success" onClick="window.location.assign('change-admin-status.php?id=<?php echo $user->u_id ?>')" >
					<i class="entypo-cancel"></i>
					Change Status
				</a>
				
				
			</td>
			
			
		
		
		
		</tr>
		<?php
		}
		?>
		
		
		
	
	</tbody>
</table>
		
		
		
<script type="text/javascript">
jQuery(window).load(function()
{
	var $ = jQuery;
	
	$("#table-2").dataTable({
		"sPaginationType": "bootstrap",
		"sDom": "t<'row'<'col-xs-6 col-left'i><'col-xs-6 col-right'p>>",
		"bStateSave": false,
		"iDisplayLength": 8,
		"aoColumns": [
			{ "bSortable": false },
			null,
			null,
			null,
			null
		]
	});
	
	$(".dataTables_wrapper select").select2({
		minimumResultsForSearch: -1
	});
	
	// Highlighted rows
	$("#table-2 tbody input[type=checkbox]").each(function(i, el)
	{
		var $this = $(el),
			$p = $this.closest('tr');
		
		$(el).on('change', function()
		{
			var is_checked = $this.is(':checked');
			
			$p[is_checked ? 'addClass' : 'removeClass']('highlight');
		});
	});
	
	// Replace Checboxes
	$(".pagination a").click(function(ev)
	{
		replaceCheckboxes();
	});
});
	
// Sample Function to add new row
var giCount = 1;

function fnClickAddRow() 
{
	$('#table-2').dataTable().fnAddData(['<div class="checkbox checkbox-replace"><input type="checkbox" /></div>', giCount+".2", giCount+".3", giCount+".4", giCount+".5" ]);
	
	replaceCheckboxes(); // because there is checkbox, replace it
	
	giCount++;
}
</script>



<br />
<br />




		<?php 
			echo FOOTER;
		?>



<br /><!-- Footer -->
	</div>	
		
		
		
	<link rel="stylesheet" href="assets/js/datatables/responsive/css/datatables.responsive.css">
	<link rel="stylesheet" href="assets/js/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="assets/js/select2/select2.css">

	<!-- Bottom Scripts -->
	<script src="assets/js/gsap/main-gsap.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>
	<script src="assets/js/jquery.dataTables.min.js"></script>
	<script src="assets/js/datatables/TableTools.min.js"></script>
	<script src="assets/js/dataTables.bootstrap.js"></script>
	<script src="assets/js/datatables/jquery.dataTables.columnFilter.js"></script>
	<script src="assets/js/datatables/lodash.min.js"></script>
	<script src="assets/js/datatables/responsive/js/datatables.responsive.js"></script>
	<script src="assets/js/select2/select2.min.js"></script>
	<script src="assets/js/neon-chat.js"></script>
	<script src="assets/js/neon-custom.js"></script>
	<script src="assets/js/neon-demo.js"></script>
		
		
		
    
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
	st_go({v:'ext',j:'1:3.3',blog:'68208197',post:'181',tz:'0'});
	var load_cmc = function(){linktracker_init(68208197,181,2);};
	if ( typeof addLoadEvent != 'undefined' ) addLoadEvent(load_cmc);
	else load_cmc();
	</script>
<script>
    window.location.refresh()
</script>

</body>


<!-- Mirrored from razonartificial.com/themes/openmind/wordpress/our-team/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Mar 2015 20:11:07 GMT -->
</html>
