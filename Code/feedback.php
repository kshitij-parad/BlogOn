<?php
ini_set('display_errors', 1);  // Enable error reporting
error_reporting(E_ALL);

$conn = mysqli_connect("localhost", "root", "", "blogon", 3307);

if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    $sql = "INSERT INTO feedback (name, mobile, email, msg) VALUES ('$name', '$mobile', '$email', '$msg')";

    if (mysqli_query($conn, $sql)) {
        header("Location: index.html");
        exit;  // Stop execution after redirect
    } else {
        echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
    }
} else {
    echo "Please submit the feedback form.";
}

mysqli_close($conn);
?>