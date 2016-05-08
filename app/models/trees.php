<?php

if ($data['has_clicked'] != 1) {
    $queryInsert = "INSERT INTO trees (username,image,has_clicked) VALUES ('$name','boom.png',1)";
    $result = $mysqli->query($queryInsert);
}
?>

<div class="clicked">
    <h1>Je boom is geplant! </h1>
    <form action="index.php?action=virtual-forrest" method="post">
        <input type="hidden" name="username" value="<?php echo $name ?>">
        <input class="button-forrest-clicked" type="submit" value="Klik hier om terug te gaan.">
    </form>
</div>
