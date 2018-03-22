<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
  public function addMusic()
  {
      return view('moreMusic');
  }
  public function updateMusic()
  {
    return view('musicUpdate');
  }
}
