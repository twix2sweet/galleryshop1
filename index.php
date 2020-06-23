<!DOCTYPE html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Qwigley&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Gelasio&display=swap" rel="stylesheet">
  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="css/footer.css">
  <meta name="theme-color" content="#fafafa">
</head>

<body>
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
 <header class="header">
    <div class="container">
      <div class="header__inner">
        <a class="logo" href="index.php">Portrait</a>

        <nav class="nav">
          <a class="nav__link" href="about.php">About us</a>
          <a class="nav__link" href="examples.php">Examples</a>
          <a class="nav__link" href="blog.php">Blog</a>
          <a class="nav__link" href="Order.php">Order</a>
          <a class="nav__link" href="contact.php">Contact</a>
        </nav>
      </div>
    </div>
  </header>

  <div class="intro">
    <div class="container">
      <h2 class="intro__sup">Creative team</h2>
      <h1 class="intro__title">Immortalized moments</h1>
      <a class="btn" href="about.php">See More</a>
    </div>
  </div>
  <!-- __________________SLIDER_____________-->

    <div class="slider_block">
      <h2 class="slider__text">What we can introduce for you!</h2>
      <h1 class="slider_big_text">Our posibilities are unlimited</h1>
      <h3 class="slider__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
        reprehenderit in voluptate velit esse cillum dolore eu
        fugiat nulla pariatur. </h3>
      <input checked type="radio" name="respond" id="desktop">
      <article id="slider">
        <input checked type="radio" name="slider" id="switch1">
        <input type="radio" name="slider" id="switch2">
        <input type="radio" name="slider" id="switch3">
        <input type="radio" name="slider" id="switch4">
        <input type="radio" name="slider" id="switch5">

        <div id="slides">
          <div id="overflow">
            <div class="image">
            <article><img src="images/1s.jpg"></article>
            <article><img src="images/2s.jpg"></article>
            <article><img src="images/3s.jpg"></article>
            <article><img src="images/4s.jpg"></article>
            <article><img src="images/5s.jpg"></article>
          </div>
          </div>
        </div>
        <div id="controls">
          <label for="switch1"></label>
          <label for="switch2"></label>
          <label for="switch3"></label>
          <label for="switch4"></label>
          <label for="switch5"></label>
        </div>

        <div id="active">
          <label for="switch1"></label>
          <label for="switch2"></label>
          <label for="switch3"></label>
          <label for="switch4"></label>
          <label for="switch5"></label>
        </div>
      </article>
    </div>
<?php include("footer.php");?>

  <script src="js/vendor/modernizr-3.8.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
