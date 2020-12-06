@extends('layouts.master')
@section('content')
	<div class="container">
		<div class ="row">
			<div class = "col-sm-12">
				<h5>{{ $attendant->id }}</h5>
				<a href ="/attendants{{ $attendant->id }}/edit">EDIT</a>
				<p>{{ $attendant->name }}</p>
				<form action="/attendant/{{ $attendant->name}}" method ='POST'>
					@csrf
					@method('DELETE')
					<<button class ="btn" type='submit'>Deletes</button>
				</form>

			</div>
		</div>
@endsection		