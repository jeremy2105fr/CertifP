<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
  public static function deleteMusic($request)
  {

      $musics = Music::findOrFail($request->id);
      $musics->delete();
      return true;
  }
}
