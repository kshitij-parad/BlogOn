
<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <link rel="stylesheet" type="text/css" href="../css/newlogin.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <title>Login</title>
 </head>
 
 <body class="login-page" style ="background-image: linear-gradient(to right, #075586, #67b9e6) !important">
 <div class="sign-in-form" >
 <img src="../images/avatar.jpg" alt="Avatar" class="avatar">
 <h1 class="text-center">Sign In</h1>
 <form action="loginconnection.php" id="login" method="POST">
 <div class="form-group position-relative">
 <input type="text" id="username" name="username" placeholder="UserName" class="login-input-box" required>
 <i class="fa fa-user fa-lg position-absolute"></i>
 </div>
 <div class="form-group position-relative">
 <input type="password" id="paswd" name="paswd" placeholder="Password" class="login-input-box" required>
 <i class="fa fa-unlock-alt fa-lg position-absolute"></i>
 </div>
 <br>
 <a href=""><button type="submit" id="sign" class="sign-in-button" name="submit">Sign In</button></a>

 <hr style="height:2px; border-width:0; color:#007CC7; background-color:#007CC7; ">
 <!--p class="or">OR</p>
 <button type="button" id="login-google" name="login-google" class="google-button">Sign In with Google</button--> 
 <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
 </form>
 </div>
 

</body>
</html>

<!--verify login 
 decide if the credentials entered are correct -->
 