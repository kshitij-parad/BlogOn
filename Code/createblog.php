<?php
session_start();  // Start session to access $_SESSION['username']
$conn = mysqli_connect("localhost", "root", "", "blogon", 3307);

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Ensure user is logged in
if (!isset($_SESSION['username'])) {
    die("Please log in to create a blog.");
}

if (isset($_POST["uploadfile"])) {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $author = $_SESSION['username'];  // Use session username, not form input
    $content = $_POST['content'];
    $template = $_POST['template'];

    $image = $_FILES["choosefile"]["name"];
    $tempname = $_FILES["choosefile"]["tmp_name"];  
    $folder = "image/" . $image;

    $sql = "INSERT INTO blog (title, category, author, image, content, template) VALUES ('$title', '$category', '$author', '$image', '$content', '$template')";

    if (mysqli_query($conn, $sql)) {
        // Success (could redirect or show a message)
    } else {
        echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
    }
}

if (move_uploaded_file($tempname, $folder)) {
    $msg = "Image uploaded successfully";
} else {
    $msg = "Failed to upload image";
}

$extension = ".html";    
$url = $template . $extension;
mysqli_close($conn);
?>

<html>
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/template.css">
</head>
<body>
    <div class="template1 container mt-5">
        <div class="form-box"> 
            <form action="index.php" id="printTable" enctype="text/plain">
                <div class="form-group"> 
                    <div class="row">
                        <input class="col-lg-12 formfield text-center" id='title' disabled value="<?php echo $title; ?>"/>
                        <input class="col-lg-12 formfield text-center" id='author' disabled value="<?php echo $author; ?>"/>
                        <input class="col-lg-12 formfield text-center mb-5" id='category' disabled value="<?php echo $category; ?>"/>
                        <div class="row">
                            <div class="col-lg-4"><img src="../images/<?php echo $image; ?>" id="templateimage" alt="Image"></div>
                            <p class="col-lg-8 formfield"><?php echo $content; ?></p>                   
                        </div> 
                    </div>
                </form> 
                <div class="row">
                    <div class="col-lg-10"></div>
                    <a href="index.php"><button id="printButton">Done</button></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>