@extends('layout.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>Amenities</h5>
        <a href="/amenities/create">Create Amenities</a>
        <ol>
            @foreach ($amenities as $amenities)
            <li>
                <a target="_blank" href="/amenities/{{$amenities->id}}">{{$amenities->name}}</a>
            </li>
            @endforeach
        </ol>
    </div>
</div>
@endsection