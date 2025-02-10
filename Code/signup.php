<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" type="text/css" href="../css/newlogin.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <title>Register</title>
</head>
<body class="login-page" style ="background-image: linear-gradient(to right, #075586, #67b9e6) !important">
 <div class="sign-in-form">
 <img src="../images/avatar.jpg" alt="Avatar" class="avatar">
 <h1 class="text-center">Sign Up</h1>
 
 <form action="" id="signup" method="POST">
 <div class="form-group position-relative">
 <input type="text" id="email" name="email" placeholder="E-mail ID" class="login-input-box" required>
 <i class="fa fa-user fa-lg position-absolute"></i>
 </div>
 <div class="form-group position-relative">
 <input type="text" id="name" name="name" placeholder="Full Name" class="login-input-box" required>
 <i class="fa fa-user fa-lg position-absolute"></i>
 </div>
 <div class="form-group position-relative">
 <input type="text" id="username" name="username" placeholder="UserName" class="login-input-box" required>
 <i class="fa fa-user fa-lg position-absolute"></i>
 </div>
 <div class="form-group position-relative">
 <input type="password" id="paswd" name="paswd" placeholder="Password" class="login-input-box" required>
 <i class="fa fa-unlock-alt fa-lg position-absolute"></i>
 </div>
 <br>
 <a href=""><button type="submit" id="signin" class="sign-in-button" name="submit">Sign Up</button></a>
 <hr style="height:2px; border-width:0; color:#007CC7; background-color:#007CC7; ">
 <!--p class="or">OR</p>
 <button type="button" id="login-google" name="login-google" class="google-button">Sign In 
with Google</button--> 
 </form>
</div>


</body>
</html>

<?php
$conn = mysqli_connect("localhost", "root", "", "blogon");

//if connection is wrong

if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
session_start();
if(isset($_POST["submit"])) {
$email =  $_POST['email'];
$name =  $_POST['name'];
$username = $_POST['username'];
$paswd = $_POST['paswd'];

$sql = "INSERT INTO signup (email, name, username, paswd) VALUES ('$email','$name','$username', '$paswd')";

if(mysqli_query($conn, $sql)){
    $_SESSION['username'] = $username;
    //echo '<script>alert("Welcome to Geeks for Geeks")</script>';
   // echo '<script> message => alert("Check your gmail spam") </script>';
   header("Location: login.php");
} else{
    echo "ERROR: Hush! Sorry $sql. "
        .mysqli_error($conn);
}
}


mysqli_close($conn);
?>