<?php

namespace p3\Http\Controllers;

use Illuminate\Http\Request;

class ToolController extends Controller
{
    public function __construct()
    {
        // None for now
    }

  /**
   * Responds to requests to GET /tools.
   */
  public function getIndex()
  {
      return redirect()->route('welcome');
  }

  /**
   * Responds to requests to GET /tools/lorem-ipsum-generator.
   */
  public function getLoremIpsumGenerator()
  {
      return view('tools.lorem-ipsum-generator');
  }

  /**
   * Responds to requests to POST /tools/lorem-ipsum-generator.
   */
  public function postLoremIpsumGenerator(Request $request)
  {
      $minWords = $request->input('min-words');

      return view('tools.post-lorem-ipsum', ['minWords' => $minWords]);
  }

  /**
   * Responds to requests to GET /tools/random-user-generator.
   */
  public function getRandomUserGenerator()
  {
      return view('tools.random-user-generator');
  }

  /**
   * Responds to requests to POST /tools/random-user-generator.
   */
  public function postRandomUserGenerator(Request $request)
  {
      // Validate request
    $this->validate($request, [
      'num-users' => 'required|max:2|numeric',
    ]);

      $numUsers = $request->input('num-users');
      $addBday = $request->input('add-bday');
      $addLocation = $request->input('add-location');
      $addBlurb = $request->input('add-blurb');

      return view('tools.post-random-user',
    [
      'numUsers' => $numUsers,
      'addBday' => $addBday,
      'addLocation' => $addLocation,
      'addBlurb' => $addBlurb,
      ]);
  }
}
