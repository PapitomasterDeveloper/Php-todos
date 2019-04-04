<?php 

App::get('database')->insert('users', [

	'name' => $_POST['name']

]);







// ------------------------------------------ //

// var_dump($_SERVER);

// var_dump($_REQUEST);

// var_dump($_GET);

// var_dump($_GET['name']);

// var_dump($_POST);

//var_dump('You typed ' . $_POST['name']);

?>
