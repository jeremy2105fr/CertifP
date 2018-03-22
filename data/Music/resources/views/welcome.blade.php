@extends('layouts.app')
@section('table')
    @foreach($musics as $music)

        <table>
            <tr>
                <th>Lieu</th>
                <th>Genre</th>
                <th>Decription</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            <tr>
                <td>{{ $music['music_name'] }}</td>
                <td>{{ $music['author'] }}</td>
                <td>{{ $music['genre'] }}</td>
                <td>{{ $music['date'] }}</td>
                <td>
                {{ Form::open(['url' => '/updateMusic', 'class' => 'form']) }}
                    {{ Form::hidden('id', $music['id']) }}
                    {{ Form::submit('O', ['class' => 'bouton']) }}
                {{ Form::close() }}
                </td>
                <td>
                    {{ Form::open(['url' => '/#', 'class' => 'form']) }}
                        {{ Form::hidden('id', $music['id']) }}
                        {{ Form::submit('X', ['class'=> 'bouton']) }}
                    {{ Form::close() }}
                </td>
              </tr>
          @endforeach
      </table>

@endsection
