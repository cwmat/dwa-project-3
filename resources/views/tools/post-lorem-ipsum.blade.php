@extends('tools.lorem-ipsum-generator')

<?php
// Generate lorem ipsum text based on user input
$generator = new Badcow\LoremIpsum\Generator();
$paragraphs = $generator->getParagraphs($minWords);
?>

{{-- @section('generated-text')
  {{ implode('<p>', $paragraphs) }}
@stop --}}

@section('generated-text')
  {{-- {{ implode('<p>', $paragraphs) }} --}}

  @foreach ($paragraphs as $para)
    <p>
      {{ $para }}
    </p>
  @endforeach
@stop
