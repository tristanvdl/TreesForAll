<?php

include 'app/views/header.php';
include 'app/config/Connection.php';


$action = (empty($_GET['action'])) ? '' : $_GET['action'];

switch ($action) {
    case 'onepage':
        include 'app/views/login-callback.php';
        include 'app/models/Upload.php';
        break;
    
    default:
        include 'app/views/landing-page.php';
}

include 'app/views/footer.php';

