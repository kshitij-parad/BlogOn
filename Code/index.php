<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogON</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/home.css">
    

</head>
<body>
    <div class="header nav-class">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container text-uppercase p-2">
                <a class="navbar-brand font-weight-bold" href="#"><i class='fas fa-blog'></i>BlogON</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <form action="showparticularuserblog.php" class="form-inline ml-5 my-2 my-lg-0" method="POST">
                        <input class="form-control mr-lg-2" type="search" placeholder="Search" aria-label="Search" id="author" name="author">
                            <button class="btn searchbtn my-2 my-sm-0" type="submit" name="searchblog">Search</button>
                      </form>

                    <ul class="navbar-nav ml-auto text-uppercase">
                    <li class="nav-item active">
                    <a class="nav-link" href="index.html">HOME <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#aboutid">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#explore-id">Explore</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contactid">Contact</a>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="header-section" >
            <div class="center-div">
                <h3 class="font-weight-bold">Post your views</h3>
                <h4 class="mb-1">Create a Blog and express your thoughts</h4>
                <br><br>
                <div class="header-buttons" id="header-buttons">
                    <a href="login.php">Create a Blog</a>
                </div><br>
                <div class="mt-3" id="header-buttons1">
                    <a href="login.php">User</a>
                    <a href="admin.php">Admin</a>
                </div>
    
            </div>
        </section>
    </div>
    <section class="feedback-client mb-2" id="explore-id">
    <div class="container headings text-center">
        <br><br><br><br><h1 class="text-center mb-4">Educational</h1>
    </div>
    <div class="container">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active text-center">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                        <h3>The Class</h3>
                        <p class="m-4"><h4>by- randomuser</h4></p>
                        <p class="m-4"><h4>Educational Blog</h4></p><br>
                        <div class="header-buttons" id="header-buttons">
                            <a href="education.php">View</a>
                        </div>
                        <br>
                        </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                        <h3>Start the journey</h3>
                        <p class="m-4"><h4>by- p123</h4></p>
                        <p class="m-4"><h4>Educational Blog</h4></p><br>
                        <div class="header-buttons" id="header-buttons">
                            <a href="education.php">View</a>
                        </div>
                        <br>
                        </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                        <h3>MPSC</h3>
                        <p class="m-4"><h4>by- _tejas_011</h4></p>
                        <p class="m-4"><h4>Educational Blog</h4></p><br>
                        <div class="header-buttons" id="header-buttons">
                            <a href="education.php">View</a>
                        </div>
                        <br>
                        </div>
                        </div>
                </div>
            </div>

            <div class="carousel-item">
            <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                        <h3>Literacy is important</h3>
                        <p class="m-4"><h4>by- p123</h4></p>
                        <p class="m-4"><h4>Educational Blog</h4></p><br>
                        <div class="header-buttons" id="header-buttons">
                            <a href="education.php">View</a>
                        </div>
                        <br>
                        </div>
                        </div>
 
                        <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                        <h3>Engineering the future</h3>
                        <p class="m-4"><h4>by- _tejas_011</h4></p>
                        <p class="m-4"><h4>Educational Blog</h4></p><br>
                        <div class="header-buttons" id="header-buttons">
                            <a href="education.php">View</a>
                        </div>
                        <br>
                        </div>
                        </div>

            <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                        <h3>Let us start</h3>
                        <p class="m-4"><h4>by- abcdef</h4></p>
                        <p class="m-4"><h4>Educational Blog</h4></p><br>
                        <div class="header-buttons" id="header-buttons">
                            <a href="education.php">View</a>
                        </div>
                        <br>
                        </div>
                        </div>
            </div>
            </div>
            </div>
           
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
</section>
                           
