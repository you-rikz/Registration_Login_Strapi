<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="style.css"/>
    <title>Login Form</title>
</head>
<body>
    <div class="container">
        <h1 class="form-title">Login</h1>
        <form action="login.php" method="POST">
            <div class= "main-user-info">
                <div class="user-input-box">
                    <label for="identifier">Username</label>
                    <input type="text" id="identifier" name="identifier" placeholder="Enter Username"/>
                </div>

                <div class="user-input-box">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter Password"/>
                </div>
            </div>
			<div class="abt" style="color: white; text-align: center; ">Don't have an account? <a href="register-form.php" style="color: white;">Sign Up</a></div>
            <div class="form-submit-btn">
                <input type="submit" value="Login">
            </div>
        </form>
    </div>
    
</body>
</html>