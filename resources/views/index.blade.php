@extends('layouts.master')
@section('content')
	<div class="container">
		<div class ="row">
			<div class = "col-sm-12">
				<h5>Attendants</h5>
				<a href = "/attendants/create">Create Attendants</a>
				<ol>
				@foreach($attendants as $attendant)
					<li>
						<a href="/attendants/{{ $attendant->id }}">{{ $attendant->name }}</a>
					</li>

				@endforeach
				</ol>
			</div>
		</div>
@endsection		