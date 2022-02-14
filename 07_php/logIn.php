<?php
    include 'conndb.php';

	// Iniciar una nueva sesión o reanudar la existente
    session_start();

	//isset — Determina si una variable está definida y no es null
    if (isset($_POST['submit'])) {

        $email = $_POST['login_email'];

        $error = check_sql_injection($email);

        if ($error == TRUE)
        {
            header("location:../01_index/index.php");
        }
        else
        {
            $con=connection();
            $query="select count(*) as total from users where email='" . $email ."';";
            $result=mysqli_query($con, $query);
            $data=mysqli_fetch_assoc($result);
            $num = $data['total'];
            mysqli_close($con);

            if ($num == 1)
            {
                $jug = obtener_datos_usuario($email);
                $_SESSION['email']=$jug['email'];
                $_SESSION['nombre']=$jug['nombre'];
				$_SESSION['edad']= calculateAge($jug['fecha_nac']);
                $_SESSION['victorias']=$jug['IFNULL(a_good,0)'];
                $_SESSION['derrotas']=$jug['IFNULL(a_bad,0)'];
                $_SESSION['activo']=true;
				$_SESSION['curso1']=$jug['course1'];				
				$_SESSION['curso2']=$jug['course2'];
				$_SESSION['curso3']=$jug['course3'];
				$_SESSION['curso4']=$jug['course4'];
				$_SESSION['test']=0;
				$_SESSION['question']=0;
				$_SESSION['aciertos']=0;
				$_SESSION['errores']=0;
				$_SESSION['orden'];
                header("location:../05_user/user.php");
            }
            else
            {
                header("location:../02_login/login.php");
            }            
        }

        
    }
    else
    {
        header("location:../01_index/index.html");
    }

    function obtener_datos_usuario($email)
	{
		$con=connection();

		$sql="select email, nombre, fecha_nac, IFNULL(a_good,0), IFNULL(a_bad,0), course1, course2, course3, course4 from users where email = '" . $email . "';";
		$result=mysqli_query($con, $sql);
        $data=mysqli_fetch_assoc($result);
        
		mysqli_close($con);
		
		return $data;
	}
    

    function check_sql_injection($valor)
	{
		$error = FALSE;
		if (strpos($valor, "'") == TRUE) {
			$error = TRUE;
		}
		else if (strpos($valor, '"') == TRUE)
		{
			$error = TRUE;
		}
		else if (strpos($valor, ';') == TRUE)
		{
			$error = TRUE;
		}
		else if (strpos($valor, '<') == TRUE)
		{
			$error = TRUE;
		}
		else if (strpos($valor, '>') == TRUE)
		{
			$error = TRUE;
		}
		else if (strpos($valor, '/') == TRUE)
		{
			$error = TRUE;
		}
		else if (strpos($valor, '&') == TRUE)
		{
			$error = TRUE;
		}
		else if (strpos($valor, '--') == TRUE)
		{
			$error = TRUE;
		}
		else if (strpos($valor, '/*') == TRUE)
		{
			$error = TRUE;
		}
		else if (strpos($valor, '*/') == TRUE)
		{
			$error = TRUE;
		}
		return $error;
	}

	function calculateAge($born){
		list($Y,$m,$d) = explode("-",$born);
		return( date("md") < $m.$d ? date("Y")-$Y-1 : date("Y")-$Y );
	}
?>
