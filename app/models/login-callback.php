<?php

require_once 'vendor/autoload.php';


include 'facebook.php';

$helper = $fb->getRedirectLoginHelper();
try {
    $accessToken = $helper->getAccessToken();
    $response = $fb->get('/me?fields=id,name,picture.width(300).height(300),email,first_name', $accessToken);
} catch (Facebook\Exceptions\FacebookResponseException $e) {
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
} catch (Facebook\Exceptions\FacebookSDKException $e) {
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
}

if (isset($accessToken)) {
    $_SESSION['facebook_access_token'] = (string)$accessToken;
}
$user = $response->getGraphUser();
//echo 'Email:'.$user['email'].'<br>Name: '.$user['name'];
//echo '<img src='.$user['picture']['url'].' /> ';
$name = $user['first_name'];
header('location:index.php?action=onepage&name='. $name .'');
?>

