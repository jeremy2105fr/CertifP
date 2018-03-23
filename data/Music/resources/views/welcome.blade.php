@extends('layouts.app')
@section('table')
  <table>
      <tr>
          <th>Titre</th>
          <th>Autheur</th>
          <th>Genre</th>
          <th>Support</th>
          <th>Date de sortie</th>
          <th>Stock</th>


      </tr>
    @foreach($musics as $music)


            <tr>
                <td>{{ $music['music_name'] }}</td>
                <td>{{ $music['author'] }}</td>
                <td>{{ $music['genre'] }}</td>
                <td>{{ $music['support'] }}</td>
                <td>{{ $music['date'] }}</td>
                <td>{{ $music['stock'] }}</td>

                <td class="noBorder">
                {{ Form::open(['url' => '/upMusic', 'class' => 'form']) }}
                    {{ Form::hidden('id', $music['id']) }}
                    {{ Form::submit('Mettre à jour', ['class' => 'bouton']) }}
                {{ Form::close() }}
                </td>
                <td class="mini noBorder">
                    {{ Form::open(['url' => '/deleteMusic', 'class' => 'form']) }}
                        {{ Form::hidden('id', $music['id']) }}
                        {{ Form::submit('X', ['class'=> 'bouton']) }}
                    {{ Form::close() }}
                </td>
              </tr>
          @endforeach
      </table>

@endsection
