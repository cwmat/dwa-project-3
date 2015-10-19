@extends('tools.random-user-generator')

<?php
// Check if a radio button is turned on
function isOn($var) {
  if ($var == "on") {
    return true;
  } else {
    return false;
  }
}

// Use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();

?>

@section('generated-text')
  @for ($i = 1; $i <= $numUsers; $i++)
  <div class="user-entry">
    <p>
      <span class="color-text">{{ $faker->name }} </span>
    </p>
    @if (isOn($addBday))
      <p>
        {{ $faker->dateTimeThisCentury->format('Y-m-d') }}
      </p>
    @endif
    @if (isOn($addLocation))
      <p>
        {{ $faker->address }}
      </p>
    @endif
    @if (isOn($addBlurb))
      <p>
        {{ $faker->realText($maxNbChars = 200, $indexSize = 2) }}
      </p>
    @endif
  </div>
  @endfor
@stop
