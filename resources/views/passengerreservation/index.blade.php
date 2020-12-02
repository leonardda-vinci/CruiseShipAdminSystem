@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>PassengerReservation</h5>
        <a href="/passengerreservation/create">Create PassengerReservation</a>
        <ol>
            @foreach ($passengerreservation as $passengerreservation)
            <li>
                <a target="_blank" href="/passengerreservation/{{$passengerreservation->id}}">{{$passengerreservation->name}}</a>
            </li>
            @endforeach
        </ol>
    </div>
</div>
@endsection