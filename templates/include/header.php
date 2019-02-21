<?php @session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
  <title><?php echo SITE_NAME; ?></title>
  <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="scss/main.css">
</head>
<body>
<header class='header pure-g'>
    <div class="wrapper">
      <div class="nav_logo pure-u-1-2"><a href="/">MyOffers</a></div>
      <nav class="nav_menu pure-u-1-2">
        <div class="pure-menu pure-menu-horizontal">
          <ul class="pure-menu-list">
              <li class="pure-menu-item"><a href="http://cms.local/" class="pure-menu-link">home</a></li>
              <li class="pure-menu-item"><a href="http://cms.local/adver" class="pure-menu-link">classifieds</a></li>
              <?php
                if(!isset($_SESSION['username'])){
                  echo'<li class="pure-menu-item"><a href="http://cms.local/login" class="pure-menu-link active_login">login</a></li>';
                }else{
                  echo '<li class="pure-menu-item"><a href="http://cms.local/add" class="pure-menu-link active_login">Panel</a></li>';
                }
              ?>
          </ul>
        </div>
      </nav>
    </div>
</header>
<div class="wrapper">


