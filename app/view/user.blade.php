@extends('layouts.master')

@section('title')
Viewing {{ ucwords($user->first_name) . " " . ucwords($user->last_name) }}
@stop

@if ( isset($message) )
	<div class="alert alert-danger text-center">
	{{ $message }}
	</div>
@endif

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">User <b>{{ ucwords($user->first_name) . " " . ucwords($user->last_name) }}</b></h3>
				</div>
			
				<div class="panel-body">

				<form role="form">
					<div class="form-group">
						<label for="first_name">First Name</label>
						<input type="text" class="form-control" id="first_name" value="{{ ucwords($user->first_name) }}">
					</div>
					<div class="form-group">
						<label for="last_name">Last Name</label>
						<input type="text" class="form-control" id="first_name" value="{{ ucwords($user->last_name) }}">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" class="form-control" id="email" value="{{ $user->email }}">
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox"> Active?
						</label>
					</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>

				</div>
			</div>
		</div>
		<div class="col-md-4">
		</div>
	</div>
</div>

@stop