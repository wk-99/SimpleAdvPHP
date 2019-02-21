<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
  <title><?php echo PANEL; ?></title>
  <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="scss/main.css">
</head>
<body>
<header class='header pure-g'>
    <div class="wrapper">
      <div class="nav_logo pure-u-1-2"><a href="/">MyOffers</a> | <?php echo $session; ?></div>
      <nav class="nav_menu pure-u-1-2">
        <div class="pure-menu pure-menu-horizontal">
          <ul class="pure-menu-list">
              <li class="pure-menu-item"><a href="http://cms.local/add" class="pure-menu-link"><i class="fa fa-plus-square"></i> Add ads</a></li>
              <li class="pure-menu-item"><a href="http://cms.local/your" class="pure-menu-link"><i class="fa fa-file-invoice"></i> My ads</a></li>
              <li class="pure-menu-item"><a href="http://cms.local/logout" class="pure-menu-link"><i class="fa fa-sign-out-alt"></i> Logout</a></li>
          </ul>
        </div>
      </nav>
    </div>
</header>
<div class="wrapper">