<?php
/**
 * The Header for user profile page.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title><?php wp_title( '|', true, 'right' ); ?></title>

  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php do_action( 'before' ); ?>

<div class="container" id="main-container">
<hr class="top-line">
<nav class="site-navigation" >

<?php // substitute the class "container-fluid" below if you want a wider content area ?>
  <div class="container">
    <div class="row">
      <div class="site-navigation-inner col-sm-12">
<nav class="navbar navbar-default" id="navbar-profile">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">Home <span class="sr-only">(current)</span></a></li>
        
        
      </ul>
        <form class="navbar-form navbar-left"  role="search" >
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i>User name</a>
          <ul class="dropdown-menu">
            <li><a href="#">Profile</a></li>
            <li><a href="#">Followers</a></li>
            <li><a href="#">Followings</a></li>
            
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-bell" ></i></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-h fa-lg"></i></a>
          <ul class="dropdown-menu">
            <li><a href="#">Posts</a></li>
            
            
            <li><a href="#">Payment</a></li>
            <li><a href="#">Upload content</a></li>
            <li><a href="#">Upload services</a></li>
            <li><a href="#">Content forum</a></li>
            <li><a href="#">Work forum</a></li>
            
            <li role="separator" class="divider"></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Log out</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  
  </div><!-- /.container-fluid -->
</nav>
</div><!--end site-navigation-inner-->
</div>
</div>

</nav><!-- .site-navigation -->
<!--navigation menu ends here-->

<!--main content-->
<div class="main-content">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
  <div class="container">
    <div class="row">
      <div id="content" class="main-content-inner col-xs-12">