@extends('layouts.app')
@section('secondTitle', '- Ajouter une Musique ')
@section('content', 'Ajouter une nouvelle musique')
@section('form')
  {{Form::open(['action' => 'ActionController@newMusic']) }}

      <div>
        {{ Form::label('music_name', 'Nom') }}
        {{ Form::text('music_name') }}
      </div>
      <div>
        {{ Form::label('author', 'Chanteur') }}
        {{ Form::text('author') }}
      </div>
      <div>
        {{ Form::label('genre', 'Genre') }}
        {{ Form::text('genre') }}
      </div>
      <div>
        {{ Form::label('support', 'Support') }}
        {{ Form::text('support') }}
      </div>
      <div>
        {{ Form::label('date', 'Sortie') }}
        {{ Form::selectYear('date', 1920, 2018, 2018, ['class' => 'field']) }}
      </div>
      <div>
        {{ Form::label('stock', 'Stock') }}
        {{ Form::selectRange('stock', -99, 99, 0, ['class' => 'field']) }}
      </div>
      <div>
        {{ Form::submit() }}
      </div>
  {{ Form::close() }}
@endsection
