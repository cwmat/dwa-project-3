@extends('tools.lorem-ipsum-generator')

<?php
// Create generator object
$generator = new Badcow\LoremIpsum\Generator();

// Switch statment to change length of text
switch ($sizeOption) {
  case 'small-option':
    $generator->setParagraphMean(3.0);
    $generator->setSentenceMean(15.0);
    $generator->setParagraphStDev(0.0);
    break;
  case 'medium-option':
    $generator->setParagraphMean(5.8);
    $generator->setSentenceMean(24.46);
    break;
  case 'long-option':
    $generator->setParagraphMean(6.5);
    $generator->setSentenceMean(30.0);
    break;
}

// Generate lorem ipsum text based on user input
$paragraphs = $generator->getParagraphs($minWords);

?>

@section('generated-text')
  @foreach ($paragraphs as $para)
    <p>
      {{ $para }}
    </p>
  @endforeach
@stop
