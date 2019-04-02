<?php 

class QueryBuilder

{

	protected $pdo;

	public function __construct($pdo)

	{

		$this->pdo = $pdo;

	}

	public function selectAll($table)

	{

		$statement = $this->pdo->prepare("select * from {$table}");

        	$statement->execute();

       		// Fetching results in an array fashion
       	 	// dd($statement->fetchAll());

        	// Fetching results in an object fashion
        	return $statement->fetchAll(PDO::FETCH_CLASS);
        	// return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

	}

}

?>
