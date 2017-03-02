<?php $search_text = "Search"; ?> 
<button class="search-submit"></button>
<form method="get" id="searchform"  action="<?php echo home_url();  ?>/"> 
<input type="text" value="<?php echo $search_text; ?>" name="s" id="m_search" onblur="if (this.value == '') 
    {this.value = '<?php echo $search_text; ?>';}" onfocus="if (this.value == '<?php echo $search_text; ?>') {this.value = '';}" /> 
<input type="hidden" id="searchsubmit" /> 
</form>

