<?php 
    session_start();
    if($_SESSION['activo']==true){
        header("location:../01_index/index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ECA - SignUp</title>
        <link rel="icon" href="../00_resources/images/EduCodeA_Icon.png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <link href="../00_resources/css/common.css" rel="stylesheet" >
        
    </head>

    <header>
        

        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
            <div class="container-fluid">
                <img src="../00_resources/images/EduCodeA_Logo.png" alt="EduCode Academy Logo" height="60" class="d-inline-block align-text-top m-4">
                
                <a class="navbar-brand" href="../01_index/index.php">
                    Academy
                </a>

                <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="../01_index/index.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="../04_courses/courses.php">Courses</a>
                        </li>
                    </ul>

                    <form action="../02_login/login.php" class="me-4">
                        <button class="btn btn-light">
                            Log In
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <body>
        <!-- MAIN CONTAINER -->
        <main class="container-fluid bg-main p-5">
            <section class="row">
                
                <section class="col-6 text-center d-none d-lg-block">
                    <img src="../00_resources/images/SignUp_Logo.png" alt="EduCode Academy Logo" class="d-inline-block align-text-top m-4 h-50 sticky-top">
                </section>
                <section class="col">
                    <section class="row p-4">
                        <article class="col">
                            <div class="card bg-card">
                                <div class="card-body">
                                    <h5 class="card-title pb-4">Sign up form</h5>
                                    <form method="post" action="../07_php/signup.php">
                                        <div class="input-group mb-3">
                                            <input type="email" id="email" name="email" class="form-control fg-main-2" placeholder="E-mail user." aria-label="E-mail user.">
                                            <span class="input-group-text" id="basic-addon2">@example.com</span>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" id="user_name" name="user_name" class="form-control" placeholder="Username." aria-label="Username.">
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="date" id="born_date" name="born_date" class="form-control fg-main-2">
                                        </div>
                                        <div class="input-group">
                                            <p>
                                                <button type="submit" name="submit" class="btn btn-light bg-btn-1 btn-1 me-2">Send</button>
                                                Already have an account? <i class='bx bx-log-in' ></i> <a href="../02_login/login.php">  Log in</a>
                                            </p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </article>
                    </section>
                </section>
            </section>
        </main>
        <footer class="text-center text-lg-start bg-card fg-card text-muted">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <!-- Left -->
                <div class="me-5 d-none d-lg-block">
                    <span>Get connected with us on social networks:</span>
                </div>
                <!-- Left -->
            
                <!-- Right -->
                <div>
                    <a href="https://www.linkedin.com/in/miguel-m-v%C3%A1zquez-mart%C3%ADnez-5b7079112/" class="me-4 text-reset">
                        <i class='bx bxl-linkedin-square'></i>
                    </a>
                    <a href="https://github.com/DevLawyer" class="me-4 text-reset">
                        <i class='bx bxl-github'></i>
                    </a>
                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->
        
            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                EduCode Academy
                            </h6>
                            <p>
                            This website is a project to comply with the fourth practice of the HLC Module of High School El Majuelo.
                            </p>
                        </div>
                        <!-- Grid column -->
            
                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Courses
                            </h6>
                            <p>
                            <a href="../04_courses/courses.php" class="text-reset">HTML</a>
                            </p>
                            <p>
                            <a href="../04_courses/courses.php" class="text-reset">CSS</a>
                            </p>
                            <p>
                            <a href="../04_courses/courses.php" class="text-reset">Java Script</a>
                            </p>
                            <p>
                            <a href="../04_courses/courses.php" class="text-reset">PHP</a>
                            </p>
                        </div>
                        <!-- Grid column -->
            
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Useful links
                            </h6>
                            <p>
                            <a href="https://www.w3schools.com/" class="text-reset">W3Schools</a>
                            </p>
                            <p>
                            <a href="https://www.php.net/manual/en/index.php" class="text-reset">PHP Manual</a>
                            </p>
                            <p>
                            <a href="http://www.iesmajuelo.com/" class="text-reset">I.E.S. El Majuelo</a>
                            </p>
                        </div>
                        <!-- Grid column -->
            
                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                            Contact
                            </h6>
                            <p>C. Enrique Granados, 43, 41960 Gines, Sevilla</p>
                            <p>mvazmar625@g.educaand.es</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->
        
            <!-- Section: License -->
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            License:
            <a class="text-reset fw-bold" href="https://joinup.ec.europa.eu/collection/eupl/eupl-text-eupl-12">EUPL-1.2</a>
            </div>
            <!-- Section: License -->
        </footer>

        <!-- SCRIPTS SECTION -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>