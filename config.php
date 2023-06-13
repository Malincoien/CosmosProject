<?php

//Koble til databasen
$dbc = mysqli_connect('localhost', 'cosmos', 'mc123', 'cosmos')
or die('Error connecting to MySQL server.');
$mysqli = $dbc;

//$conn = mysqli_connect('localhost', 'root','','cosmos');


