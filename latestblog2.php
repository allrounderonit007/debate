<!DOCTYPE html>
<html  lang="en-US">
<?php
        require_once('includes/initialize.php');
    if (! $session->is_logged_in() )
        session_start();
    
    if( ! isset($_SESSION['u_id']) )
        redirect_to('homepage.php');

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
                    <a title="Home" href="homepage2.php">Home</a>
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


    <section id="home-blog">
        <div class="container">
            <div class="row">
            
                    <h2 class="section-title">Latest post</h2>
               
                  <section class="home-post">
                        
                                <h2 class="home-post-title"><a>Beards of a bird flock together</a></h2>
                                
                                <p>‘You’re a matured person, you know what’s your aim in life?’ asked Harsh.</p>
                                <p>‘Yes,’ I replied.</p>
                                <p>‘Good.’</p>
                                <p>I waited, as we walked. I knew the interrogation wasn’t over.</p>
                                <p>‘On a similar note, what’s the aim of your beard?’ he asked finally, his voice firm as he stared accusingly hard in my eyes struggling to find my guilt hidden somewhere within. His face was solemn.</p>
                                <p>I thought about the question pensively. This was a serious and legit question. What was the aim or objective of my beard that had been growing ever since I last shaved some months back? ‘The objective is to see how much it can grow.’</p>
                                <p>‘That’s bullshit,’ snapped Harsh. ‘That’s like saying I’m studying because I want to know how much I can study!’</p>
                                <p>He made sense. To let my beard grow just to see how much it can grow was ridiculous. I was lacking that reason which could corroborate the meaning and existence of my beard and its growth.</p>
                                <p>Last few days have been tormenting. I am a person generally interested in my immediate and extended surroundings and so many times I have come across girls who resent being watched and ogled, a few times at least in their life, by boys who have lots of time to kill and amorous glances to throw. My sympathies to such girls, believe me the world is full of fools and unemployed. But to such girls let me also say, having an overgrown beard attracts more eyes than anything else and that too round-the-clock. Every time I step out my room into the public, I can see people staring me from my left, my right, at my back they even whisper, what’s wrong with him?</p>
                                <p>There’s nothing wrong with me! I wish I could shout.</p>
                                <p>Some mornings back, I was sitting in the café with Harsh. I was sipping tea, he was stuffing poha. In the chill of the morning air, the warm sunlight fell on my face. Like some heat therapy of sorts, I felt the fluid insides of my head roasting into a solid something. You can say, similar to how they make Dosa(s) on a hot tawa. I snapped back to reality and took control of my senses. ‘Harsh,’ I said.</p>
                                <p>Harsh looked up from his plate of poha. He mouth was a spherical round stuffed full. He flashed his eyebrows up and down to inquire about my impropriety. He seemed hungry.</p>
                                <p>‘The other day that girl told me that I should shave.’</p>
                                <p>Harsh gulped his poha, took a sip from his tea and said raising his eyebrows, ‘Who, her?’</p>
                                <p>‘Yeah. Not good huh?’ I asked.</p>
                                <p>‘Shame!’ he said shaking his head in disapproval ‘on you.’</p>
                                <p>‘Everybody seems eager to poke their noses in my beard. Why should they be bothered?’</p>
                                <p>Harsh snorted. Noses in beard. ‘Maybe they are bothered because they have to look at you,’ he replied.</p>
                                <p>‘When I replied that I don’t want to shave, she asked why?’</p>
                                <p>‘And what did you reply then?’</p>
                                <p>‘I couldn’t think of anything,’ I said helplessly.</p>
                                <p>Harsh stared at me. He was slowly realizing the gravity of the situation.</p>
                                <p>‘You know what happened yesterday?’ I said. ‘Our main gate watchman uncle asked me who I was and whom did I want to meet! Then he looked at me with eyes strained, neck slightly cocked and slowly his lips curled and he said arre bhaiya aap to pehchaan me hi nahi aaye. Kya pareshaani hai, daadi kyu bhadaa liye ho?’</p>
                                <p>I replied ‘Bhadaye nahi hai uncle, bas kaat nahi raha hu!’</p>
                                <p>Harsh went back to poha.</p>
                                <p>‘Even Prof. Bharani asked me to shave.’</p>
                                <p>Harsh looked up again, he said nothing. ‘Even our new Director asked me the reason for my beard.‘You’re</p>
                                <p>‘What did you say?’</p>
                                <p>‘I said I was reading Karl Marx.’</p>
                                <p>‘And as if there’s any connection. As if you’d read Abdul Kalaam then you’d start parting your hair in the middle like Salman Khan did in Tere Naam,’ mumbled Harsh to himself as he picked up his tea cup.</p>
                                <p>He had a point.</p>
                                <p>‘Hey, help me a little man,’ I said somewhat annoyed. ‘Just tell me what I should say when they ask me to shave.’</p>
                                <p>Harsh sipped in his tea and kept the glass carefully down. He then sucked in his lips as if to taste the last bits of flavour and squeezed his eyes. Then after, what seemed to me, 5 hours had passed he said finally, ‘check this out on Quora. You’ll find your answer there.’ He then stood up and walked away. I wanted to sit and think but was soon surrounded by DA’s hungry-angry birds so I followed suit.</p>
                                <p>Why is beard bad?</p>
                                <p>Before I get to that question, some background: I have not shaved since November 2014. This was when I came across Movember, which is an annual event celebrated throughout the month of November. As part of it, one has to grow ‘staches throughout November. It’s a symbolic celebration to raise awareness about men’s diseases like prostate cancer. I just didn’t shave my beard also. I’ve been keeping it since then. This is how I look right now:</p>
                                <p>I’m sure you’ve seen more hair than this.</p>
                                <p>Again back to the question. Why is beard bad? Now the readers will curl their lips sympathetically and say ‘noooo,’ with some more Os, ‘the beard is not that bad. It’s just… you know… this… and that… and this again.’ Basically, it’s hard to find people who can chest beat and say ‘I love beards’ (If you’re one of them, comment bellow as die razors die). But nonetheless there’s a certain connection between the beard and the unpleasant. Thanks to these guys:</p>
                                <p>But one must not read these pictures with cloudy eyes and being completely blind to their particular contexts. It’s their different lifestyle, in each case, and not so commendable that, which has left them with less time or perhaps intention to shave. Do not let yourself be judgmental on the beard which is an innocent outgrowth of hair. The beard is not bad, it’s perhaps the people who sport it are usually bad.</p>
                                <p>Look at these pictures, clean shaved but ridiculous people:</p>
                                <p>And these bearded great men:</p>
                                <p>Point being, beards have no meaning in themselves.</p>
                                <p>The philosophy behind it</p>
                                <p>I don’t have an answer when people ask me, why I don’t shave because at that exact moment I want to ask them, Why should I?</p>
                                <p>Because you look more presentable, clean, smart and beautiful. It doesn’t suit you that’s why! Because in a civilized society people wash and shave. Surely they’ll make you burn it once you join office.</p>
                                <p>Well first about being clean and beautiful, that’s your opinion not necessarily the truth and secondly I’m fine the way I am. Thirdly, yes indeed the protocols of mostly all office demand clean shave not of any reason other than that beards are a sign of all unpleasant things, thanks again Mr. Osama and company. This is the tragedy of beards.</p>
                                <p>Why do people drop these general advices? Maybe Harsh is right, they don’t want to look at someone who’s full of facial hair, maybe they are just not used to it, maybe the moment they see beard they say ‘oh criminal cigarette whiskey thieve criminal Gabbar.’</p>
                                <p>There’s such a huge stigma around growing a beard that it is considered an abnormality, work of the devil that scratches your girlfriend’s cheek and consequently many boys shy away from it. For some it’s a matter of convenience and for others simply disgrace.</p>
                                <p>Finally what’s the reason to shave, even if you don’t feel like shaving? And I beg you, answer this from a neutral mind-set devoid of any prejudice.</p>
                                <p>Nothing.</p>
                                <p>‘Hey, why are you not shaving?’</p>
                                <p>‘Because there’s no reason why I should.’</p>
                                <p>‘Then why are you growing the beard?’</p>
                                <p>‘Coz there’s no reason to not grow it!’</p>
                                <p>‘So what’s the aim of your beard?’</p>
                                <p>‘Nothing. Its existence has no meaning. But its very growth gives meaning to its existence when idlers whisper about it, make fun of it, are jealous of it or simply notice it.’</p>
                                <p>Beards are without meaning and value. On Ernesto Che Guevara it holds the symbol of revolution, On Oriental ascetics it holds the symbol of an alternate lifestyle, and On Marcus Aurelius like most Greek philosophers it holds the symbol of wisdom just like on a jihadi terrorist it holds a symbol of bigotry.</p>
                                <p>So beards are not bad?</p>
                                <p>No</p>
                                <p>It’s good?</p>
                                <p>No. It is just what it is and learn to respect it the way it is period.</p>
                                </div>
                    </section>
              

        </div>
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
