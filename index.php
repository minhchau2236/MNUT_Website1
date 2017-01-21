
<?php
/*Main template file*/
get_header();
?>
 <div class="content-wrapper width-common"> 			
			 <div class="main-content">
               <?php
                    if (have_post()) :
                        while (have_post()) :
                            the_post();
                                the_content();
                        endwhile; 
                    endif;        
               ?>
            </div>
			<!-- /.rev_slider_wrapper -->
			
			
		</div>
    
<?php
/*Main template file*/
get_footer();
?>