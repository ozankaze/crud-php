<?php

$hosh = "localhost";
$username = "root";
$password = "131410003";
$database = "crudmagelang";

$mysqli = mysqli_connect(
                        $hosh, 
                        $username, 
                        $password, 
                        $database) or die('Not connected to sql');