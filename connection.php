<?php

    $database= new mysqli("localhost","root","","3rdproject");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>