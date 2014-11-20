<?php

/*
|-----------------------------------------------------------------------
| User Controller (CRUD)
|-----------------------------------------------------------------------
| A demo controller to  demonstrate how easy it is to interact with
| the database via the relevant model.. In this case the user model. 
|
*/

use Philo\Blade\Blade;

Class UserController {	

	public $views = 'app/view';
    public $cache = 'app/cache';

	public function postUser( $user ) {
		
		$user = new User(); # -> Define a new user object.

		# -> Define some values for this new user.
		$user->first_name = $user->first_name;
		$user->last_name  = $user->last_name;

		$user->save(); # -> Save the new user to the database, easy ay?

		# Load a view and send in the new user as an object.
		$blade = new Blade( $this->views, $this->cache );
		echo $blade->view()->make( 'users' )
		->with( 'user', $user );
	}

	public function getViewUser($id) 
	{	
		$blade = new Blade($this->views, $this->cache);

		$user = Users::find($id);

		if ( !$user ) {
			echo $blade->view()->make('users')
			->with( 'message', 'I couldnt find a user with the Id of ' . $id );
			die();
		}
		else
		{
			echo $blade->view()->make( 'user' )
			->with('user', $user);
		}
	}

	public function getViewUsers() {
		
		$blade = new Blade( $this->views, $this->cache );

		$users = Users::all();
		
		echo $blade->view()->make( 'users' )
		->with( 'users', $users );
	}

	public function updateUser( $user ) {
		
		# -> Grab the user from the DB using provided Id.
		$user = User::find( $user->id );

		# -> Define some values for this new user.
		$user->first_name = $user->first_name;
		$user->last_name  = $user->last_name;

		$user->save();

		$blade = new Blade( $this->views, $this->cache );
		echo $blade->view()->make( 'users' )
		->with( 'user', $user )
		->with( 'message', 'User updated.');
	}

	public function deleteUser( $user ) {
		
		# Grab the user from the DB using provided Id
		$user = User::find( $user->id );

		$user->delete();

		$blade = new Blade( $this->views, $this->cache );
		echo $blade->view()->make( 'users' )
		->with( 'message', 'User deleted.' );
	}

}

?>