<?php

$checkQuery = "SELECT has_clicked FROM trees WHERE username = '$name' ";
$result = $mysqli->query($checkQuery);

$data = $result->fetch_assoc();

?>
