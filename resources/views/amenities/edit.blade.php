@extends('layout.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>Edit Amenities</h5>
        <div class="row"></div>
        <div class="row">
            <form class="col s12" action="/amenities/{{ $amenities->id }}" method="POST">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="Placeholder" id="name" type="text" name="name"
                            value="{{$amenities->name}}">
                        <label for="name">Name</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="code" type="text" name="code"
                            value="{{$amenities->code}}">
                        <label for="code">code</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field">
                        <button class="btn waves-effect waves-light pink darken-3" type="submit" name="action">Update
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection