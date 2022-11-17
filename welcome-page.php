<?php

include "vendor/autoload.php";
use GuzzleHttp\Client;
use App\AuthClient;

$id = $_GET['id'];

$client = new AuthClient();

    $account = $client->getAcc($id);
    $accData = json_decode($account);
    // var_dump($accData);

$username = $accData->username;
$email = $accData->email;
// var_dump($userName, $email);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>
<body>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME <?php echo $username?></title>
</head>
<body>
    <div class="container">
        <h1 class="form-title">Registration</h1>
        <h1 class="form-user">Username: <?php echo $username?></h1>
        <h1 class="form-user">Email: <?php echo $email?> </h1>


            <!-- <div class= "main-user-info">
                <div class="user-input-box">
                    <label for="userName">Username</label>
                    <input type="text" disabled required id="userName" name="userName" placeholder="<?php echo $username?>"/>
                </div>

                <div class="user-input-box">
                    <label for="email">Email</label>
                    <input type="email" disabled required id="email" name="email" placeholder="<?php echo $email?>"/>
                </div>

            </div>
            <div class="form-submit-btn">
                <input type="submit" value="Register" >
            </div> -->
            <!-- <div class="abt" style="color: white; text-align: center; padding-top: 5px;"> <a href="login-form.php" style="color: white;">Log out</a></div> -->
            
            <button>
  <span> <a href="login-form.php" style="text-decoration:none; ">LOG OUT</a></span>
</button>
            </div>  
</body>
<style>
  *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}


  

