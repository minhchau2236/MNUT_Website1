<?php
    /* Main Footer Template*/
?>
</div>
<footer class="footer width-common">
			<div class="container inner">
				<div class="row">
					<div class="col-sm-5">
						<?php
							if(is_active_sidebar('footer-1')){
								dynamic_sidebar('footer-1');
							}
						?>	
					</div>
					<!-- /column --> 
					<div class="col-sm-3">
						<?php
							if(is_active_sidebar('footer-2')){
								dynamic_sidebar('footer-2');
							}
						?>						
					</div>
					<!-- /column -->
					<div class="col-sm-4">
						<?php
							if(is_active_sidebar('footer-3')){
								dynamic_sidebar('footer-3');
							}
						?>		
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
	
		<script src="<?php bloginfo('template_url') ?>/vendors/js/owl.carousel.min.js"></script>
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