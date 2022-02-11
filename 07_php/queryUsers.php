<?php

	include 'conndbphp';

	function showAllUsers()
	{
		$con=connection();

		$sql="select email, nombre, fecha_nacimiento, apellido, IFNULL(ganadas,0), IFNULL(perdidas,0) from USUARIOS;";
		$resultado=mysqli_query($con, $sql);		
		
		$jugadores=obtenerJugadores($resultado);

		mysqli_close($con);
		
		return $jugadores;
	}	

	function obtenerJugadores($resultado)
	{
		$cont=0;

		while($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC))
		{
			$jugadores[$cont]=$fila;
			$cont++;
		}
		return $jugadores;
	}
?>