body {
    display: flex;
    height: 100vh;
    justify-content: center;
    align-items: center;
    background: url(https://www.auf.edu.ph/images/BYA.jpg);
    background-size: cover;
}

.container{
    width: 100%;
    max-width: 650px;
    background: rgba(0, 0, 0, 0.5);
    padding: 28px;
    margin: 0 28px;
    border-radius: 10px;
    box-shadow: inset -2x 2px 2px white;
}

.form-title {
    font-size: 26px;
    font-weight: 600;
    text-align: center;
    padding-bottom: 6px;
    color: white;
    text-shadow: 2px 2px 2px black;
    border-bottom: solid 1px white;
}
.form-user {
    font-size: 20px;
    font-weight: 400;
    text-align: left;
    padding-bottom: 6px;
    color: white;
    text-shadow: 2px 2px 2px black;
    border-bottom: solid 1px white;
}

.main-user-info {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 20px 0;
}

.user-input-box:nth-child(2n){
    justify-content: end;
}
.user-input-box{
    display: flex;
    flex-wrap: wrap;

    width: 50%;
    padding-bottom: 15px;
}

.user-input-box label{
    width: 95%;
    color: white;
    font-size: 20px;
    font-weight: 400;
    margin: 5px 0;
}

.user-input-box input{
    height: 40px;
    width: 95%;
    border: none;
    border-radius: 3px;
    outline: none;
    border: 1px solid grey;
    padding: 0 10px;
}

.form-submit-btn{
    margin-top: 40px;
}

.form-submit-btn input{
    display:block;
    width: 100%;
    margin-top: 10px;
    font-size: 20px;
    padding: 10px;
    border: none;
    border-radius: 3px;
    color: rgb(209, 209, 209);
    background: rgba(63, 114, 76, 0.7);
}

.form-submit-btn input:hover{
    background: rgba(56, 204, 93, 0.7);
    color:rgb(255, 255, 255);
}

@media(max-width: 600px){
    .container{
        min-width:280px;
    }
    .user-input-box{
        margin-bottom:12px;
        width: 100%;
    }
    .user-input-box:nth-child(2n){
        justify-content: space-between;
    }
    .main-user-info{
        max-height: 380px;
        overflow: auto;
    }
    .main-user-info::webkit-scrollbar{
        width: 0;
    }
}
button {
 border: none;
 position: relative;
 width: 200px;
 height: 73px;
 margin-left: 200px;
 padding: 0;
 z-index: 2;
 -webkit-mask: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' height='868' width='2500' viewBox='0 0 726 252.17'%3E%3Cpath d='M483.92 0S481.38 24.71 466 40.11c-11.74 11.74-24.09 12.66-40.26 15.07-9.42 1.41-29.7 3.77-34.81-.79-2.37-2.11-3-21-3.22-27.62-.21-6.92-1.36-16.52-2.82-18-.75 3.06-2.49 11.53-3.09 13.61S378.49 34.3 378 36a85.13 85.13 0 0 0-30.09 0c-.46-1.67-3.17-11.48-3.77-13.56s-2.34-10.55-3.09-13.61c-1.45 1.45-2.61 11.05-2.82 18-.21 6.67-.84 25.51-3.22 27.62-5.11 4.56-25.38 2.2-34.8.79-16.16-2.47-28.51-3.39-40.21-15.13C244.57 24.71 242 0 242 0H0s69.52 22.74 97.52 68.59c16.56 27.11 14.14 58.49 9.92 74.73C170 140 221.46 140 273 158.57c69.23 24.93 83.2 76.19 90 93.6 6.77-17.41 20.75-68.67 90-93.6 51.54-18.56 103-18.59 165.56-15.25-4.21-16.24-6.63-47.62 9.93-74.73C656.43 22.74 726 0 726 0z'/%3E%3C/svg%3E") no-repeat 50% 50%;
 mask: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' height='868' width='2500' viewBox='0 0 726 252.17'%3E%3Cpath d='M483.92 0S481.38 24.71 466 40.11c-11.74 11.74-24.09 12.66-40.26 15.07-9.42 1.41-29.7 3.77-34.81-.79-2.37-2.11-3-21-3.22-27.62-.21-6.92-1.36-16.52-2.82-18-.75 3.06-2.49 11.53-3.09 13.61S378.49 34.3 378 36a85.13 85.13 0 0 0-30.09 0c-.46-1.67-3.17-11.48-3.77-13.56s-2.34-10.55-3.09-13.61c-1.45 1.45-2.61 11.05-2.82 18-.21 6.67-.84 25.51-3.22 27.62-5.11 4.56-25.38 2.2-34.8.79-16.16-2.47-28.51-3.39-40.21-15.13C244.57 24.71 242 0 242 0H0s69.52 22.74 97.52 68.59c16.56 27.11 14.14 58.49 9.92 74.73C170 140 221.46 140 273 158.57c69.23 24.93 83.2 76.19 90 93.6 6.77-17.41 20.75-68.67 90-93.6 51.54-18.56 103-18.59 165.56-15.25-4.21-16.24-6.63-47.62 9.93-74.73C656.43 22.74 726 0 726 0z'/%3E%3C/svg%3E") no-repeat 50% 50%;
 -webkit-mask-size: 100%;
 cursor: pointer;
 background-color: transparent;
 transform: translateY(8px)
}

a { color: inherit; }

button:after {
 content: '';
 position: absolute;
 left: 0;
 right: 0;
 bottom: 0;
 box-shadow: 0px 0 0 0 white;
 transition: all 2s ease;
}

button:hover:after {
 box-shadow: 0px -13px 56px 12px #ffffffa6;
}

button span {
 position: absolute;
 width: 100%;
 font-size: 15px;
 font-weight: 100;
 left: 50%;
 top: 39%;
 letter-spacing: 3px;
 text-align: center;
 transform: translate(-50%,-50%);
 color: black;
 transition: all 2s ease;
}

button:hover span {
 color: white;
}

button:before {
 content: '';
 position: absolute;
 width: 0;
 height: 100%;
 background-color: black;
 left: 50%;
 top: 50%;
 transform: translate(-50%, -50%);
 transition: all 1s ease;
}

button:hover:before {
 width: 100%;
}


  </style>
</html>
</html>