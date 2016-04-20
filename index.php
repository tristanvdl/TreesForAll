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
        include 'app/models/check.php';
        include 'app/models/getTree.php';
        include 'app/views/virtual-forrest.php';
        break;

    default:
        include 'app/models/login.php';
        include 'app/views/landing-page.php';
}

include 'app/views/footer.php';

