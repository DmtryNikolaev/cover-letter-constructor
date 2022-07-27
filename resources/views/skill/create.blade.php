@extends('layouts.app')
@section('content')
{{ Form::model($skill, ['route' => 'skill.store']) }}
{{ Form::label('name', 'Название') }}
{{ Form::text('name', null, ['class' => 'form-control']) }}<br>
{{ Form::label('body', 'Содержание') }}
{{ Form::textarea('body', null, ['class' => 'form-control']) }}<br>
{{ Form::submit('Отправить', ['class' => 'btn btn-primary']) }}
{{ Form::close() }}
@endsection