@extends('layouts.application', ['title' => 'Home'])

    @section('content')

        <h1>FAQ_dev</h1>

        {{ $name }}

    @include('shared._date')

    @endsection