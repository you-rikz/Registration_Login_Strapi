<?php

include "vendor/autoload.php";

use App\AuthClient;

$client = new AuthClient();

$username = "Arnold Lim";
$email = "arnoldlim0337@gmail.com";
$password ="password";

$result = $client->register($username, $email, $password);

// var_dump($result->getStatusCode());
// var_dump($result->getReasonPhrase());
// var_dump($result->getProtocolVersion());
// var_dump($result->getBody()->getContents());
