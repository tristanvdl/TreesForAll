<?php

include 'app/views/header.php';
include 'app/config/Connection.php';


$action = (empty($_GET['action'])) ? '' : $_GET['action'];

switch ($action) {
    case 'login':
        include 'app/models/login-callback.php';
        include 'app/models/Upload.php';
        break;

    case 'onepage':
        include 'app/views/onepage.php';
        break;

    case 'virtual-forrest':
        
        break;

    default:
        include 'app/models/login.php';
        include 'app/views/landing-page.php';
}

include 'app/views/footer.php';

