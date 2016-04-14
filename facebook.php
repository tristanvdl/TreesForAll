<?php

$fb = new Facebook\Facebook([
'app_id' => '1739938936292887',
'app_secret' => 'ded5e3d06b95a484abcaf07aa3267403',
'default_graph_version' => 'v2.5',
isset($_SESSION['facebook_acces_token']) ? $_SESSION['facebook_acces_token'] : '1739938936292887',
]);

?>