<section class="feedback-client mb-2">
    <div class="container headings text-center">
        <br><br><br><br><h1 class="text-center mb-4">Sports</h1>
    </div>
    <div class="container">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active text-center">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                        <h3>Create an impact</h3>
                        <p class="m-4"><h4>by- randomuser</h4></p>
                        <p class="m-4"><h4>Sports Blog</h4></p><br>
                        <div class="header-buttons" id="header-buttons">
                            <a href="sports.php">View</a>
                        </div>
                        <br>
                        </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                        <h3>Ashes</h3>
                        <p class="m-4"><h4>by- p123</h4></p>
                        <p class="m-4"><h4>Sports Blog</h4></p><br>
                        <div class="header-buttons" id="header-buttons">
                            <a href="sports.php">View</a>
                        </div>
                        <br>
                        </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                        <h3>WWE</h3>
                        <p class="m-4"><h4>by- _tejas_011</h4></p>
                        <p class="m-4"><h4>Sports Blog</h4></p><br>
                        <div class="header-buttons" id="header-buttons">
                            <a href="sports.php">View</a>
                        </div>
                        <br>
                        </div>
                        </div>
                </div>
            </div>

            <div class="carousel-item">
            <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                        <h3>WTC the loss</h3>
                        <p class="m-4"><h4>by- p123</h4></p>
                        <p class="m-4"><h4>Sports Blog</h4></p><br>
                        <div class="header-buttons" id="header-buttons">
                            <a href="sports.php">View</a>
                        </div>
                        <br>
                        </div>
                        </div>
 
                        <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                        <h3>Rohit Sharma</h3>
                        <p class="m-4"><h4>by- _tejas_011</h4></p>
                        <p class="m-4"><h4>Sports Blog</h4></p><br>
                        <div class="header-buttons" id="header-buttons">
                            <a href="sports.php">View</a>
                        </div>
                        <br>
                        </div>
                        </div>

            <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                        <h3>Gully cricket</h3>
                        <p class="m-4"><h4>by- abcdef</h4></p>
                        <p class="m-4"><h4>Sports Blog</h4></p><br>
                        <div class="header-buttons" id="header-buttons">
                            <a href="sports.php">View</a>
                        </div>
                        <br>
                        </div>
                        </div>
            </div>
            </div>
            </div>
           
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
</section>



<section class="feedback-client mb-2">
    <div class="container headings text-center">
        <br><br><br><br><h1 class="text-center mb-4">Travel</h1>
    </div>
    <div class="container">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active text-center">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                        <h3>Sahyadri</h3>
                        <p class="m-4"><h4>by- randomuser</h4></p>
                        <p class="m-4"><h4>Travel Blog</h4></p><br>
                        <div class="header-buttons" id="header-buttons">
                            <a href="travel.php">View</a>
                        </div>
                        <br>
                        </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                        <h3>Kedarnath</h3>
                        <p class="m-4"><h4>by- p123</h4></p>
                        <p class="m-4"><h4>Travel Blog</h4></p><br>
                        <div class="header-buttons" id="header-buttons">
                            <a href="travel.php">View</a>
                        </div>
                        <br>
                        </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                        <h3>Mumbai city of Dreams</h3>
                        <p class="m-4"><h4>by- _tejas_011</h4></p>
                        <p class="m-4"><h4>Travel Blog</h4></p><br>
                        <div class="header-buttons" id="header-buttons">
                            <a href="travel.php">View</a>
                        </div>
                        <br>
                        </div>
                        </div>
                </div>
            </div>

            <div class="carousel-item">
            <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                        <h3>Explore the Ghat</h3>
                        <p class="m-4"><h4>by- p123</h4></p>
                        <p class="m-4"><h4>Travel Blog</h4></p><br>
                        <div class="header-buttons" id="header-buttons">
                            <a href="travel.php">View</a>
                        </div>
                        <br>
                        </div>
                        </div>
 
                        <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                        <h3>Mansoon Trek</h3>
                        <p class="m-4"><h4>by- _tejas_011</h4></p>
                        <p class="m-4"><h4>Travel Blog</h4></p><br>
                        <div class="header-buttons" id="header-buttons">
                            <a href="travel.php">View</a>
                        </div>
                        <br>
                        </div>
                        </div>

            <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                        <h3>Jungle Safari</h3>
                        <p class="m-4"><h4>by- abcdef</h4></p>
                        <p class="m-4"><h4>Travel Blog</h4></p><br>
                        <div class="header-buttons" id="header-buttons">
                            <a href="travel.php">View</a>
                        </div>
                        <br>
                        </div>
                        </div>
            </div>
            </div>
            </div>
           
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
</section>

