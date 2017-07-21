<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Futuretech - One Stop Solution Provider</title>

  <!-- CSS  -->
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- favicon codes -->
    <link rel="apple-touch-icon" sizes="57x57" href="apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <!--<link rel="icon" type="image/x-icon" href="/favicon.ico">-->
    <link rel="manifest" href="manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
  <!-- end of favicon codes -->
</head>
<body>

  <nav class="light-blue accent-3" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.php" class="brand-logo center">Future Tech</a>

      <ul id="nav-mobile" class="side-nav">
        <?php
          if ($page === 'index') {
            $cls_in = 'class="active"';
          } else if ($page === 'service') {
            $cls_ser = 'class="active"';
          } else if ($page === 'product') {
            $cls_pro = 'class="active"';
          } else if ($page === 'about') {
            $cls_abo = 'class="active"';
          } else if ($page === 'contact') {
            $cls_con = 'class="active"';
          }
          echo "<li $cls_in><a href=\"index.php\">Home</a></li>
          <li $cls_ser><a href=\"service.php\">Services</a></li>
          <li $cls_pro><a href=\"product.php\">Products</a></li>
          <li $cls_abo><a href=\"about.php\">About Us</a></li>
          <li $cls_con><a href=\"contact.php\">Contact</a></li>";
        ?>
      </ul>

      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
    </div>
  </nav>
