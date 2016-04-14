<?php
require_once 'vendor/autoload.php';
session_start();
include 'facebook.php';

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email', 'user_likes']; // optional
$loginUrl = $helper->getLoginUrl('http://localhost/nieuw/school/year2/period3/PROJ/facebook/workfiles/?action=onepage', $permissions);
?>



<div class='container-fluid'>
    <div class="row wrap">
        <div id="background" class="mouse-bg"></div>
        <div class="align-mid">
            <div class="child">
                <div class="logo">
                    <img src="app/images/trees_for_all_logo.png" alt="">
                </div>
                <div class="button">
                    <a href="<?php echo $loginUrl ?>"><img src="app/images/fb_login_button.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>