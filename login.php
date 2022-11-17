<?php

include "vendor/autoload.php";

use App\AuthClient;

$client = new AuthClient();

$identifier= $_POST['identifier'];
$password = $_POST['password'];
// var_dump($identifier, $password);

$result = $client->login($identifier, $password);

$content = json_decode($result->getBody()->getContents());
$id = $content->user->id;
header('Location: welcome-page.php?id='.$id);



