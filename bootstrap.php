<?php 

require 'database/Connection.php';
require 'database/QueryBuilder.php';

$config = require 'config.php';

// Using the Connection class with his static method make in a static fashion
// $pdo = Connection::make();

// $query = new QueryBuilder($pdo);

return new QueryBuilder(

	Connection::make($config['database'])

);

?>
