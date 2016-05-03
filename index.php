<?php
session_start();
include 'app/views/header.php';
include 'app/config/Connection.php';

$action = (empty($_GET['action'])) ? '' : $_GET['action'];


switch ($action) {
    case 'login':
        include 'app/models/login-callback.php';
        include 'app/models/Upload.php';
        break;

    case 'onepage':
        $name = (empty($_POST['username'])) ? '' : $_POST['username'];
        include 'app/views/onepage.php';
        break;

    case 'virtual-forrest':
        $name = (empty($_POST['username'])) ? '' : $_POST['username'];
        include 'app/models/check.php';
        include 'app/models/getTree.php';
        include 'app/views/virtual-forrest.php';
        break;

    case 'upload-tree':
        $name = (empty($_POST['username'])) ? '' : $_POST['username'];
        include 'app/models/check.php';
        include 'app/models/trees.php';
        break;

    default:
        include 'app/models/login.php';
        include 'app/views/landing-page.php';
}

include 'app/views/footer.php';
