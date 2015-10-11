<!doctype html>
{{--
Chaz Mateer HES DWA Project 3 - Developer's Best Friend

Sources:
  Laravel:
    http://laravel.com/

  HTML5 Boilerplate (includes jquery and modernizr):
    https://html5boilerplate.com/

  Pure CSS:
    http://purecss.io/

  Images:
    Unsplash:

  Icon:
    favicon.cc:
      http://www.favicon.cc/?action=icon&file_id=838007
 --}}
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>
    {{-- Yield the title if it exists, otherwise default to 'DBF' --}}
    @yield('title', "Developer's Best Friend")
  </title>
  <meta name="description" content="Project 3 for HES DWA">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" href="/favicon.ico">

  {{-- Stylesheets --}}
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
  <!--[if lte IE 8]>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
  <![endif]-->
  <!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
  <!--<![endif]-->
  <link rel="stylesheet" href="css/main.css">
  <script src="js/vendor/modernizr-2.8.3.min.js"></script>
  {{-- Yield any page specific files --}}
  @yield('head')
</head>
<body>
  <!-- Add your site or application content here -->
  <p>Hello world! This is HTML5 Boilerplate.</p>

  {{-- Import JS --}}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
  <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='https://www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X','auto');ga('send','pageview');
  </script>

  {{-- Yield any page specific JS files --}}
  @yield('js-body')
</body>
</html>
