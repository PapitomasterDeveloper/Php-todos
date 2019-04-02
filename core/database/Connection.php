<?php

class Connection

{

        // Static = something that is going to help anyone without any instance work
        public static function make($config)

        {

          try {

            return new PDO(

                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']

	 	);

            }

            catch(PDOException $e)

            {

                echo($e->getMessage());
                die('<br/> Could not connect');

            }

        }

}

?>


