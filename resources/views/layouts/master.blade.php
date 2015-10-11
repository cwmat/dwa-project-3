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

  <link rel="icon" href="/favicon.ico"> {{-- Stylesheets --}}
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
  <!--[if lte IE 8]>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
  <![endif]-->
  <!--[if gt IE 8]><!-->
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
  <!--<![endif]-->
  <!--[if lte IE 8]>
    <link rel="stylesheet" href="css/layouts/p3-old-ie.css">
  <![endif]-->
  <!--[if gt IE 8]><!-->
  <link rel="stylesheet" href="css/layouts/p3.css">
  <!--<![endif]-->
  <link rel="stylesheet" href="css/main.css">
  <script src="js/vendor/modernizr-2.8.3.min.js"></script>
  {{-- Yield any page specific files --}} @yield('head')
</head>

<body>
  <!-- Content -->






  <div class="pure-menu pure-menu-horizontal">
    <a href="#" class="pure-menu-heading">Your Logo</a>
    <ul class="pure-menu-list">
      <li class="pure-menu-item"><a href="#" class="pure-menu-link">Home</a></li>
      <li class="pure-menu-item pure-menu-selected"><a href="#" class="pure-menu-link">Pricing</a></li>
      <li class="pure-menu-item"><a href="#" class="pure-menu-link">Contact</a></li>
    </ul>
  </div>

  <div class="banner">
    <h1 class="banner-head">
      Simple Pricing.
      <br> Try before you buy.
    </h1>
  </div>

  <div class="l-content">
    <div class="pricing-tables pure-g">
      <div class="pure-u-1 pure-u-md-1-3">
        <div class="pricing-table pricing-table-free">
          <div class="pricing-table-header">
            <h2>Personal</h2>

            <span class="pricing-table-price">
              $5
              <span>per month</span>
            </span>
          </div>

          <ul class="pricing-table-list">
            <li>Free setup</li>
            <li>Custom sub-domain</li>
            <li>Standard customer support</li>
            <li>1GB file storage</li>
            <li>1 database</li>
            <li>Unlimited bandwidth</li>
          </ul>

          <button class="button-choose pure-button">Choose</button>
        </div>
      </div>

      <div class="pure-u-1 pure-u-md-1-3">
        <div class="pricing-table pricing-table-biz pricing-table-selected">
          <div class="pricing-table-header">
            <h2>Small Business</h2>

            <span class="pricing-table-price">
              $25
              <span>per month</span>
            </span>
          </div>

          <ul class="pricing-table-list">
            <li>Free setup</li>
            <li>Use your own domain</li>
            <li>Standard customer support</li>
            <li>10GB file storage</li>
            <li>5 databases</li>
            <li>Unlimited bandwidth</li>
          </ul>

          <button class="button-choose pure-button">Choose</button>
        </div>
      </div>

      <div class="pure-u-1 pure-u-md-1-3">
        <div class="pricing-table pricing-table-enterprise">
          <div class="pricing-table-header">
            <h2>Enterprise</h2>

            <span class="pricing-table-price">
              $45
              <span>per month</span>
            </span>
          </div>

          <ul class="pricing-table-list">
            <li>Free setup</li>
            <li>Use your own domain</li>
            <li>Premium customer support</li>
            <li>Unlimited file storage</li>
            <li>25 databases</li>
            <li>Unlimited bandwidth</li>
          </ul>

          <button class="button-choose pure-button">Choose</button>
        </div>
      </div>
    </div>
    <!-- end pricing-tables -->

    <div class="information pure-g">
      <div class="pure-u-1 pure-u-md-1-2">
        <div class="l-box">
          <h3 class="information-head">Get started today</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
            enim ad minim veniam, quis nostrud exercitation.
          </p>
        </div>
      </div>

      <div class="pure-u-1 pure-u-md-1-2">
        <div class="l-box">
          <h3 class="information-head">Pay monthly or annually</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
          </p>
        </div>
      </div>

      <div class="pure-u-1 pure-u-md-1-2">
        <div class="l-box">
          <h3 class="information-head">24/7 customer support</h3>
          <p>
            Cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua.
          </p>
        </div>
      </div>

      <div class="pure-u-1 pure-u-md-1-2">
        <div class="l-box">
          <h3 class="information-head">Cancel your plan anytime</h3>
          <p>
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
      </div>
    </div>
    <!-- end information -->
  </div>
  <!-- end l-content -->

  <div class="footer l-box">
    <p>
      <a href="#">Try now</a> for 14 days. No credit card required. Header image courtesy of <a href='http://unsplash.com/'>Unsplash</a>.
    </p>
  </div>







  {{-- Import JS --}}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>
    window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')
  </script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
  <script>
    (function(b, o, i, l, e, r) {
      b.GoogleAnalyticsObject = l;
      b[l] || (b[l] =
        function() {
          (b[l].q = b[l].q || []).push(arguments)
        });
      b[l].l = +new Date;
      e = o.createElement(i);
      r = o.getElementsByTagName(i)[0];
      e.src = 'https://www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X', 'auto');
    ga('send', 'pageview');
  </script>

  {{-- Yield any page specific JS files --}} @yield('js-body')
</body>

</html>
