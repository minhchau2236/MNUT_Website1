<?php
    /* Main Footer Template*/
?>
<footer class="footer width-common">
			<div class="container inner">
				<div class="row">
					<div class="col-sm-5">
						<div class="widget"> 
							<a href="#"><img src="<?php bloginfo('template_url') ?>/resources/images/Logo_Footer.png" alt="" /></a>
							<div class="divide30"></div>							
							<ul class="tag-list">
								<li> <a href="#"><i class="mdi mdi-home"></i> 52A Tran Hung Dao, District 1, Ho Chi Minh City</a> </li>
								<li> <a href="#"><i class="mdi mdi-phone"></i> +84 163 969 1059</a> </li>
								<li> <a href="#"><i class="mdi mdi-email-outline"></i>info@consultosee.com</a> </li>
								<li> <a href="#"><i class="mdi mdi-web"></i>www.consultosee.com</a> </li>
							</ul>
						</div>
						<!-- /.widget --> 
					</div>
					<!-- /column --> 
					<div class="col-sm-3">
						<div class="widget">
							<h4 class="widget-title">Supported by </h4>
							<ul class="tag-list">
								<li> <a href="#">www.heartsanctuary.center/</a> </li>								
								<li> <a href="#">www.horncoaching.de</a> </li>
								<li> <a href="#">www.example.com</a> </li>
							</ul>
						</div>
						<!-- /.widget -->						
					</div>
					<!-- /column -->
					<div class="col-sm-4">
						<div class="widget">
							<h4 class="widget-title">Join Us on Facebook</h4>
							<div class="facebook">
								<img src="<?php bloginfo('template_url') ?>/resources/images/Fb_widget.png"/>
							</div>
						</div>
						<!-- /.widget -->	
					</div>
					<!-- /column -->
				</div>
				<!-- /.row --> 
				
			  </div>
			  <!-- .container -->
			  
			  <div class="sub-footer">
				<div class="container">
				  <p class="text-center">© Copyright 2016 ConsulToSee. All Rights Reserved.</p>
				</div>
				<!-- .container --> 
			  </div>
			  <!-- .sub-footer --> 
			  
		</footer>
		<!-- /footer -->  
	  
	</div>
	<!-- end .wrapper -->
	
    <!-- jQuery -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
	<script src="<?php bloginfo('template_url') ?>/vendors/js/jquery.min.js"></script>	
	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_url') ?>/vendors/js/bootstrap.min.js"></script>			
	
	<!-- slider -->
	<script type="text/javascript" src="<?php bloginfo('template_url') ?>/vendors/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script> 
	<script type="text/javascript" src="<?php bloginfo('template_url') ?>/vendors/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url') ?>/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script> 
	<script type="text/javascript" src="<?php bloginfo('template_url') ?>/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script> 
	<script type="text/javascript" src="<?php bloginfo('template_url') ?>/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script> 
	
	<script src="<?php bloginfo('template_url') ?>/vendors/plugins.js"></script>	
	<script src="<?php bloginfo('template_url') ?>/resources/js/scripts.js"></script>

	<script>
		(jQuery)(function ($) {			
			$('.menu').on('click', '#search', function (e) {
				e.preventDefault();

				$(this).find('#m_search').slideDown(200).focus();
			});

			$('#m_search').focusout(function (e) {
				$(e.target).slideUp();
			});
		});

	</script>	
  </body>
</html>