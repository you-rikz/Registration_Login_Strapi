<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <div class="container">
        <h1 class="form-title">Registration</h1>
        <form action="register.php" method="POST">
            <div class= "main-user-info">
                <div class="user-input-box">
                    <label for="userName">User Name</label>
                    <input type="text" required id="userName" name="userName" placeholder="Enter Username"/>
                </div>

                <div class="user-input-box">
                    <label for="email">Email</label>
                    <input type="email" required id="email" name="email" placeholder="Enter Email"/>
                </div>

                <div class="user-input-box">
                     <label for="password">Password</label>
                    <input type="password" required id="password" name="password" placeholder="Enter Password"/> 
                </div>

                <div class="user-input-box">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" required id="confirmPassword" name="confirmPassword" placeholder="Confirm Password"/>
                </div>
            </div>
            <div class="form-submit-btn">
                <input type="submit" value="Register" >
            </div>
            <div class="abt" style="color: white; text-align: center; padding-top: 5px;">Already have an account? <a href="login-form.php" style="color: white;">Sign In</a></div>
            
        </form>
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
  </style>
</html>