<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Music as Music;

class ActionController extends Controller
{
  public function newMusic(Request $request)
  {
    $musics = new Music();

        $musics->music_name = $request->music_name;
        $musics->author = $request->author;
        $musics->genre = $request->genre;
        $musics->date = $request->date;
        $musics->save();
        return redirect('/');
  }

  public function showMusic()
  {
    $musics = Music::all();
    return view('/welcome', ['musics' => $musics]);
        //return view('/welcome')->whit('musics' => $musics);
  }

}
