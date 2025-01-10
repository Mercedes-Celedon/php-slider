<?php
require_once 'src/database/db-connection.php';

$query = "SELECT * FROM projects";
$query_response = mysqli_query($connection, $query);

$projects = mysqli_fetch_all($query_response, MYSQLI_ASSOC);
?>