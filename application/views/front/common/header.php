<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->
    <head>
        <title><?=$title?> - PraptiTrade.com</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="cloudnextbd.com">
        
        <!-- Favicon --> 
        <link rel="shortcut icon" type="image/png" href="<?=base_url()?>assets/images/favicon.jpg"/>

        <!-- this styles only adds some repairs on idevices  -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Google fonts - witch you want to use - (rest you can just remove) -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>

        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- ======== CSS STYLES ======== -->
        <link rel="stylesheet" href="<?=base_url()?>assets/css/reset.css" type="text/css" />
        <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css" type="text/css" />

        <!-- font awesome icons -->
        <link rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome/css/font-awesome.min.css">

        <!-- simple line icons -->
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/simpleline-icons/simple-line-icons.css" media="screen" />

        <!-- et linefont icons -->
        <link rel="stylesheet" href="<?=base_url()?>assets/css/et-linefont/etlinefont.css">

        <!-- animations -->
        <link href="<?=base_url()?>assets/js/animations/css/animations.min.css" rel="stylesheet" type="text/css" media="all" />

        <!-- responsive devices styles -->
        <link rel="stylesheet" media="screen" href="<?=base_url()?>assets/css/responsive-leyouts.css" type="text/css" />

        <!-- shortcodes -->
        <link rel="stylesheet" media="screen" href="<?=base_url()?>assets/css/shortcodes.css" type="text/css" /> 

        <!-- mega menu -->
        <link href="<?=base_url()?>assets/js/mainmenu/bootstrap.min.css" rel="stylesheet">
        <link href="<?=base_url()?>assets/js/mainmenu/demo.css" rel="stylesheet">
        <link href="<?=base_url()?>assets/js/mainmenu/menu21.css" rel="stylesheet">

        <!-- MasterSlider -->
        <link rel="stylesheet" href="<?=base_url()?>assets/js/masterslider/style/masterslider.css" />
        <link rel="stylesheet" href="<?=base_url()?>assets/js/masterslider/skins/default/style.css" />
        <link rel="stylesheet" href="<?=base_url()?>assets/js/masterslider/skins/light-5/style.css" />

        <!-- owl carousel -->
        <link href="<?=base_url()?>assets/js/carouselowl/owl.transitions.css" rel="stylesheet">
        <link href="<?=base_url()?>assets/js/carouselowl/owl.carousel.css" rel="stylesheet">
        
        <!-- flexslider -->
        <link rel="stylesheet" href="<?=base_url()?>assets/js/flexslider/flexslider.css" type="text/css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/js/flexslider/skin.css" />
        
        <!-- fancy box plugin -->
	<link rel="stylesheet" href="<?=base_url()?>assets/js/fancbox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/js/fancbox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/js/fancbox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
    
    </head>
    <body>
        <div class="site_wrapper">
            <header class="header">
                <div class="container_fhstyle2">
                    <!-- Logo -->
                    <div class="logo3"><a href="#" id="logo21">Prapti Trade</a></div>
                    <!-- Navigation Menu -->
                    <div class="menu_main_full three">
                        <div class="top_nav3"> <i class="fa fa-phone"></i> +880 1713 927837 &nbsp;&nbsp; <a href="mailto:info@websitename.com"><i class="fa fa-envelope"></i> info@praptitrade.com</a> &nbsp;&nbsp;
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                        </div>
                        <div class="navbar yamm navbar-default">
                            <div class="navbar-header">
                                <div class="navbar-toggle .navbar-collapse .pull-right " data-toggle="collapse" data-target="#navbar-collapse-1"  > <span>Menu</span>
                                    <button type="button" > <i class="fa fa-bars"></i></button>
                                </div>
                            </div>
                            <div id="navbar-collapse-1" class="navbar-collapse collapse pull-right">
                                <nav>
                                    <ul class="nav navbar-nav">
                                        <li class="yamm-fw"><a href="<?=base_url()?>" class="<?php if($title == 'Home') echo 'active' ; ?>">Home</a></li>
                                        <li class="dropdown"><a href="#" class="dropdown-toggle 
                                            <?php if (
                                                        $title == 'Vision' ||  
                                                        $title == 'Mission' || 
                                                        $title == 'Message from chairman' ||
                                                        $title == 'Core values' ||
                                                        $title == 'Corporate goal' || 
                                                        $title == 'Organogram' ||
                                                        $title == 'Client'
                                                    ) echo 'active'?>" >About Us</a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="<?=site_url('index.php/vision')?>">Vision</a></li>
                                                <li><a href="<?=site_url('index.php/mission')?>">Mission</a></li>
                                                <li><a href="<?=site_url('index.php/message_from_chairman')?>">Message from chairman</a></li>  
                                                <li><a href="<?=site_url('index.php/core_values')?>">Core values</a></li>
                                                <li><a href="<?=site_url('index.php/corporate_goal')?>">Corporate Goal</a></li>
                                                <li><a href="<?=site_url('index.php/organogram')?>">Organogram</a></li> 
                                                <li><a href="<?=site_url('index.php/client')?>">Client</a></li>  						
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#" class="dropdown-toggle
                                            <?php if (
                                                        $title == 'On going project' ||  
                                                        $title == 'Completed project'
                                                    ) echo 'active'?>">Projects</a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="<?=site_url('index.php/on_going_project')?>">On-going Project</a></li>
                                                <li><a href="<?=site_url('index.php/completed_project')?>">Completed Project</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#" class="dropdown-toggle
                                            <?php if (
                                                        $title == 'Roads and highway' ||  
                                                        $title == 'Bridge' ||
                                                        $title == 'Material supply' ||  
                                                        $title == 'Optical fiber' ||
                                                        $title == 'Civil'  
                                                    ) echo 'active'?>">What We Do</a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="<?=site_url('index.php/roads_and_highway')?>">Roads & Highway</a></li>
                                                <li><a href="<?=site_url('index.php/bridge')?>">Bridge</a></li>
                                                <li><a href="<?=site_url('index.php/material_supply')?>">Material Supply</a></li>
                                                <li><a href="<?=site_url('index.php/optical_fiber')?>">Optical Fiber</a></li>
                                                <li><a href="<?=site_url('index.php/civil')?>">Civil</a></li>  
                                            </ul>
                                        </li>
                                        <li><a href="<?=site_url('index.php/equipments')?>" class="<?php if ( $title == 'Equipments') echo 'active' ; ?>">Equipments</a></li>
                                        <li><a href="<?=site_url('index.php/careers')?>" class="<?php if ( $title == 'Careers') echo 'active' ; ?>">Careers</a></li>
                                        <li class="dropdown"><a href="#" class="dropdown-toggle
                                            <?php if (
                                                        $title == 'On going project gallery' ||  
                                                        $title == 'Completed project gallery'
                                                    ) echo 'active'?>">Gallery</a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="<?=site_url('index.php/on_going_project_gallery')?>">On-going Project</a></li>
                                                <li><a href="<?=site_url('index.php/completed_project_gallery')?>">Completed Project</a></li>

                                            </ul>
                                        </li>
                                        <li><a href="<?=site_url('index.php/contact')?>" class="<?php if ( $title == 'Contact us') echo 'active' ; ?>">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- end Navigation Menu -->
                </div>
            </header>
            <div class="clearfix"></div>

