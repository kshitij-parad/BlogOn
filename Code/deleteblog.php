<!DOCTYPE html>
<html lang="en">

 <head>

 
 <title>Delete a Blog</title>
 <style>
    h1 {
      text-align: center;
      color: #333;
    }

    body {
      background-color: #f4f4f4;
      font-family: Arial, sans-serif;
    }

    form {
      max-width: 800px;
      margin: 0 auto;
      background-image: linear-gradient(to bottom right, #9ed5f3 60%, #fff);
      padding: 20px;
      border-radius: 5px;
      border: 1px solid black;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 8px;
      color: #555;
    }

    input[type="text"],
    textarea,
    select {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-bottom: 12px;
    }

    select {
      height: 34px;
    }

    button{
      width:70px;
      height:35px;
      border:1px solid black;
      border-radius: 20px;
      background-image:linear-gradient(to right, #075586, #67b9e6);
      font-weight: bold;
      margin-top:30px;
    }


    .template{
      width: 350px;
      height: 150 px;
    }

    .template-grid{
      margin-top: 40px;
      margin-left: 40px;
      margin-bottom: 100px;
    }
    .template-label{
     margin-left: 140px;
     margin-right: 140px;
    }

  </style>
 </head>
 <body>
<br>
 <h1>Delete A Blog</h1> 

 <form action=" " method="POST" enctype="multipart/form-data">
 <div class="form-group">
 <label class=" col-lg-4 ">Title</label>
 <input class="form-control col-lg-8 " type='text' name='title' id='title' placeholder='Enter Title'/>
 <label class=" col-lg-4 ">Author</label>
 <input class="form-control col-lg-8 " type='text' name='author' id='author' placeholder='Enter Author'/>
 <label class=" col-lg-4 ">Category</label>
 <select id="category" name="category">
      <option value="Travel Blog">Travel Blog</option>
      <option value="Education Blog">Education Blog</option>
      <option value="Sports Blog">Sports Blog</option>
      <option value="Other Blog">Other Blog</option>
</select>


 <a href=''><button style="margin-left: 45%" type="submit" name="submit" value="submit" id="next-button">Delete</button></a>


 </form>

</body>
</html>

<?php

$conn = mysqli_connect("localhost", "root", "", "blogon");

if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

if(isset($_POST["submit"])) {
$title =  $_POST['title'];
//$category =  $_POST['category'];
$author = $_POST['author'];

$sql = "DELETE from blog where title = '$title' and author = '$author' ";
if(mysqli_query($conn, $sql)){
   echo '<script>alert("Blog Deleted Successfully")
   window.location.replace("index.php");
   </script>';
   
} else{
    echo "ERROR: Hush! Sorry $sql. "
        .mysqli_error($conn);
}
}

mysqli_close($conn);
?>