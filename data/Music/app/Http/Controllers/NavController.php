<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Music as Music;


class NavController extends Controller
{
  public function addMusic()
  {

      return view('moreMusic');
  }
  public function uMusic(Request $request)
  {

    return view('updateMusic', ['music' => ActionController::oneMusic($request)]);

  }

  /*public function addGenre()
  {
    return view('moreGenre');
  }*/
}
