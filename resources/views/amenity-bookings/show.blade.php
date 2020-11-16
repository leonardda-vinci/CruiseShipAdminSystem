@extends('layouts.master')
@section('content')
	<div class="container">
		<div class ="row">
			<div class = "col-sm-12">
				<h5>{{ $book->id }}</h5>
				<a href ="/bookings{{ $book->id }}/edit">EDIT</a>
				<p>{{ $book->passenger_name }}</p>
				<form action="/bookings/{{ $book->passenger}}" method ='POST'>
					@csrf
					@method('DELETE')
					<<button class ="btn" type='submit'>Deletes</button>
				</form>

			</div>
		</div>
@endsection		