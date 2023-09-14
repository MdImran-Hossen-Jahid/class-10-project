<?php
SESSION_start();

?>


<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP To "Do List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/style.css">
</head>

<body>

    <!-- form start here-->
    <div class="card">
        <div class="card-header">
            <h2>todo Lise</h2>
        </div>
        <div class="card-body">
            <form action="./controller/control.php" method="post">
                <input type="text" name="name" class="form-control" placeholder="enter name">
                <button class="btn btn-primary">submit</button>
            </form>
        </div>
    </div>
    <!-- form end here -->




</body>

</html>