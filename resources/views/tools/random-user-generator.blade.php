@extends('layouts.master')

@section('title')
  Tools: Random User Generator
@stop

@section('nav')
  <ul class="pure-menu-list">
    <li class="pure-menu-item">
      <a href="{{ route('welcome') }}" class="pure-menu-link">Home</a>
    </li>
    <li class="pure-menu-item">
      <a href="{{ route('tools.getLorem') }}" class="pure-menu-link">Lorem Ipsum Generator</a>
    </li>
    <li class="pure-menu-item">
      <a href="{{ route('tools.getUser') }}" class="pure-menu-link pure-menu-selected">Random User Generator</a>
    </li>
  </ul>
@stop

@section('content')
<div class="information pure-g">
  <div class="pure-u-1">
    <div class="l-box">
      <h3 class="information-head">You made it to the Random User Page!</h3>
    </div>
  </div>
</div>
@stop
