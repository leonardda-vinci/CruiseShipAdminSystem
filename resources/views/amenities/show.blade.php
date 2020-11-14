@extends('layout.master')

@section('content')
<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12">
                <div class="card pink darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">{{ $amenities-> name }}</span>
                        
                        <h6 style="margin-left: 1em">Amenities Code ID:</h6>
                        <p style="margin-left: 2em">{{ $amenities ->  id }}</p>
                        
                        <h6 style="margin-left: 1em">Code: </h6>
                        <p style="margin-left: 2em">{{ $amenities -> code }}</p>
                    </div>
                    <div class="card-action pink darken-3">
                        <a class="pink-text text-lighten-5" href="/amenities/{{$amenities->id}}/edit">Edit</a>
                        <a class="pink-text text-lighten-5" href="/amenities/{{$amenities->id}}/delete">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection