<?php

$host = "sqlXXX.infinityfree.com";

$user = "your_database_username";

$password = "your_database_password";

$database = "your_database_name";

$conn = mysqli_connect(
$host,
$user,
$password,
$database
);

if(!$conn){

die("Connection Failed: "
. mysqli_connect_error());

}

?>