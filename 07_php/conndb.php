<?php

	function connection()
	{
		$con=mysqli_connect('mysql','usuario', '1234', 'hlc_p04');
		return $con;
	}	
	
?>
