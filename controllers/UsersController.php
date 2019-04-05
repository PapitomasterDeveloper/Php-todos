<?php

class UsersController

{

	public function index()

	{

		$users = App::get('database')->selectAll('users');

		return view('users', compact('users'));
	}

	public function store()

	{

		App::get('database')->insert('users', [

			'name' => $_POST['name']

		]);

		return redirect('users');

	}
}

// ------------------------------------------ //

// var_dump($_SERVER);

// var_dump($_REQUEST);

// var_dump($_GET);

// var_dump($_GET['name']);

// var_dump($_POST);

//var_dump('You typed ' . $_POST['name']);

?>
