<?php 

/*
|-----------------------------------------------------------------------
| Page Model
|-----------------------------------------------------------------------
| Each model is mapped to the database table its name corresponds to, 
| e.g this model is called Page so it will map to the table Pages.
| Notice the s added, you call the model using its singular expression.
| Eloquent will do the rest for you. 
|
*/

class Pages extends Illuminate\Database\Eloquent\Model {
    public $timestamps = false;
}

?>