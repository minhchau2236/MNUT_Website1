<?php  
    /* Main Header Template */
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php bloginfo('template_url') ?>/images/favicon.ico">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>index</title>

	<!-- normalize -->
	<link href="<?php bloginfo('template_url') ?>/vendors/css/normalize.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?php bloginfo('template_url') ?>/vendors/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url') ?>/vendors/css/font-awesome.min.css" rel="stylesheet">	
	<link href="<?php bloginfo('template_url') ?>/vendors/css/materialdesignicons.min.css" rel="stylesheet">	
	
	<link href="<?php bloginfo('template_url') ?>/vendors/revolution/css/settings.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_url') ?>/vendors/revolution/css/layers.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_url') ?>/vendors/revolution/css/navigation.css" rel="stylesheet" type="text/css">
	
	<link href="<?php bloginfo('template_url') ?>/vendors/smartmenu/plugins.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url') ?>/style.css" rel="stylesheet">
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>	
	<div class="wrapper">	
		<div class="topbar width-common">
			<div class="container">
			  <div class="row">				
				<div class="col-md-12 pull-right">
					<div class="dropdown language pull-right">
						<a class="dropdown-toggle"  data-toggle="dropdown">
							Language: EN</a>
						<ul class="dropdown-menu">
							<li><a href="#"> EN </a></li>
							<li><a href="#"> VN </a></li>
						</ul>
					</div>  
					<!-- /.language -->
					<ul class="top-social">
						<li>Follow us on</li>
						<li><a href="#"><i class="mdi mdi-facebook-box"></i></a></li>
						<li><a href="#"><i class="mdi mdi-twitter"></i></a></li>
						<li><a href="#"><i class="mdi mdi-youtube-play"></i></a></li>		
						<li><a href="javascript:void(0)"><img src="<?php bloginfo('template_url') ?>/resources/images/line.png"/></a></li>
					</ul>			
					<!-- /.top-social -->
				</div>		
			  </div>
			</div>
		</div>
		<!-- /.topbar -->
	  		 
		<header class="menu width-common">		  
			<div class="navbar navbar-default default header1" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<div class="navbar-brand"><a href="index.html">
							<img src="<?php bloginfo('template_url') ?>/resources/images/logo.png" alt="" /></a></div>
						
						<button type="button" class="search-btn-mobile" data-toggle="collapse" data-target=".search-collapse"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> </button>
						
						<div class="nav-bars-wrapper">
							<div class="nav-bars-inner">
								<div class="nav-bars" data-toggle="collapse" data-target=".navbar-collapse"><span></span></div>
							</div>
							<!-- /.nav-bars-inner --> 
						</div>
						<!-- /.nav-bars-wrapper --> 
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li><a href="#!">Home </a></li>
							<li><a href="#!">About</a></li> 
							<li><a href="#!">Services<span class="caret"></span></a>
								<ul class="dropdown-menu">
								  <li><a href="#">Services 1</a></li>
								  <li><a href="#">Services 2</a></li>								  
								</ul>
							</li> 
							<li><a href="#!">Events<span class="caret"></span></a>
								<ul class="dropdown-menu">
								  <li><a href="#">Events 1</a></li>
								  <li><a href="#">Events 2</a></li>								  
								</ul>
							</li>
							<li><a href="#!">News </a></li>
							<li><a href="#!">Contact us </a></li>							
						</ul>
						<!-- /.navbar-nav -->
						<div id="search">
							<form action="#" method="get">
								<input class="search-submit" type="submit">
								<input id="m_search" name="s" type="text" placeholder="Enter keywords..." style="display: none;">                        
							</form>
						</div>
					</div>
					<!--/.nav-collapse --> 
					
					<!-- search-mobile -->
					<div class="row">
						<div class="col-xs-12 show-search-mobile">
							<div class="navbar-collapse collapse search-collapse">
								<div class="nav navbar-nav search-mobile">
									<div class="form-group customSearch">								
										<div class="input-group">
											<input type="text" class="form-control"  value="" placeholder="Enter keywords...">
											<span class="btn input-group-addon danger"><span class="fa fa-search"></span></span>
										</div>
									</div>						
								</div>
							</div>
						</div>
					</div>
				  
				</div>
				<!--/.container --> 
			</div>
			<!--/.navbar -->			
		</header>
		<!-- /.menu -->