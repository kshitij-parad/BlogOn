<?php 
      
      $conn = mysqli_connect("localhost", "root", "", "blogon",3307);

//if connection is wrong

if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

@session_start();
if (isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $mobile = $_SESSION['mobile'];
    $dob = $_SESSION['dob'];
    $proff = $_SESSION['proff'];
    $gender = $_SESSION['gender'];
   
}


    if(count($_POST)>0) {
        mysqli_query($conn, "UPDATE signup set mobile= '" . $_POST['mobile'] . "',  name= '" . $_POST['name'] . "',  
        email= '" . $_POST['email'] . "',  gender= '" . $_POST['gender'] . "',  dob= '" . $_POST['dob'] . "',
        proff= '" . $_POST['proff'] . "' WHERE username='$username' ");
        echo "<script> alert('Records are updated Please Sign in Again')
        window.location.replace('login.php'); </script>";
    }


    $result = mysqli_query($conn,"SELECT * FROM signup WHERE username='" . $_GET['username'] . "'");
    $row= mysqli_fetch_array($result);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .gradient-custom-2 {
            background: white;
        }   

        .headerdiv{
            background:linear-gradient(to right, #1e5799 0%, #3ccdbb 0%, #16c9f6 100%);
            height: 220px;
        }
        .avatar{
            border-radius: 50%;
            width: 135px;
            height: 135px;
            position: absolute;
            top: 15px;
            left: 30px;
            border: 4px black;
        }
        #info{
            margin-left: 150px;
            margin-top: 100px;
        }

        .logout{
            height: 30px;
            width: auto;
            margin-left: 470px;
            background-color: #343a40;
            color: white;
        }
        #edit{
          margin-left: 66px;
          width: 60px;
          background-color: #343a40;
          color: white;
        }
        .dabba{
          box-shadow: 0 0 20px 0;
        }
        #next-button{
            width:70px;
            height:35px;
            border:1px solid black;
            border-radius: 20px;
            background-color: #343a40;
            color: white;
            font-weight: bold;
            margin-top:30px;
            margin-left: 45%;
        }
        .like{
          color: red;
        }
    </style>
</head>
<body>
    <section class="h-100 gradient-custom-2">
        <div class="container py-5 h-100" >
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-9 col-xl-10">
              <div class="card dabba">
                <div class="rounded-top text-white d-flex flex-row headerdiv" >
                    <br><br>
                  <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                    <img src="../Images/avatar.jpg"
                      alt="" class="avatar">
                      <br><br><br>
                      
                  </div>
                  
                  <div class="ms-3" id="info">
                    <h3><?php echo $username; ?> </h3>
                    <p><?php echo $name; ?></p>
                  </div>
                  <a href="profile.php"><button type="button" class="logout fa fa-sign-out" ></button></a>
                </div>
                
                <div class="card-body p-4 text-black">
                  <div class="mb-5">
                    <p class="lead fw-normal mb-1">About</p>
                    <div class="p-4" style="background-color: #f8f9fa;">
                
                      <form action=" " id='contact' method="POST">
                        <div class="form-group">
                        <div class="row">
                        <label class=" col-lg-2 ">Full Name</label>
                        <input class="form-control col-lg-10 formfield" type='text' name="name" id='name' value="<?php echo $name; ?>"/><br>
                        <label class=" col-lg-2 ">Email</label>
                        <input class="form-control col-lg-10 formfield" type='text' id='email' name="email" value="<?php echo $email; ?>" /><br>
                        <label class=" col-lg-2 ">Mobile No</label>
                        <input class="form-control col-lg-10 formfield " type='number' id='mobile' name="mobile" value="<?php echo $mobile; ?>"/><br>
                        <label class=" col-lg-2 ">Gender</label>
                        <input class="form-control col-lg-10 formfield" type='text' id='gender' name="gender" value="<?php echo $gender; ?>"/><br>
                        <label class=" col-lg-2 ">D. O. B.</label>
                        <input class="form-control col-lg-10 formfield" type='date' id='dob' name="dob" value="<?php echo $dob; ?>"/><br>
                        <label class=" col-lg-2 ">Proffession</label>
                        <input class="form-control col-lg-10 formfield" type='text' id='proff' name="proff" value="<?php echo $proff; ?>"/><br> 
                        </div> 
                        </div>
                       
                        <a href=''><button type='submit'  id="next-button" name="submit" >Update</button></a>
                        </form> 
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>
<?php


?>