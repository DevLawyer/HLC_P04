<?php 
    session_start();
    if($_SESSION['activo']!=true){
        header("location:../01_index/index.php");
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Test</title>
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
                            <a class="nav-link active" href="../05_user/user.php">Profile</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="../04_courses/courses.php">Courses</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="../04_courses/user_courses.php">My Courses</a>
                        </li>
                    </ul>

                    <form class="d-flex" action="../07_php/logout.php">
                        <button class="btn btn-light me-4" type="submit">
                            Log out
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <body>
        <!-- MAIN CONTAINER -->
        <main class="container-fluid bg-main p-5">
            <section class="row justify-content-center">
                <?php
                    include '../07_php/getTest.php';
                    $test = getTest($_SESSION['test']);

                    if(array_key_exists('prev', $_POST)) {
                        moveBack();
                    }
                    if(array_key_exists('next', $_POST)) {
                        checkAnswers($test);
                        moveForward();
                    }

                    if($_SESSION['question']-1 <= 4){
                        echo'<form class="card mb-3 bg-transparent border-light fg-main p-4" method="POST">';
                        echo'<h5 class="card-title mb-4">'.$_SESSION['nombre'].' - '.$_SESSION['edad'].'</h5>';
                        echo'<h5 class="card-title mb-4">'.$_SESSION['question'].' '.$test[$_SESSION['orden'][$_SESSION['question']-1]]['question'].'</h5>';
                        echo'<p class="card-text mb-4">';
                        echo'<input class="me-2 mb-2" type="radio" id="testA" name="testA" value="answer1">';
                        echo'<label for="answer1">'.$test[$_SESSION['orden'][$_SESSION['question']-1]]['answer1'].'</label><br>';
                        echo'<input class="me-2 mb-2" type="radio" id="testA" name="testA" value="answer2">';
                        echo'<label for="answer2">'.$test[$_SESSION['orden'][$_SESSION['question']-1]]['answer2'].'</label><br>';
                        echo'<input class="me-2 mb-2" type="radio" id="testA" name="testA" value="answer3">';
                        echo'<label for="answer3">'.$test[$_SESSION['orden'][$_SESSION['question']-1]]['answer3'].'</label><br>';
                        echo'<input class="me-2 mb-2" type="radio" id="testA" name="testA" value="answer4">';
                        echo'<label for="answer4">'.$test[$_SESSION['orden'][$_SESSION['question']-1]]['answer4'].'</label><br>';
                        echo'</p>';
                        
                        echo'<div class="row">';
                        if($_SESSION['question']-1 != 0){
                            echo'<div class="col"><button type="submit" name="prev" class="btn btn-2 mb-2">Prev</button></div>';
                        }

                        echo'<div class="col text-end"><button type="submit" name="next" class="btn btn-2 mb-2">Next</button></div>';
                        echo'</div>';
                        echo'</form>';
                    } else {
                        echo'<form class="card mb-3 bg-transparent border-light fg-main p-4" method="POST" action="../07_php/updateAnswers.php">';
                        echo'<h5 class="card-title mb-4">TEST FINALIZADO</h5>';
                        echo'<p class="card-text mb-4">';
                        echo'El test ha finalizado, su resultado a sido el siguiente:</br>';
                        echo'Aciertos: '.$_SESSION['aciertos'].'</br>';
                        echo'Errores: '.$_SESSION['errores'].'</br>';
                        echo'Resultado final:';
                        if($_SESSION['aciertos'] >= $_SESSION['errores']){
                            echo ' VICTORIA !';
                        } else {
                            echo ' DERROTA !';
                        }
                        echo'</p>';
                        echo'<div class="col text-end"><button type="submit" name="submit" class="btn btn-2 mb-2">Finish</button></div>';
                        echo'</div>';
                        echo'</form>';
                    }                               
                ?>
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