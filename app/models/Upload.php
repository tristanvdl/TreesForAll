<?php
$name = $user['name'];
$email = $user['email'];
if ($userData['has_uploaded'] == 1) {

}else {
    $query = "INSERT INTO data (username,email,has_uploaded) VALUES ('$name','$email','1')";
    $result = $mysqli->query($query);
}

?>
