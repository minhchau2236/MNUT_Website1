
<?php
/* Template Name: two column (right) sidebar template*/
 ?>
 <div class="main-content-width-wrapper">
        <div class="two-column-entry">
            <h1>Main Heading</h1>
        
            <div class="main-content">
               <?php
                    if (have_posts()) :
                        while (have_posts()) :
                            the_post();
                                the_content();
                        endwhile; 
                    endif;        
               ?>
            </div>
        </div>
        <?php
            get_sidebar('main-sidebar');
        ?>
    </div>
    
<?php
/*Main template file*/
get_footer();
?>