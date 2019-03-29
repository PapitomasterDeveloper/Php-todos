<?php 

function fetchAllTasks($pdo){

	$statement = $pdo->prepare('select * from todos');

	$statement->execute();

	// Fetching results in an array fashion
	// dd($statement->fetchAll());

	// Fetching results in an object fashion
	return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
	// return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}

function dd($data){
	echo '<pre>';
	die(var_dump($data));
	echo '</pre>';
	echo '<br/>';
}

?>