<section class="feedback-client mb-2">
    <div class="container headings text-center">
        <br><br><br><br><h1 class="text-center mb-4">Other</h1>
    </div>
    <div class="container">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active text-center">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                        <h3>Biryani</h3>
                        <p class="m-4"><h4>by- randomuser</h4></p>
                        <p class="m-4"><h4>Other Blog</h4></p><br>
                        <div class="header-buttons" id="header-buttons">
                            <a href="other.php">View</a>
                        </div>
                        <br>
                        </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                        <h3>Debate Competetion</h3>
                        <p class="m-4"><h4>by- p123</h4></p>
                        <p class="m-4"><h4>Other Blog</h4></p><br>
                        <div class="header-buttons" id="header-buttons">
                            <a href="other.php">View</a>
                        </div>
                        <br>
                        </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                        <h3>Take a step</h3>
                        <p class="m-4"><h4>by- _tejas_011</h4></p>
                        <p class="m-4"><h4>Other Blog</h4></p><br>
                        <div class="header-buttons" id="header-buttons">
                            <a href="other.php">View</a>
                        </div>
                        <br>
                        </div>
                        </div>
                </div>
            </div>

            <div class="carousel-item">
            <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                        <h3>Social Media</h3>
                        <p class="m-4"><h4>by- p123</h4></p>
                        <p class="m-4"><h4>Other Blog</h4></p><br>
                        <div class="header-buttons" id="header-buttons">
                            <a href="other.php">View</a>
                        </div>
                        <br>
                        </div>
                        </div>
 
                        <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                        <h3>Take a step</h3>
                        <p class="m-4"><h4>by- _tejas_011</h4></p>
                        <p class="m-4"><h4>Other Blog</h4></p><br>
                        <div class="header-buttons" id="header-buttons">
                            <a href="other.php">View</a>
                        </div>
                        <br>
                        </div>
                        </div>

            <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                        <h3>Youth is strength</h3>
                        <p class="m-4"><h4>by- abcdef</h4></p>
                        <p class="m-4"><h4>Other Blog</h4></p><br>
                        <div class="header-buttons" id="header-buttons">
                            <a href="other.php">View</a>
                        </div>
                        <br>
                        </div>
                        </div>
            </div>
            </div>
            </div>
           
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
</section>

    <section class="header-extradiv" id="aboutid">
        <div class="container headings text-center">
           <br><br> <h1 class="text-center mb-4">Why BlogON</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="extra-div extradiv-even col-lg-4 col-md-4 col-12">
                    <a href="#"><i class="fa fa-edit fa-3x" aria-hidden="true"></i></a>
                    <h3>Get a perfect design</h3>
                    <P>Create a Blog of your choice. Select the appropriate design template and make your own blog.</P>
                </div>
                <div class="extra-div col-lg-4 col-md-4 col-12">
                    <a href="#"><i class="fa fa-users fa-3x" aria-hidden="true"></i></a>
                    <h3>Connect with people</h3>
                    <P>Connect with people having multiple passion. Discover what people have shared on BlogON.</P>
                </div>
                <div class="extra-div extradiv-even col-lg-4 col-md-4 col-12">
                    <a href="#"><i class="fa fa-image fa-3x" aria-hidden="true"></i></a>
                    <h3>Share your memories</h3>
                    <P>BlogON lets you share all your thoughts with others. You can share your memories with posts..</P>
                </div>
            </div>
        </div> 

    </section>

    <section class="contactus mt-5" id="contactid">
        <div class="container headings text-center">
            <h1 class="text-center font-weight-bold">Contact Us</h1>
            <p class="text-capitalize pt-1">We're Here to Help and Answer Any Question You Might Have. We Look Forward to Hearing From You.</p>
        </div><br>
        <div class="container">
        <div class="row">
        <div class="col-lg-8 col-md-8 col-10 offset-lg-2 offset-md-2 offset-1">

        <form action="feedback.php" method="POST">
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Enter your name" name="name" id="name" required >
        </div>
        <div class="form-group">
            <input type="tel" class="form-control" placeholder="Enter mobile number" name="mobile" id="mobile" required >
        </div>
        <div class="form-group">
            <input type="email" class="form-control" placeholder="Enter email" id="email" name="email" required >
        </div>
        <div class="form-group">
        <textarea class="form-control" rows="4" id="msg" placeholder="Enter your message" name="msg"></textarea>
        </div>
        <div class="d-flex justify-content-center form-button">
        <a href="#contactid"> <button type="submit" value="submit" id="submit" name="submit">Submit</button></a>
        </div>
        </form>
        
        </div>
        </div>
        </div>
        <!--**************************Footer *************************************-->
        <div class="footer ">
            <footer class="text-center " >
                <div class="text-center" >
                    Follow us on:
                    <a class="text-reset" href=""><i class="fa fa-linkedin"></i> <i class="fa fa-facebook"></i> <i class="fa fa-google"></i> <i class="fa fa-instagram"></i> <i class="fa fa-twitter"></i></a><br>
                </div>
                <div class="text-center " >
                    © 2023 Copyright:
                    <a class="text-reset fw-bold" href="">blogon.com</a>
                </div><br>
            </footer>
        </div>

    
    <!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>