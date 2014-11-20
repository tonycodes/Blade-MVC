<?php 

/*
|-----------------------------------------------------------------------
| Users Model
|-----------------------------------------------------------------------
| Each model is mapped to the database table its name corresponds to, 
| e.g this model is called User so it will map to the table Users.
| Notice the s added, you call the model using its singular expression.
| Eloquent will do the rest for you. 
|
*/

class Users extends Illuminate\Database\Eloquent\Model {
    public $timestamps = false;
}

?>