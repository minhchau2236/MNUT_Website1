<?php
    /* The template for main sidebar */
?>

<?php if(is_active_sidebar('lasted-news')): ?>
<aside class="sidebar widget-area">
    <?php
     dynamic_sidebar('lasted-news');
      ?>
</aside>
<?php endif; ?>