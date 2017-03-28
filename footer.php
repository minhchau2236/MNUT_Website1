<?php
    /* Main Footer Template*/
?>
</div>
<footer class="footer width-common">
            <div class="container inner">
                <div class="row">
                    <div class="col-sm-4">
                        <?php
                        if (is_active_sidebar('footer-1')) {
                            dynamic_sidebar('footer-1');
                        }
                        ?>  
                    </div>
                    <!-- /column --> 
                    <div class="col-sm-4">
                        <?php
                        if (is_active_sidebar('footer-2')) {
                            dynamic_sidebar('footer-2');
                        }
                        ?>                      
                    </div>
                    <!-- /column -->
                    <div class="col-sm-4">
                        <?php
                        if (is_active_sidebar('footer-3')) {
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
                  <p class="text-center">Copyright © 2017 ConsulToSee. All Rights Reserved.</p>
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

        ;(function ($){  
			/**
			* jQuery function to prevent default anchor event and take the href * and the title to make a share popup
			*
			* @param  {[object]} e           [Mouse event]
			* @param  {[integer]} intWidth   [Popup width defalut 500]
			* @param  {[integer]} intHeight  [Popup height defalut 400]
			* @param  {[boolean]} blnResize  [Is popup resizeabel default true]
			*/
			$.fn.customerPopup = function (e, intWidth, intHeight, blnResize) {
				
				// Prevent default anchor event
				e.preventDefault();
				
				// Set values for window
				intWidth = intWidth || '500';
				intHeight = intHeight || '400';
				strResize = (blnResize ? 'yes' : 'no');

				// Set title and open popup with focus on it
				var strTitle = ((typeof this.attr('title') !== 'undefined') ? this.attr('title') : 'Social Share'),
					strParam = 'width=' + intWidth + ',height=' + intHeight + ',resizable=' + strResize,            
					//objWindow = window.open(this.attr('href'), strTitle, strParam);

					win = window.open('');
					window.oldOpen = window.open;
					window.open = function(url) { // reassignment function
						win.title = strTitle;
						win.location = this.attr('href');
						window.open = oldOpen;
						win.focus();
					}
			}
			
			/* ================================================== */
			
			$(document).ready(function ($) {
				$('.customer.share').on("click", function(e) {
				var myWindow = window.open("", "", "width=200,height=100");
				});
			});
				
			}(jQuery));

    </script>   
    
  </body>
</html>
