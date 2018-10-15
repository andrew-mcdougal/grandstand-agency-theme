<?php
/**
 * The template for displaying search forms in kimmia
 *
 * @since kimmia 1.0
 */
?>
<form action="http://grandstandagency.com.au/" class="search-form" method="get" role="search">
    <label class="search-text-field">
        <span class="screen-reader-text">Search event type, band type etc.</span>
        <input type="search" title="Search for:" name="s" value="" placeholder="Search event type, band type etc." class="search-field">
    </label>
    <label for="searchSubmit" class="search-button">
    	<i class="fa fa-search"></i>
        <p>Search</p>
    </label>
    <input id="searchSubmit" type="submit" value="Search" class="search-submit">
</form>