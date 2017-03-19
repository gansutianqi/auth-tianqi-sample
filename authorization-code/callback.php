<?php

require ('../vendor/autoload.php');
require ('../config.php');

$code=trim($_GET['code']);

$http=new \GuzzleHttp\Client();

$response=$http->post($auth_get_token_uri,[
    'form_params' => [
        'grant_type' => 'authorization_code',
        'client_id' => $client_id,
        'client_secret' => $client_secret,
        'redirect_uri' => $redirect_uri,
        'code' => $code,
    ],
]);

echo $response->getBody();