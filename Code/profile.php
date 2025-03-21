<?php 
@session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $mobile = $_SESSION['mobile'];
    $dob = $_SESSION['dob'];
    $proff = $_SESSION['proff'];
    $gender = $_SESSION['gender'];
}

$database = "blogon"; 
$mysqli = mysqli_connect("localhost", "root", "", $database, 3307);      
$query = "SELECT * FROM blog WHERE author = '$username'";
if ($result = mysqli_query($mysqli, $query)) {
    $rowcount = mysqli_num_rows($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .gradient-custom-2 {
            background: white;
        }   
        .headerdiv {
            background: linear-gradient(to right, #1e5799 0%, #3ccdbb 0%, #16c9f6 100%);
            height: 250px; /* Increased height to accommodate button */
        }
        .avatar {
            border-radius: 50%;
            width: 135px;
            height: 135px;
            position: absolute;
            top: 15px;
            left: 30px;
            border: 4px solid black; /* Fixed border syntax */
        }
        #info {
            margin-left: 150px;
            margin-top: 100px;
        }
        .logout {
            height: 30px;
            width: auto;
            margin-left: 470px;
            background-color: #343a40;
            color: white;
        }
        #edit {
            width: 60px;
            background-color: #343a40;
            color: white;
            margin-top: 180px; /* Moved lower below avatar */
            margin-left: 45px; /* Centered below avatar */
        }
        .dabba {
            box-shadow: 0 0 20px 0;
        }
        .formfield {
            color: black;
            border: none;
            background: transparent;
        }
        .createblog {
            border: 1px solid black;
            border-radius: 100px;
            margin: 5px 5px;
            margin-top: 0px;
            margin-bottom: 5px;
            padding: 12px 35px;
            color: black;
            font-weight: bold;
            margin-left: 40%;
        }
        .createblog:hover {
            color: white;
            box-shadow: 0 0 20px 0 rgba(0,0,0,0.3);
            border: none;
            background-image: linear-gradient(to right, #075586, #67b9e6);
            font-weight: bold;
        }
        .like {
            color: red;
        }
    </style>
</head>
<body>
    <section class="h-100 gradient-custom-2">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-9 col-xl-10">
                    <div class="card dabba">
                        <div class="rounded-top text-white d-flex flex-row headerdiv">
                            <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                                <img src="../Images/avatar.jpg" alt="" class="avatar">
                                <form method="post" action="editprofile.php">
                                    <?php 
                                    echo '<a href="editprofile.php?username='.$username.'"><button type="button" class="btn fa fa-edit" id="edit"></button></a>';
                                    ?>
                                </form>
                            </div>
                            <div class="ms-3" id="info">
                                <h3><?php echo $username; ?></h3>
                                <p><?php echo $name; ?></p>
                            </div>
                            <a href="index.html"><button type="button" class="logout fa fa-sign-out"></button></a>
                        </div>
                        <div class="p-4 text-black" style="background-color: #f8f9fa;">
                            <div class="d-flex justify-content-end text-center py-1">
                                <div>
                                    <p class="mb-1 h5"><?php echo $rowcount; ?></p>
                                    <p class="small text-muted mb-0">Blogs</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-4 text-black">
                            <div class="mb-5">
                                <p class="lead fw-normal mb-1">About</p>
                                <div class="p-4" style="background-color: #f8f9fa;">
                                    <form action="" id="contact" method="POST">
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-lg-2">Full Name</label>
                                                <input class="col-lg-10 formfield" id="almn" value="<?php echo $name; ?>" disabled/><br>
                                                <label class="col-lg-2">Email</label>
                                                <input class="col-lg-10 formfield" id="almn" value="<?php echo $email; ?>" disabled/><br>
                                                <label class="col-lg-2">Mobile No</label>
                                                <input class="col-lg-10 formfield" id="almn" value="<?php echo $mobile; ?>" disabled/><br>
                                                <label class="col-lg-2">Gender</label>
                                                <input class="col-lg-10 formfield" id="almn" value="<?php echo $gender; ?>" disabled/><br>
                                                <label class="col-lg-2">D. O. B.</label>
                                                <input class="col-lg-10 formfield" id="almn" value="<?php echo $dob; ?>" disabled/><br>
                                                <label class="col-lg-2">Profession</label>
                                                <input class="col-lg-10 formfield" id="almn" value="<?php echo $proff; ?>" disabled/><br>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <a href="createblog.html"><button class="createblog mb-4">Create Blog</button></a> 
                            <a href="showmyblog.php"><button class="createblog mb-4">Show Blogs</button></a>             
                            <a href="deleteblog.php"><button class="createblog mb-4">Delete Blog</button></a>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>