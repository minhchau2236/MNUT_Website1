
<?php
/* Template Name: full width template*/get_header();
 ?>
 <div class="main-content-width-wrapper">
        <div class="full-width-entry">
            <h1>Main Heading</h1>
        
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
        </div>
    </div>
    
<?php
/*Main template file*/
get_footer();
?>