<?php
$con = mysqli_connect("localhost", "root", "", "marvel_movies");
if (!$con) {
    echo "Could not connect to database ..!";
}
