@extends('layouts.master')

@section('title')
Users page title
@stop

@if ( isset($message) )
	<div class="alert alert-danger text-center">
	{{ $message }}
	</div>
@endif

<div class="container">

	<div class="row">
		<div class="col-md-12">

		@section('content')
			@foreach ( $users as $user )
		    <table class="table table-bordered">
			    <thead>
				    <td>id</td>
				    <td>First Name</td>
				    <td>Last Name</td>
				    <td>Email</td>
			    </thead>
			    <tr>
				    <td>{{ $user->id }}</td>
				    <td>{{ $user->first_name }}</td>
				    <td>{{ $user->last_name }}</td>
				    <td>{{ $user->email }}</td>
			    </tr>
		    </table>
		    @endforeach
		@stop

		</div>
	</div>

</div>