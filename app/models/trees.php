<?php

if ($data['has_clicked'] != 1) {
    $queryInsert = "INSERT INTO trees (username,image,has_clicked) VALUES ('$name','boom.png',1)";
    $result = $mysqli->query($queryInsert);
}
?>

<div class="clicked">
    <h1>Je boom is geplant! </h1>
    <a href="index.php?action=virtual-forrest">Klik hier om terug te gaan!</a>
</div>
