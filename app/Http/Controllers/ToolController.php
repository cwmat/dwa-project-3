<?php

namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;

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
}
