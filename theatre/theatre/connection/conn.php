<?php

session_start();
$hn = 'localhost';
$un = 'root';
$pw = 'root';
$db = 'theatre.db';



if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}