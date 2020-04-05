<?php

$server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "login";

$con = mysqli_connect($server_name, $db_username, $db_password, $db_name);

if (!$con) {
  die("Connection failed: ".mysqli_connect_error());
}
