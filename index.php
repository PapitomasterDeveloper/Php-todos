<?php 

require 'functions.php';
require 'Task.php';
require 'database/Connection.php';
// try
// 	{
// 		$pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo','root',' ');
// 	}
// 	catch(PDOException $e)
// 	{
// 		echo($e->getMessage());
// 		die('<br/> Could not connect');
// 	}

// $statement = $pdo->prepare('select * from todos');

// 	$statement->execute();

// 	// Fetching results in an array fashion
// 	// dd($statement->fetchAll());

// 	// Fetching results in an object fashion
// 	// $tasks = $statement->fetchAll(PDO::FETCH_OBJ);
// 	$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

// Using the Connection class with his static method make in a static fashion
$pdo = Connection::make();

$tasks = fetchAllTasks($pdo);

require 'index.view.php';

?>
