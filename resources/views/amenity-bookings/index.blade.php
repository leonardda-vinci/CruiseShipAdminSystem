@extends('layouts.master')
@section('content')
	<div class="container">
		<div class ="row">
			<div class = "col-sm-12">
				<h5>Amenity Bookings</h5>
				<a href = "/bookings/create">Create Bookings</a>
				<ol>
				@foreach($bookings as $book)
					<li>
						<a href="/bookings/{{ $book->id }}">{{ $book->passenger_name }}</a>
					</li>

				@endforeach
				</ol>
			</div>
		</div>
@endsection		