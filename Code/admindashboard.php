<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/home.css">
    <title>Admin Dashboard</title>
</head>
<body>

        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container text-uppercase p-2">
                <a class="navbar-brand font-weight-bold" href="#"><i class='fas fa-blog'></i>BlogON</a>
       
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <form action="showparticularuserblog.php" class="form-inline ml-5 my-2 my-lg-0" method="POST">
                        <input class="form-control mr-lg-2" type="search" placeholder="Search" aria-label="Search" id="author" name="author">
                            <button class="btn searchbtn my-2 my-sm-0" type="submit" name="searchblog">Search</button>
                      </form>

                    <ul class="navbar-nav nav ml-auto text-uppercase">
                    <li class="nav-item ">
                        <a class= "nav-link active" href="userinfo.php">User Details</a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link" href="showallblog.php">View Blogs<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link" href="deleteblog.php">Delete Blogs<span class="sr-only"></span></a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="afeedback.php">Feedback</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Logout</a>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
</body>
</html>

<?php  
$database = "blogon"; 
$mysqli = new mysqli("localhost", "root", "", $database); 
$query = "SELECT * FROM signup";


echo '<br><br><br><br><br><center><h1>User Information</h1></center> <br><br>';
echo '
<div class="table-class" style="margin-left: 350px">
<table width="800px" border="3" cellspacing="10" cellpadding="3" align="center"  bgcolor="#c4e5f7"> 
<tr style="color:black cellspacing:10 cellpadding:3" > 
    <td> <b><font face="Arial">UserName</font></b> </td> 
    <td> <b> <font face="Arial">Name</font> </b> </td> 
    <td> <b> <font face="Arial">Email</font> </b> </td> 
    <td> <b> <font face="Arial">Mobile</font> </b> </td> 
</tr>
</div>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["username"];
        $field2name = $row["name"];
        $field3name = $row["email"];
        $field4name = $row["mobile"];


        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>



