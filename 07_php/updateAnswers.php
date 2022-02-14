<?php 
    session_start();
    if($_SESSION['activo']!=true){
        header("location:../01_index/index.php");
    }

    include 'conndb.php';

    $con=connection();
    if($_SESSION['aciertos'] >= $_SESSION['errores']){
        $sql='update users set a_good = IFNULL(a_good,0)+1 where email = "'.$_SESSION['email'].'";';
        $_SESSION['aciertos'] = 0;
        $_SESSION['errores'] = 0;
        $_SESSION['victorias']=$_SESSION['victorias']+1;
        
    } else {
        $sql='update users set a_bad = IFNULL(a_bad,0)+1 where email = "'.$_SESSION['email'].'";';
        $_SESSION['aciertos'] = 0;
        $_SESSION['errores'] = 0;
        $_SESSION['derrotas']=$_SESSION['derrotas']+1;
    }
    $result=mysqli_multi_query($con, $sql);
    mysqli_close($con);
    header("location:../04_courses/user_courses.php");

?>