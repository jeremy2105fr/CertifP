@extends('layouts.app')
@section('form')
  {{Form::open(['action' => 'ActionController@musicUpdated']) }}

      <div class="hidden">
        {{ Form::text('id', $music['id'], array('class' => 'field')) }}
      </div>
      <div>
        {{ Form::label('music_name', 'Nom') }}
        {{ Form::text('music_name', $music['music_name'], array('class' => 'field')) }}
      </div>
      <div>
        {{ Form::label('author', 'Chanteur') }}
        {{ Form::text('author', $music['author'], array('class' => 'field')) }}
      </div>
      <div>
        {{ Form::label('genre', 'Genre') }}
        {{ Form::text('genre', $music['genre'], array('class' => 'field')) }}
      </div>
      <div>
        {{ Form::label('support', 'Support') }}
        {{ Form::text('support', $music['support'], array('class' => 'field')) }}
      </div>
      <div>
        {{ Form::label('date', 'Sortie') }}
        {{ Form::selectYear('date', 1920, 2018, $music['date'], ['class' => 'field']) }}
      </div>
      <div>
        {{ Form::label('stock', 'Stock') }}
        {{ Form::selectYear('stock', -99, 99, $music['stock'], ['class' => 'field']) }}
      </div>
      <div>
        {{ Form::submit() }}
      </div>
  {{ Form::close() }}
@endsection
