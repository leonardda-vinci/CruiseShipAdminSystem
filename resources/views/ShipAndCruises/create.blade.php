@extends('layouts.master')
@section('content')
	<div class="container">
		
			
				<h5>Edit Ship and Cruises Form</h5>

				<form action="/ShipAndCruise" method='POST'>
					@csrf 
					<div class="form-group">
				 		<div class="form-group">
				        	<div class="input-field col s12">
				          		<input id="ID" type="text" class="validate"
				         
				          		<label for="ID">Ship ID</label>

				        </div>
				        				      
				     	<div class="form-group">
				        	<div class="input-field col s12">
				          		<input id="Shipname" type="text" class="validate">
				          		<label for="Shipname">Ship Name</label>
				        </div>
				    </div>
				    <div class="form-group">
				        <label for="exampleInputEmail1">ShipType</label>
				 		<select class="custom-select">
				 			@foreach($ShipType as $ShipType)
				 			<option value="{{$ShipType}}">{{ShipType}}</option>
				 			@endforeach
				 		</select>
				    </div>

				       	<div class="form-group">
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
@endsection		