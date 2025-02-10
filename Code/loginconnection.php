<?php
 
 @session_start();

 $host = "localhost";  
 $user = "root";  
 $password = '';  
 $db_name = "blogon";  
   
 $con = mysqli_connect($host, $user, $password, $db_name);  
 if(mysqli_connect_errno()) {  
     die("Failed to connect with MySQL: ". mysqli_connect_error());  
 } 
 


   
    //setting variable using post array
    $username = $_POST['username'];
    $paswd = $_POST['paswd'];

    //check if the user exists in the user table
    $query = "select * from signup where username = '$username'";
    $res = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($res);

    if(mysqli_num_rows($res) > 0){

        if(strcmp($row['paswd'],$paswd)==0){
        //if the user exists then create seesion variables emailid and password
        $_SESSION['username']=$username;
        $_SESSION['paswd']=$paswd;
        $_SESSION['email'] = $row['email'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['mobile'] = $row['mobile'];
        $_SESSION['gender'] = $row['gender'];
        $_SESSION['dob'] = $row['dob'];
        $_SESSION['proff'] = $row['proff'];
        
        //redirect to explore page
        header('Location: profile.php');
    }
    //incorrect password
    else{
        echo '<script>alert("Invalid Password")
   window.location.replace("login.php");
   </script>';
    }
    }
    //if user is not found
    else {
        echo '<script>alert("Recheck your credentials")
   window.location.replace("login.php");
   </script>';
    }

?>