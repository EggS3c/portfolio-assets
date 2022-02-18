



<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php if (get_theme_mod('title')):?>
    <?php echo get_theme_mod('title');?>
      <?php endif;?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="HTML5 website template">
  <meta name="keywords" content="global, template, html, sass, jquery">
  <meta name="author" content="Bucky Maler">

        <?php Wp_head()?>
        
</head>
<body>

<!-- notification for small viewports and landscape oriented smartphones -->
<div class="device-notification">
  <a class="device-notification--logo" href="#0">
  <!--  <img src="assets/img/logo.png" alt="Global">-->
    <?php if (get_theme_mod('notification_img')):?>
      <img src="<?php echo get_theme_mod('notification_img');?>" alt="img">
      <?php endif;?>
  </a>
  <p class="device-notification--message">
    <?php if (get_theme_mod('notification_paragrapth')):?>
      <?php echo get_theme_mod('notification_paragrapth');?>
      <?php endif;?>
  </p>
</div>

<div class="perspective effect-rotate-left">
  <div class="container"><div class="outer-nav--return"></div>
    <div id="viewport" class="l-viewport">
      <div class="l-wrapper">
        <header class="header">
          <a class="header--logo" href="#0">
          <!--  <img src="assets/img/logo.png" alt="Global">-->
            <?php 
              if(function_exists('the_custom_logo')){
                the_custom_logo();
              } else{
                bloginfo('name');
              }
              ?>
          </a>
         <!-- <button class="header--cta cta">Hire me</button>-->
              <?php if (get_theme_mod('cta_header')):?>
                <button class="header--cta cta"><?php echo get_theme_mod('cta_header');?></button>
              <?php endif;?>
          <div class="header--nav-toggle">
            <span></span>
          </div>
        </header>
        <nav class="l-side-nav">
          <ul class="side-nav">
            <li class="is-active"><span>
                <?php if (get_theme_mod('inner_home')):?>
                    <?php echo get_theme_mod('inner_home');?>
                  <?php endif;?>
            </span></li>
            <li><span><?php if (get_theme_mod('inner_about')):?>
                <?php echo get_theme_mod('inner_about');?>
                  <?php endif;?>
            </span></li>
            <li><span><?php if (get_theme_mod('inner_recent')):?>
                    <?php echo get_theme_mod('inner_recent');?>
                  <?php endif;?></span></li>
            <li><span>
            <?php if (get_theme_mod('inner_contact')):?>
                    <?php echo get_theme_mod('inner_contact');?>
                  <?php endif;?>
            </span></li>
            <li><span>
            <?php if (get_theme_mod('inner_services')):?>
                    <?php echo get_theme_mod('inner_services');?>
                  <?php endif;?>
            </span></li>
          </ul>
        </nav>