@extends('layouts.master')
@section('content')
	<div class="container">
		
			
				<h5>Create Ship and Cruises Form</h5>
				
				<form action="/ShipAndCruise/{{ $ShipAndCruise-> id}}" method='POST'>
					@method('PUT')
					@csrf 
					<div class="form-group">
				        	<div class="input-field col s12">
				          		<input id="ID" type="text" class="validate"
				          		value ={{$ShipAndCruise ->ID}}>>>
				          		<label for="ID">Ship ID</label>
				        </div>	      
				     	<div class="row">
				        	<div class="input-field col s12">
				          		<input id="Shipname" type="text" class="validate">
				          		<label for="Shipname">Ship Name</label>
				        </div>
				    </div>
				    <div class="row">
				        <label for="exampleInputEmail1">ShipType</label>
				 		<select class="custom-select">
				 			@foreach($ShipType as $ShipType)
				 			@if()

				 			<option value="{{$ShipType}}" selected>{{ShipType}}</option>
				 			@else
				 			<option value="{{$ShipType}}" >{{ShipType}}</option>
				 			@else
				 			@endif
				 			@endforeach
				 		</select>
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
@endsection		