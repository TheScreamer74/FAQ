@extends('layouts.application', ['title' => 'Events'])
    @section('content')
        <h1>Events</h1>
        <ul>
            @forelse($events as $event)
                <li>{{ $event }}</li>
            @empty
                {{ "Pas d'énènements" }}
            @endforelse

        </ul>
    @endsection

