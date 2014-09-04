@extends('layouts.default')

@section('content')
    {{ BootForm::open()->attribute('action', '/users') }}
        {{ BootForm::text('Name', 'name') }}
        {{ BootForm::text('Email', 'email') }}
        {{ BootForm::submit('Submit') }}
    {{ BootForm::close() }}
@stop
