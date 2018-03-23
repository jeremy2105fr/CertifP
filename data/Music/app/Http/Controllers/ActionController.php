<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Music as Music;


class ActionController extends Controller
{

  // Create
  public function newMusic(Request $request)
  {
    $musics = new Music();
    $musics->music_name = $request->music_name;
    $musics->author = $request->author;
    $musics->genre = $request->genre;
    $musics->date = $request->date;
    $musics->support = $request->support;
    $musics->stock = $request->stock;
    $musics->save();
    return redirect('/');
  }

  /*public function newGenre(Request $request)
  {
    $genres = new Genre();
    $genres->genre_name = $request->genre_name;
    $genres->save();
    return redirect('/');
  }*/

  // Read
  public function showMusic()
  {
    $musics = Music::all();
    return view('/welcome', ['musics' => $musics]);
  }


  // Update
  public static function oneMusic($request)
  {
      return Music::find($request->id);

  }
  public function musicUpdated(Request $request)
  {
    $musics = Music::find($request->id);
    $musics->music_name = $request->music_name;
    $musics->author = $request->author;
    $musics->genre = $request->genre;
    $musics->date = $request->date;
    $musics->support = $request->support;
    $musics->stock = $request->stock;
    $musics->save();
    return redirect('/');
  }

  // Delete
  public function deleteMusic(Request $request){
        $MusicDeleted = Music::deleteMusic($request);
        if($MusicDeleted) {
            return redirect('/');

        } else {
            throw new \Exception("Error");
        }
    }
}
