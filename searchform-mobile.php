
<?php $search_text = "Search"; ?> 
<form method="get" id="searchform"  action="<?php echo home_url();  ?>/"> 
    <input type="text" class="form-control" name="s" placeholder="Enter keywords...">
    <button class="btn input-group-addon danger" type="submit"><span class="fa fa-search"></span></button>
</form>