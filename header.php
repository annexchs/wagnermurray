<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
      <?php bloginfo('name'); wp_title('&#124;'); ?>
        </title><!-- Bootstrap -->
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
 
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
      	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
       <![endif]-->

  <!-- Cloud.Typography -->
  <link rel="stylesheet" type="text/css" href="//cloud.typography.com/6752452/618464/css/fonts.css" />
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

  <?php wp_head(); ?>
</head>
 <body>
  <div class="container">
    <div class="row">
      <div class="col-xs-8 col-xs-offset-1 col-sm-offset-0 col-sm-2 header logo">
        <a href="<?php echo site_url(); ?>"><img class="img-responsive site-logo" src="<?php echo site_url(); ?>/wp-content/themes/wagner-murray/images/logo.png" alt="Wagner Murray Architects"></a>
      </div>
      <div class="col-xs-1 col-sm-2 header blank">
      </div>
      <div class="col-xs-10 col-sm-2 header navi">
        <hr class="visible-xs">
        <ul class="list-unstyled menu-nav-list">
          <li><a href="?page_id=194">PROJECTS</a></li>
          <li><a href="?page_id=120">ABOUT</a></li>
          <li><a href="?cat=2">BLOG</a></li>
          <li><a href="?page_id=236">CONTACT</a></li></ul>
      </div>
      <?php
      $headerPost = new WP_Query();
      $headerPost->query('showposts=1&cat=2');
      while ($headerPost->have_posts()) : $headerPost->the_post(); ?>
      <div class="col-md-2 header tease hidden-xs">
        <a href="<?php the_permalink(); ?>"><h5><strong>LATEST FROM THE BLOG</strong></h5></a>
        <a href="<?php the_permalink(); ?>"><h6 class="homeheadline"><em><?php the_title(); ?></em></h6></a>
        <div class="date">POSTED <?php the_date() ?></div>
        <a href="<?php the_permalink(); ?>"><p><?php the_excerpt(); ?></p></a>
      </div>
      <?php endwhile; ?>
      <div class="col-xs-2 header address visible-md visible-lg">
        <address><strong>Wagner Murray Archictects, P.A.</strong>
          601 S. Cedar St., Studio 101
          Charlotte, NC 28202<br>
          (704) 372-8603</address>
      </div>
      
    </div>