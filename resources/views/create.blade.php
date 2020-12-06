@extends('layouts.master')
@section('content')
	<div class="container">
		<div class ="row">
			<div class = "col 12">
				<h5>Attendants</h5>
				<form action="/attendants" method='POST'>
					@inclue('layouts.error')
					@csrf 
					<div class="row">
				 		<form class="col s12">
				      		<div class="row">
				        		<div class="input-field col s6">
				          		<input placeholder="name" id="name" type="text" class="validate">
				          		<label for="name">Name</label>
				        	</div>
				        </div>			      
				     	<div class="row">
				        	<div class="input-field col s12">
				          		<input id="position" type="text" class="validate">
				          		<label for="position">Amenity Name</label>
				          		<input id="gender" type="text" class="validate">
				          		<label for="gender">Amenity Name</label>
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