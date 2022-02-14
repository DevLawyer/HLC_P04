<?php
    session_start();
    if($_SESSION['activo']==true){
        header("location:../01_index/index.php");
    }

	include 'conndb.php';

	$error = FALSE;
	$msg = "";
	$in_email = $_POST['email'];
	$in_name = $_POST['user_name'];
	$in_date = $_POST['born_date'];

	if (isset($_POST['submit'])) {

		if (isset($in_email)) {
			if (check_email_input($in_email) == TRUE)
			{
				$error = TRUE;
				$msg = $msg . "El email no es válido.<br/>";
			}
		}
		else
		{
			$error = TRUE;
		}
	
		if (isset($_POST['user_name'])) {
			if (check_string_input($_POST['user_name']) == TRUE)
			{
				$error = TRUE;
				$msg = $msg . "El nombre no es válido.<br/>";
			}
		}
		else
		{
			$error = TRUE;
		}
		
		if (isset($_POST['born_date'])) {
			if (check_date_input($_POST['born_date']) == TRUE)
			{
				$error = TRUE;
				$msg = $msg . "La fecha no es válida.<br/>";
			}
		}
		else
		{
			$error = TRUE;
		}


		if ($error == FALSE)
		{
			insert_user($in_email, $in_name, $in_date);
			header("location:../02_login/login.php");
		}
		else
		{
			//header("location:../03_signup/signup.php");
			echo '<h1>'. $msg .'</h1>';
		}
	}

	function check_string_input($campo)
	{
		$error = check_sql_injection($campo);
		if ($error == FALSE)
		{
			if (strlen($campo) > 100)
			{
				$error = TRUE;
			}
			else if ($campo == "")
			{
				$error = TRUE;
			}
		}
		return $error;
	}

	
	function check_date_input($campo)
	{
		$error = check_sql_injection($campo);
		if ($error == FALSE)
		{
			if ($campo == "")
			{
				$error = TRUE;
			}
			else
			{
				$segundos_fecha=strtotime($campo);
				$segundos_fecha_actual=time();
				if ($segundos_fecha_actual - $segundos_fecha <= 0)
				{
					$error = TRUE;
				}
			}
		}
		return $error;
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

	function check_email_input($email)
	{
		$error = check_sql_injection($email);
		if ($error == FALSE)
		{
			if ($email == "")
			{
				$error = TRUE;
			}
			else
			{
				$con=connection();
				$sql='select * from users where email="' . $email . '");';
				$result=mysqli_multi_query($con, $sql);

				if (!empty($result) AND mysqli_num_rows($result) > 0)
				{
					$error = TRUE;
				}
			}
		}
		return $error;
	}
	
	function insert_user($email, $nombre, $fecha)
	{
		$con=connection();
		$sql='insert into users (email, nombre, fecha_nac) values ("' . $email . '", "' . $nombre . '","' . $fecha . '");';
		$result=mysqli_multi_query($con, $sql);
	}

?>