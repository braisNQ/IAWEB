<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<!-- ******* codificaci&oacute;n no utf-8, 8951 caracteres latinos ****-->
		<meta content="text/html; charset=utf-8, 8951" http-equiv="Content-Type" />
		<title>Primeira pr&aacute;ctica: matr&iacute;culas</title>
	</head>
	
	<body>
		<?php
		/*
		declaración de variables
		*/
			$nome = "Brais Carri&oacute;n";
			$matricula = "OU-0000-A";
			$bastidor = "numbastidor123";	
			$data = "1/10/14";
		
		/*
		primeira versión
		escribir frase
		*/
			echo "<h3>Primeira versi&oacute;n</h3>";
			echo "Sr. D. ". $nome .":";
			echo "<br />";
			echo "
				O coche matr&iacute;cula ". $matricula .
				" con n&uacute;mero de bastidor ". $bastidor .
				" ten prevista a s&uacute;a revisi&oacute;n";
			echo "<br />";
			echo "o d&iacute;a ". $data ." na IRV de Ourense.";
		
		/*
		segunda versión
		escribir frase desde función
		*/
			echo "<h3>Segunda versi&oacute;n (con funci&oacute;n)</h3>";
			
			cita($nome, $matricula, $bastidor, $data);			
			
			function cita($n, $m, $b, $d)
			{
				echo "Sr. D. ". $n .":";
				echo "<br />";
				echo "
					O coche matr&iacute;cula ". $ma .
					" con n&uacute;mero de bastidor ". $b .
					" ten prevista a s&uacute;a revisi&oacute;n";
				echo "<br />";
				echo "o d&iacute;a ". $d ." na IRV de Ourense.";	 
			}
		 ?>
	</body>
</html>
