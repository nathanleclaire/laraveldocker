@extends('layouts.default')

@section('content')
    {{ BootForm::open()->attribute('action', '/users/' . $user->id . '/save')->attribute('method', 'POST') }}
        {{ BootForm::text('Name', 'name')->attribute('value', $user->name) }}
        {{ BootForm::text('Email', 'email')->attribute('value', $user->email) }}
        {{ BootForm::submit('Submit') }}
    {{ BootForm::close() }}
@stop
