<?php
require_once 'vendor/autoload.php';
include 'facebook.php';

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email', 'user_likes']; // optional
$loginUrl = $helper->getLoginUrl('http://localhost/nieuw/school/year2/period3/PROJ/facebook/workfiles/?action=login', $permissions);
//$loginUrl = $helper->getLoginUrl('http://school.tristanvdl.nl/facebook/?action=login', $permissions);
?>