Blade-MVC
=========

Simple MVC With Laravel's Blade Templating Engine

The idea is that we post slugs in the URL, grab them and then use this value to define a controller/function. 
This then allows you to simply invoke the blade templating engine very simply in the controller function, similar 
to Laravel in terms of templating. You can also now use Laravel's eloquent ORM to map your models to tables. 

Each model is mapped to the database table its name corresponds to, 
e.g this model is called Content so it will map to the table Contents. Notice the S added, you call the model using 
its singular expression. Eloquent will do the rest for you. 
