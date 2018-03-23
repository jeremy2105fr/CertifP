@extends('layouts.app')
@section('secondTitle', '- Ajouter un genre ')
@section('content', 'Ajouter un nouveau genre')
@section('form')
  {{Form::open(['action' => 'ActionController@newGenre']) }}
 
      <div>
        {{ Form::label('genre_name', 'Nom') }}
        {{ Form::text('genre_name') }}
      </div>
      <div>
        {{ Form::submit() }}
      </div>
  {{ Form::close() }}
@endsection
