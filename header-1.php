<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kento's Site</title>
  <link rel="stylesheet" href="https://tomap.co/ZP_reset.css" />
  <link rel="stylesheet" href="./stylesheet.css" />
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <?php wp_head(1); ?>
</head>
<body>
  <header class="header2">
    <h2 class="header-ttl2">KENTO KANAI<br><span class="header-span2">OFFICIAL WEBSITE</span></h2>
    <nav class="nav2">
      <ul class="header-nav2">
        <li class="header-nav-list2 btn"><a href="<?php echo home_url('/'); ?>">HOME</a></li>
        <li class="header-nav-list2 btn"><a href="">MY WORKS</a></li>
        <li class="header-nav-list2 btn"><a href="<?php echo home_url('/about/'); ?>">ABOUT ME</a></li>
        <li class="header-nav-list2 btn"><a href="">SERVICE</a></li>
        <li class="header-nav-list2 btn"><a href="">MY SKILL</a></li>
        <li class="header-nav-list2 btn"><a href="<?php echo home_url('/contact-form/'); ?>">CONTACT</a></li>
        <p class="header-nav-list2"><a href="https://twitter.com/home"><i class="fab fa-twitter"></i></a></p>
      </ul>
    </nav>
  </header>