<?php
    session_start();
    if($_SESSION['activo']==false){
        header("location:../01_index/index.html");
    }

    include 'getTest.php';

    $subV = $_POST['subscribe'];

    switch($subV){
        case 'course1':
            update_courses('course1',1);
            $_SESSION['curso1']=1;
            break;
        case 'course2':
            update_courses('course2',1);
            $_SESSION['curso2']=1;
            break;
        case 'course3':
            update_courses('course3',1);
            $_SESSION['curso3']=1;
            break;
        case 'course4':
            update_courses('course4',1);
            $_SESSION['curso4']=1;
            break;
    }


    $unsubV = $_POST['unsubscribe'];
    switch($unsubV){
        case 'course1':
            update_courses('course1',0);
            $_SESSION['curso1']=0;
            break;
        case 'course2':
            update_courses('course2',0);
            $_SESSION['curso2']=0;
            break;
        case 'course3':
            update_courses('course3',0);
            $_SESSION['curso3']=0;
            break;
        case 'course4':
            update_courses('course4',0);
            $_SESSION['curso4']=0;
            break;
    }

    $testV = $_POST['test'];
    switch($testV){
        case 'test1':    
            $_SESSION['test']=1;
            $_SESSION['question']=1;
            $_SESSION['orden'] = getQuestionOrder();
            goto_test();
            break;
        case 'test2':    
            $_SESSION['test']=2;
            $_SESSION['question']=1;
            $_SESSION['orden'] = getQuestionOrder();
            goto_test();
            break;
        case 'test3':    
            $_SESSION['test']=3;
            $_SESSION['question']=1;
            $_SESSION['orden'] = getQuestionOrder();
            goto_test();
            break;
        case 'test4':    
            $_SESSION['test']=4;
            $_SESSION['question']=1;
            $_SESSION['orden'] = getQuestionOrder();
            goto_test();
            break;
    }
    
    function goto_test(){
        header("location:../06_test/test.php");
    }
	
    function update_courses($courseCol, $value)
	{
		$con=connection();
		$sql='update users set '. $courseCol .' = '.$value.' where email = "'.$_SESSION['email'].'";';
		$result=mysqli_multi_query($con, $sql);
        mysqli_close($con);
        header("location:../04_courses/user_courses.php");
	}
?>