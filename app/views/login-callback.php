<?php

require_once 'vendor/autoload.php';
session_start();

include 'facebook.php';

$helper = $fb->getRedirectLoginHelper();
try {
    $accessToken = $helper->getAccessToken();
    $response = $fb->get('/me?fields=id,name,picture,email', $accessToken);
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


?>
<span class="donate-button-parent">
    <span class="donate-button-child"><a href="#">Doneer nu</a></span>
</span>
<section id="section1" class="intro">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="welcome">

                </div>
            </div>
        </div>
    </div>
</section>

<section class="story">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="">
                    LEL
                </div>
            </div>
        </div>
    </div>
</section>