@extends('layouts.master')

@section('title')
  Tools: Lorem Ipsum Generator
@stop

@section('head')
  <link rel="stylesheet" href= {{ asset('css/tools.css') }} >
  <link rel="stylesheet" href= {{ asset('css/lorem.css') }} >
@stop

@section('nav')
  <ul class="pure-menu-list">
    <li class="pure-menu-item">
      <a href="{{ route('welcome') }}" class="pure-menu-link">Home</a>
    </li>
    <li class="pure-menu-item pure-menu-selected">
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
      <br> Lorem Ipsum Generator
    </h1>
  </div>

  <div class="information pure-g">
    <div class="pure-u-1">
      <div class="l-box">
        <h3 class="information-head">What does this do?</h3>
        <p>
          Lorem Ipsum text is randomly generated 'filler' text that you can use as a placeholder in your applications!  Select the number of paragraphs you want generated below in the <span class="color-text">LOREM IPSUM OPTIONS</span> and hit the <span class="color-text">GENERATE</span> button.  The site will spit out your randomly generated text (with some help from <span class="text-link"><a href="https://github.com/Badcow/LoremIpsum" target="_blank">Badcow/LoremIpsum</a></span>) for you to copy and paste wherever you'd like.
        </p>
      </div>
    </div>
  </div>

  <div class="pure-g is-center">
    <header class="pure-u-1">
      <h3>Lorem Ipsum Options</h3>
    </header>
    <div class="pure-u-1 is-center">
      <form class="pure-form" method="POST" action="{{ route('tools.postLorem') }}">
      <input type='hidden' name='_token' value='{{ csrf_token() }}'>
      <label for="min-words">Number of paragraphs:</label>
      <select id="min-words" class="pure-input-1-2" data-option="min-words" name="min-words">
        <option value="1" selected="selected">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
      <br>
    <div id="generate-button">
      <button type="submit" class="pure-button pure-button-primary">
        GENERATE
      </button>
    </div>
        <h1 class="content-head">Here is your Lorem Ipsum text!</h1>
          <div id="output">
            @yield('generated-text', "Hit GENERATE and try it out!")
          </div>
        </form>
      </div>
    </div>
@stop
