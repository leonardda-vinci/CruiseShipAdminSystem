@extends('layout.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>Create Amenities</h5>
        <div class="row"></div>
        <div class="row">
            <form class="col s12" action="/amenities" method="POST">
                @csrf
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="Placeholder" id="name" type="text" class="validate" name="name">
                        <label for="name">Name</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="code" type="text" class="validate" name="code">
                        <label for="code">Code</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field">
                        <button class="waves-effect waves-light btn" type="submit" name="action">Create
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection