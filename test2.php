<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'form';

$conn = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (mysqli_connect_error()) {
    exit("Connection failed: " . mysqli_connect_errno());
}

if(!isset($_POST['username'], $_POST['password'], $_POST['email'])){
    exit('Values field(s)');
}

