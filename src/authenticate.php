<?php

session_start();

$DBHost = 'localhost';
$DBUser = 'root';
$DBPswd = '';
$DBName = 'login';

$conn = mysqli_connect($DBHost, $DBUser, $DBPswd, $DBName);
if ( mysqli_connect_errno() ) {
    exit('Failed to connect: ' . mysqli_connect_error());
}






?>