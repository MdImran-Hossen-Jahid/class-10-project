<?php
// start the session

include "../database/env.php";

$name = $_REQUEST['name'];

// $error = [];


// if (empty($name)) {
//     $error['name_error'] = "tmr name daw";
// } else if (strlen($name) > 20) {
//     $error['name_error'] = "tmr name beshi kno";
// } else {
//     // forward
// }
$query = "INSERT INTO todo(name) VALUES ('$name')";
$success = mysqli_query($conn, $query);
if ($success) {
    header('location:../index.php');
}
