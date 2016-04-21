<?php
/**
 * The template for displaying search forms in _tk
 *
 * @package _tk
 */
?>
<!--
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', '_tk' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', '_tk' ); ?>">
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', '_tk' ); ?>">
</form>
-->

<form class="form-horizontal">


<div class="col-sm-12">
    <div class="input-group">
    
    <input type="text" class="form-control" id="front-search-text" placeholder="Search here">
    <span class="input-group-btn">
        <button class="btn btn-default" id="front-search-addon"  type="button"><span  class=" glyphicon glyphicon-search"></span></button>
      </span>
  </div>




</div>
<!--
<div class="col-sm-1">
  <div class="form-group">
  <div class="dropdown text-center">
  <button class="btn btn-default dropdown-toggle front-search-dropdown" type="button" data-toggle="dropdown">
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">HTML</a></li>
    <li><a href="#">CSS</a></li>
    <li><a href="#">JavaScript</a></li>
  </ul>
</div>
</div>
</div>-->
<!--
<div class="col-sm-1 ">
  <button type="submit" class="btn btn-default pull-left" id="front-search-button">Search</button>
</div>-->

<div>
</form>
