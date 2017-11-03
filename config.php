<?php

$hosh = "localhost";
$username = "root";
$pasword = "131410003";
$database = "crudmagelang";

$mysqli = mysqli_connect(
                        $hosh, 
                        $username, 
                        $pasword, 
                        $database) or die('Not connected to sql');