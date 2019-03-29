<?php

class Connection
{
        // Static = something that is going to help anyone without any instance work
        public static function make()
        {
                try
        {
                return new PDO('mysql:host=127.0.0.1;dbname=mytodo','root',' ');
        }
        catch(PDOException $e)
        {
                echo($e->getMessage());
                die('<br/> Could not connect');
        }

        }
}
?>


