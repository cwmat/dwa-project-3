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
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
          enim ad minim veniam, quis nostrud exercitation.
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
