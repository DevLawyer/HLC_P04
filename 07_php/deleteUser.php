<?php
    session_start();
    if($_SESSION['activo']==FALSE){
        header("location:../01_index/index.php");
    }

	include 'conndb.php';

    $con=connection();

    $sql='delete from users where email = "'.$_SESSION['email'].'";';
    
    $resultado=mysqli_query($con, $sql);		

    mysqli_close($con);

    include './logout.php';
?>