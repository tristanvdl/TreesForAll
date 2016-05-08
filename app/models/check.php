<?php
//check if tree already excists
$checkQuery = "SELECT has_clicked FROM trees WHERE username = '$name' ";
$result = $mysqli->query($checkQuery);
$data = $result->fetch_assoc();

//check if user data is already in the database
$checkDataQuery = "SELECT has_uploaded FROM data WHERE username = '$name' ";
$resultData = $mysqli->query($checkDataQuery);
$userData = $resultData->fetch_assoc();

//Should've made a function. I know.
?>
