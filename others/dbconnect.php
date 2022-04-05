<?php

$dbhost = 'localhost:3306';  //variable which is the host name
$dbname = 'u_200119137_db'; //the database name
$dbusername = 'u-200119137'; //the database username to connect to it
$dbpassword = 'TzldObHo2xh8HRN'; //the database password to connect to it.

$connection = mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname); //connecting to sqli (aka the sql)

if(!$connection){ //if the connection didnt happen
    die("Database Connection".mysqli_connect_error()); //it will show a message on why it can't connect to the database.
}

?>