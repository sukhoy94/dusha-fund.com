<form 
    class="d-flex"
    role="search"
    method="GET"
    id="searchform"
    action="<?php echo home_url('/');?>"
>
    <label class="screen-reader-text" for="s">Поиск: </label>
	<input type="search" value="<?php echo get_search_query() ?>" name="s" id="s" />
    <button class="btn btn-outline-success" type="submit">Search</button>
</form>`