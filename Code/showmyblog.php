<?php 
@session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    die("Please log in to view your blogs.");
}

$database = "blogon"; 
$mysqli = mysqli_connect("localhost", "root", "", $database, 3307);
if ($mysqli === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show All Blogs</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/template.css">
</head>
<body>
<?php
$query = "SELECT * FROM blog WHERE author = '$username'";
if ($result = $mysqli->query($query)) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $field1name = $row["title"];
            $field2name = $row["author"];
            $field3name = $row["category"];
            $field4name = $row["image"];
            $field5name = $row["content"];
            $url = "../images/";
            
            echo ' <div class="template1 container mt-5 ">
            <div class="form-box" > 
                <form id="printTable" enctype="text/plain">
                    <div class="form-group"> 
                        <div class="row">
                            <p class="col-lg-12 formfield text-center" id="title" disabled>'.$field1name.'</p>
                            <p class="col-lg-12 formfield text-center" id="author" disabled>'.$field2name.'</p>
                            <p class="col-lg-12 formfield text-center mb-5" id="category" disabled>'.$field3name.'</p>
                            <div class="row">
                                <div class="col-lg-4"><img src="'.$url.$field4name.'" id="templateimage" alt="Image"></div>
                                <p class="col-lg-8 formfield ml-2">'.$field5name.'</p>         
                            </div> 
                        </div>
                    </form> 
                    <div class="row">
                        <div class="col-lg-10"></div>
                    </div>
                </div>
            </div>
            </div>
            </div><br><br>';
        }
        $result->free();
    } else {
        echo "<p>No blogs found for $username.</p>";
    }
} else {
    echo "Query failed: " . $mysqli->error;
}
?>
</body>
</html>