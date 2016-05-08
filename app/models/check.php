<?php
//check if tree already excists
$checkQuery = "SELECT has_clicked FROM trees WHERE username = '$name' ";
$result = $mysqli->query($checkQuery);
$data = $result->fetch_assoc();

//check if user data is already in the database
$checkdataQuery = "SELECT email FROM data WHERE name = '$name' ";
$result = $mysqli->query($checkQuery);
$data = $result->fetch_assoc();
?>
