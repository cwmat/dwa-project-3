@extends('layouts.master')

@section('title')
  Welcome: Developer's Best Friend
@stop

@section('nav')
  <ul class="pure-menu-list">
    <li class="pure-menu-item pure-menu-selected">
      <a href="{{ route('welcome') }}" class="pure-menu-link">Home</a>
    </li>
    <li class="pure-menu-item">
      <a href="{{ route('tools.getLorem') }}" class="pure-menu-link">Lorem Ipsum Generator</a>
    </li>
    <li class="pure-menu-item">
      <a href="{{ route('tools.getUser') }}" class="pure-menu-link">Random User Generator</a>
    </li>
  </ul>
@stop

@section('content')
  <div class="banner">
    <h1 class="banner-head">
      Developer's Best Friend
      <br> Tools to Help You Get Started
    </h1>
  </div>


  <div class="information pure-g">
    <div class="pure-u-1">
      <div class="l-box">
        <h3 class="information-head">Tools</h3>
        <p>
          <span class="color-text">Developer's Best Friend</span> provides two (for now) tools to help developers deal with common tedious tasks.  These tools attempt to automate repetitive tasks and are freely available for developers to use for their projects.
        </p>
        <p>
          So far there are two tools, <span class="color-text">Lorem Ipsum Generator</span> and <span class="color-text">Random User Generator</span>.  <span class="color-text">Lorem Ipsum Generator</span> produces random filler text of varying lengths to use as a placeholder for projects.  <span class="color-text">Random User Generator</span> lays out several options to choose from that allow you to randomly produce fake users with fake information.
        </p>
        <p>
          These projects were built with the help of these great <span class="color-text">PHP packages</span>: <span class="text-link"><a href="https://github.com/fzaninotto/Faker" target="_blank">fzaninotto/Faker</a></span> and <span class="text-link"><a href="https://github.com/Badcow/LoremIpsum" target="_blank">Badcow/LoremIpsum</a></span>.  Click below or in the nav bar to try them out!
        </p>
      </div>
    </div>
  </div>


  <div class="l-content">
    <div class="tool-tables pure-g">
      <div class="pure-u-1 pure-u-md-1-2">
        <div class="tool-table tool-table-biz tool-table-selected">
          <div class="tool-table-header">
            <h2>Lorem Ipsum Generator</h2>

            <span class="tool-table-price">
              <div class="tool-table-link">
                <a href="{{ route('tools.getLorem') }}">Get Started</a>
              </div>
              <span>Populate your app with random placeholder text</span>
            </span>
          </div>
        </div>
      </div>

      <div class="pure-u-1 pure-u-md-1-2">
        <div class="tool-table tool-table-enterprise">
          <div class="tool-table-header">
            <h2>Random User Generator</h2>

            <span class="tool-table-price">
              <div class="tool-table-link">
                <a href="{{ route('tools.getUser') }}">Get Started</a>
              </div>
              <span class="tool-table-desc">Create random users for your application</span>
            </span>
          </div>
        </div>
      </div>
    </div>
    <!-- end tool-tables -->
  </div>
  <!-- end l-content -->
@stop
