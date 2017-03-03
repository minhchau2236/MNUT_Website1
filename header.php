<?php  
    /* Main Header Template */
?>
<!DOCTYPE html>
<html <?php language_attributes();?>> 

  <head>  	
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url') ?>/resources/images/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url') ?>/resources/images/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url') ?>/resources/images/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="<?php bloginfo('template_url') ?>/resources/images/favicons/manifest.json">
	<link rel="mask-icon" href="<?php bloginfo('template_url') ?>/resources/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">
    
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
  </head>
  <body <?php body_class(isset($class) ? $class : ''); ?> >	
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
						<div class="navbar-brand"><a href="<?php bloginfo('url'); ?>">
							<img src="<?php bloginfo('template_url') ?>/resources/images/Logo.png" alt="" /></a></div>
						
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
						<?php 
							if (has_nav_menu('primary')) {
                                        wp_nav_menu(array(
                                            'theme_location' => 'primary',
                                            'container' => false,
                                            'fallback_cb' => false,
                                            'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>',
                                            'walker' => new ConsultToSee_Walker_Nav_Menu()
                                                )
                                        );
                        	}						
						?>
						<!-- /.navbar-nav -->
						<div id="search">
						<?php include (TEMPLATEPATH . '/searchform.php'); ?>
						</div>
					</div>
					<!--/.nav-collapse --> 
					
					<!-- search-mobile -->
					<div class="row">
						<div class="col-xs-12 show-search-mobile">
							<div class="navbar-collapse collapse search-collapse">
								<div class="nav navbar-nav search-mobile">									
									<?php include (TEMPLATEPATH . '/searchform-mobile.php'); ?>															
								</div>
							</div>
						</div>
					</div>
				  
				</div>
				<!--/.container --> 
			</div>
			<!--/.navbar -->		  
			
			<!--/.navbar -->			
		</header>
		<!-- /.menu -->
		<div class="content-wrapper width-common"> 