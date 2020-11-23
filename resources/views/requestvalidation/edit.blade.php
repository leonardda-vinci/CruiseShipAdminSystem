@extends('layout.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>Edit Item</h5>
        <div class="row"></div>
        <div class="row">
            <form class="col s12" action="requestvalidation/{{ $item->id }}" method="POST">
                @include('layout.error')
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="Placeholder" id="product" type="text" name="product"
                            value="{{$item->name}}">
                        <label for="name">Item</label>
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