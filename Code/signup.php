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
<body class="login-page" style="background-image: linear-gradient(to right, #075586, #67b9e6) !important">
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
                <input type="text" id="mobile" name="mobile" placeholder="Mobile Number" class="login-input-box" required>
                <i class="fa fa-phone fa-lg position-absolute"></i>
            </div>
            <div class="form-group position-relative">
                <select id="gender" name="gender" class="login-input-box" required>
                    <option value="" disabled selected>Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
                <i class="fa fa-venus-mars fa-lg position-absolute"></i>
            </div>
            <div class="form-group position-relative">
                <input type="date" id="dob" name="dob" class="login-input-box" required>
                <i class="fa fa-calendar fa-lg position-absolute"></i>
            </div>
            <div class="form-group position-relative">
                <input type="text" id="proff" name="proff" placeholder="Profession" class="login-input-box" required>
                <i class="fa fa-briefcase fa-lg position-absolute"></i>
            </div>
            <div class="form-group position-relative">
                <input type="password" id="paswd" name="paswd" placeholder="Password" class="login-input-box" required>
                <i class="fa fa-unlock-alt fa-lg position-absolute"></i>
            </div>
            <br>
            <button type="submit" id="signin" class="sign-in-button" name="submit">Sign Up</button>
            <hr style="height:2px; border-width:0; color:#007CC7; background-color:#007CC7;">
        </form>
    </div>
</body>
</html>

<?php
$conn = mysqli_connect("localhost", "root", "", "blogon", 3307);

if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

session_start();
if (isset($_POST["submit"])) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $proff = $_POST['proff'];
    $paswd = $_POST['paswd'];

    $sql = "INSERT INTO signup (email, name, username, mobile, gender, dob, proff, paswd) VALUES ('$email', '$name', '$username', '$mobile', '$gender', '$dob', '$proff', '$paswd')";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['username'] = $username;
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['mobile'] = $mobile;
        $_SESSION['gender'] = $gender;
        $_SESSION['dob'] = $dob;
        $_SESSION['proff'] = $proff;
        header("Location: login.php");
        exit;
    } else {
        echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>