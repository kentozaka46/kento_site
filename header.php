<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kento's Site</title>
    <link rel="stylesheet" href="https://tomap.co/ZP_reset.css" />
    <link rel="stylesheet" href="./stylesheet.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <body>
    <div id="back-to-top"></div>

    <header class="header">
      <img class="header-img" src="<?php echo get_template_directory_uri(); ?>/img/field-533541_1280.jpg" alt="">
      <h1 class="header-ttl">KENTO KANAI<br><span class="header-span">OFFICIAL WEBSITE</span></h1>
      <span class="nav-menu">
        <i class="nav-menu-i"></i>
        <i class="nav-menu-i"></i>
        <i class="nav-menu-i"></i>
      </span>
      <nav class="nav">
        <ul class="header-nav">
          <li class="header-nav-list"><a href="#">HOME</a></li>
          <li class="header-nav-list"><a href="">MY WORKS</a></li>
          <li class="header-nav-list"><a href="<?php echo home_url('/about/'); ?>">ABOUT ME</a></li>
          <li class="header-nav-list"><a href="">SERVICE</a></li>
          <li class="header-nav-list"><a href="">MY SKILL</a></li>
          <li class="header-nav-list"><a href="<?php echo home_url('/contact-form/'); ?>">CONTACT</a></li>
          <li>FOLLOW ME</li>
          <p class="header-nav-list"><a href="https://twitter.com/home"><i class="fab fa-twitter"></i></a></p>
        </ul>
      </nav>
    </header>