@extends('layouts.master')
@section('content')
	<div class="container">
		<div class ="row">
			<div class = "col-sm-12">
				<h5>Ships And Cruises</h5>
				<a href = "/ShipsAndCruises/create">Create ShipsAndCruises</a>
				<ol>
				@foreach($ShipsAndCruises as $ShipsAndCruises)
					<li>
						<a href="/ShipsAndCruises/{{ $ShipsAndCruises->id }}">{{ $ShipsAndCruises->Ship_name }}</a>
					</li>

				@endforeach
				</ol>
			</div>
		</div>
@endsection		