<?php

include '../config/Connection.php';

$name = $_GET['name'];
$queryInsert = "INSERT INTO trees (username,image,has_clicked) VALUES ('$name','tree.png',1)";
$result = $mysqli->query($queryInsert);
header("Location:http:/nieuw/school/year2/period3/PROJ/facebook/workfiles/index.php?action=virtual-forrest&name=Tristan");



?>