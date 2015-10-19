@extends('layouts.master')

@section('title')
  Tools: Random User Generator
@stop

@section('head')
  <link rel="stylesheet" href= {{ asset('css/tools.css') }} >
  <link rel="stylesheet" href= {{ asset('css/random.css') }} >
@stop

@section('nav')
  <ul class="pure-menu-list">
    <li class="pure-menu-item">
      <a href="{{ route('welcome') }}" class="pure-menu-link">Home</a>
    </li>
    <li class="pure-menu-item">
      <a href="{{ route('tools.getLorem') }}" class="pure-menu-link">Lorem Ipsum Generator</a>
    </li>
    <li class="pure-menu-item pure-menu-selected">
      <a href="{{ route('tools.getUser') }}" class="pure-menu-link">Random User Generator</a>
    </li>
  </ul>
@stop

@section('content')
  <div class="banner">
    <h1 class="banner-head">
      Developer's Best Friend
      <br> Random User Generator
    </h1>
  </div>

  <div class="information pure-g">
    <div class="pure-u-1">
      <div class="l-box">
        <h3 class="information-head">What does this do?</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
          enim ad minim veniam, quis nostrud exercitation.
        </p>
      </div>
    </div>
  </div>

  <div class="pure-g is-center">
    <header class="pure-u-1">
      <h3>Random User Options</h3>
    </header>
    <div class="pure-u-1 is-center">
      <form class="pure-form" method="POST" action="{{ route('tools.postUser') }}">
        {{-- Required hidden input --}}
        <input type='hidden' name='_token' value='{{ csrf_token() }}'>

        <label for="num-users"><span class="color-text">Number of users:</span></label>
        <input
        id="num-users"
        type="num-users"
        name="num-users"
        data-option="num-users"
        value="5"
        maxlength="2"
        size="3">
        <div id="error-report"></div>

        <br>
        <div class="radio-options">
          <div class="pure-u-1">
            <h4>ADD ADDITIONAL INFORMATION ?</h4>
          </div>
          <div class="pure-u-1 pure-u-md-1-4">
          <label for="add-bday" class="pure-checkbox">
            <div>
              <span class="color-text">Birthday</span>
            </div>
          </label>
            <div>
              <input
              id="add-bday"
              type="checkbox"
              name="add-bday"
              data-option="add-bday">
            </div>
          </div>

          <div class="pure-u-1 pure-u-md-1-4">
            <label for="add-location" class="pure-checkbox">
              <div>
                <span class="color-text">Location</span>
              </div>
            </label>
              <div>
                <input
                id="add-location"
                type="checkbox"
                name="add-location"
                data-option="add-location">
              </div>
          </div>

          <div class="pure-u-1 pure-u-md-1-4">
            <label for="add-blurb" class="pure-checkbox">
              <div>
                <span class="color-text">Profile Blurb</span>
              </div>
            </label>
              <div>
                <input
                id="add-blurb"
                type="checkbox"
                name="add-blurb"
                data-option="add-blurb">
              </div>
            </div>
          </div>

          <div id="generate-button">
            <button type="submit" class="pure-button pure-button-primary">
              GENERATE
            </button>
          </div>

          <h1 class="content-head">Here is your randomly generated users!</h1>

          <div id="output">
            @yield('generated-text', "Hit GENERATE and try it out!")
          </div>

      </form>
    </div>
  </div>
@stop
