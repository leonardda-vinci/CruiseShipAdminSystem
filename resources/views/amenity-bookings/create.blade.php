@extends('layouts.master')
@section('content')
	<div class="container">
		<div class ="row">
			<div class = "col 12">
				<h5>Create Bookings</h5>
				<form action="/bookings" method='POST'>
					@csrf 
					<div class="row">
				 		<form class="col s12">
				      		<div class="row">
				        		<div class="input-field col s6">
				          		<input placeholder="passenger" id="passenger" type="text" class="validate">
				          		<label for="passenger">Passenger Full Name</label>
				        	</div>
				        </div>			      
				     	<div class="row">
				        	<div class="input-field col s12">
				          		<input id="amenityname" type="text" class="validate">
				          		<label for="amenityname">Amenity Name</label>
				        </div>
				    </div>
				    <div class="row">
				        <div class="input-field col s12">
				          	<input id="email" type="email" class="validate">
				          	<label for="email">Email</label>
				        </div>
				    </div>

				       	<div class="row">
                    		<div class="input-field">
                        		<button class="btn waves-effect waves-light pink darken-3" type="submit" name="action">Create
                            		<i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
		    </form>
		  </div>

				</ol>
			</div>
		</div>
@endsection		