
<?php $search_text = "Search"; ?> 
<form class="form-group customSearch" method="get" id="searchform"  action="<?php echo home_url();  ?>/"> 
	<div class="input-group">
		<input type="text" class="form-control" name="s" placeholder="Enter keywords...">
		<span class="btn input-group-addon danger" ><button class="fa fa-search" type="submit"></button></span>
	</div>
</form>