<!doctype html>
<!--
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

  Lorem ipsum:
    https://github.com/Badcow/LoremIpsum

  Fake users:
    https://github.com/fzaninotto/Faker
 -->
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>
    {{-- Yield the title if it exists, otherwise default to 'DBF' --}} @yield('title', "Developer's Best Friend")
  </title>
  <meta name="description" content="Project 3 for HES DWA">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" href= {{ asset('/favicon.ico') }} > {{-- Stylesheets --}}
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
  <!--[if lte IE 8]>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
  <![endif]-->
  <!--[if gt IE 8]><!-->
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
  <!--<![endif]-->
  <!--[if lte IE 8]>
    <link rel="stylesheet" href= {{ asset('css/main-old-ie.css') }} >
  <![endif]-->
  <!--[if gt IE 8]><!-->
  <link rel="stylesheet" href= {{ asset('css/main.css') }} >
  <!--<![endif]-->
  <script src= {{ asset('js/vendor/modernizr-2.8.3.min.js') }} ></script>
  {{-- Yield any page specific files --}} @yield('head')
</head>

<body>
  {{-- Header --}}
  <div class="pure-menu pure-menu-horizontal">
    {{-- Yield nav bar --}} @yield('nav')
  </div>

  {{-- Yield content --}} @yield('content') {{-- Footer --}}
  <div class="footer l-box">
    <div class="pure-u-1 pure-u-md-1-3">
      <a href="https://github.com/cwmat/dwa-project-3" target="_blank">Github for this project</a>
    </div>
    <div class="pure-u-1 pure-u-md-1-3">
      <a href='http://p1.cwmat-dwa.me' target="_blank">Back to P1 project home</a>.
    </div>
  </div>

  {{-- Import JS --}}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>
    window.jQuery || document.write('<script src= {{ asset('js/vendor/jquery-1.11.3.min.js') }} ><\/script>')
  </script>
  <script src= {{ asset('js/main.js') }} ></script>

  <!-- Google Analytics -->
  <script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-68637968-1', 'auto');
    ga('send', 'pageview');
  </script>

  {{-- Yield any page specific JS files --}} @yield('js-body')
</body>

</html>
