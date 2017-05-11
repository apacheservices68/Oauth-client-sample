<?php
/**
 * Created by PhpStorm.
 * User: Vinh Banh <apacheservices68@gmail.com>
 * Version: 1.0
 */
function Redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
}
$query = http_build_query([
    'client_id' => '4',
    'redirect_uri' => 'http://info.local:81/auth.php',
    'response_type' => 'token',
    'scope' => '*'
]);

Redirect('http://auth.local:81/oauth/authorize?'.$query);