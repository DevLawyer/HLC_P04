<?php 
    session_start();
    if($_SESSION['activo']!=true){
        header("location:../01_index/index.php");
    }

    include 'conndb.php';

    function getTest($test){
        $con=connection();

        $sql='select * from test where test = '.$test.';';
        $result=mysqli_query($con, $sql);		
        
        $testAnswers=getTestElements($result);

        mysqli_close($con);
        
        return $testAnswers;
    }

    function getTestElements($result)
    {
        $cont=0;

        while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            $testAnswers[$cont]=$row;
            $cont++;
        }

        return $testAnswers;
    }

    function getQuestionOrder(){
        $order = array();
    
        $randValue = mt_rand(0,4);

        array_push($order, $randValue);

        $x = 1;

        while ($x <= 4) {
            $randValue = mt_rand(0, 4);
            if(in_array($randValue, $order)){
                continue;
            }else{
            array_push($order, $randValue);
            $x++;
            }
        }
        return $order;
    }

    function moveBack(){
        if($_SESSION['question'] > 1){
            $_SESSION['question'] = $_SESSION['question']-1;
        } else {
            $_SESSION['question'] = 1;
        }
    }

    function checkAnswers($test){
        if(isset($_POST['testA'])){
            if($_POST['testA'] == $test[$_SESSION['orden'][$_SESSION['question']-1]]['correct']){
                $_SESSION['aciertos'] = $_SESSION['aciertos'] + 1;
            } else {
                $_SESSION['errores'] = $_SESSION['errores'] + 1;
            }
        }
    }

    function moveForward(){
        $_SESSION['question'] = $_SESSION['question']+1;
    }
?>