<?php
include "../database/env.php";
$name = $_REQUEST['name'];
echo $name;

exit;

$conn = $mysqli_connect($dbhostname, $dbusername, $dbpassword, $dbname);
$query = "INSERT INTO posts(name) VALUES ('$name')";
$success = mysqli_query($conn, $query);

if ($success) {
    header('location:../index.php');
}
