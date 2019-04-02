<?php 

$app = [];

$app['config'] = require 'config.php';

require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
require 'core/Router.php';
require 'core/Request.php'; 

$config = require 'config.php';

$app['database'] = new QueryBuilder(

	Connection::make($app['config']['database'])

);

// Using the Connection class with his static method make in a static fashion
// $pdo = Connection::make();

// $query = new QueryBuilder($pdo);

?>
