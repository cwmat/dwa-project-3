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
      <label for="min-words">Number of users:</label>
      <select id="min-words" class="pure-input-1-2" data-option="min-words" name="min-words">
        <option value="2" selected="selected">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
    </div>

    <div class="pure-u-1 is-center generate-button">
      <button type="submit" class="pure-button pure-button-primary">GENERATE</button>
    </div>
  </div>

  <div class="pure-g wrapper is-center">
    <div class="pure-u-1 results-section">
      <div class="content">
        <h1 class="content-head">Here are your random users!</h1>
        <form class="pure-form">
          <input
            class="pure-input-1 pure-input-rounded"
            type="text"
            readonly
            placeholder="Temp"
            value="Hit GENERATE and try it out!">
        </form>
      </div>
    </div>
  </div>
@stop
