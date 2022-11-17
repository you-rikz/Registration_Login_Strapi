<?php

include "vendor/autoload.php";

use App\AuthClient;

$client = new AuthClient();

$username = $_POST['userName'];
$email = $_POST['email'];
$password = $_POST['password'];
// var_dump($username, $email, $password);

$result = $client->register($username, $email, $password);

header('Location: successful-page.php');

// var_dump($result->getStatusCode());
// var_dump($result->getReasonPhrase());
// var_dump($result->getProtocolVersion());
// var_dump($result->getBody()->getContents());
