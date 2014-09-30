<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<!-- ******* codificaci&oacute;n no utf-8, 8951 caracteres latinos ****-->
		<meta content="text/html; charset=utf-8, 8951" http-equiv="Content-Type" />
		<title>B&aacute;sicos</title>
	</head>
	
	<body>
		<?php
			/*
			Exercicio 6:
			Almacenar en una variable tu a�o nacimiento y en otra el a�o actual.
			Calcular tu edad, almacenarla en otra variable e imprimirla por pantalla.
			Guarda el documento como 6edad.php. Visualiza el resultado en el navegador.
			*/
			
			echo "<h3>Exercicio 6</h3>";
			
			$ano_nacemento = 1988;
			$ano_actual = date("Y");
			
			echo "O meu ano de nacemento &eacute;: ". $ano_nacemento ."<br />";
			echo "Estamos no: ". $ano_actual ."<br />";
			echo "Ao longo deste ano cumplirei: ". ($ano_actual - $ano_nacemento) ." anos";
			
			/*
			Exercicio 7:
			Guarda en una variable el precio de un producto.
			Calcula el precio de 50 productos y muestra por pantalla el resultado.
			Guarda el documento como 7producto.php. Visualiza el resultado en el navegador.			
			*/
			
			echo "<h3>Exercicio 7</h3>";
			
			$prezo = 5;
			$c_productos = 50;
			
			echo $c_productos ." items a un valor de ". $prezo ." cada un, da un valor de ". ($prezo * $c_productos) .".";
			
			/*
			Exercicio 8:
			Tenemos variables que almacenan los precios de los siguientes productos:
			manzanas 1.5 €/kg
			patatas 0.99 €/kg
			pan 0.65 €/barra
			Calcular el precio total de la compra si hemos comprado
			1 kg de manzanas, 5 kg de patatas y 2 barras de pan.
			Guarda el documento como 8compra.php. Visualiza el resultado en el navegador.
			*/
			
			echo "<h3>Exercicio 8</h3>";
			
			$c_pan = 2;
			$c_patatas = 5;
			$c_manzanas = 1;
			$p_manzanas = 1.5;
			$p_patatas = 0.99;
			$p_pan = 0.65;
			
			$total_patatas = $c_patatas * $p_patatas;
			$total_pan= $c_pan * $p_pan;
			$total_manzanas= $c_manzanas * $p_manzanas;			
			
			echo "<p align='right'>";
			echo "Patacas: " .$c_patatas. " * " .$p_patatas. " = " . $total_patatas ."<br />";
			echo "Maz&aacute;s: " .$c_manzanas. " * " .$p_manzanas. " = " . $total_manzanas ."<br />";
			echo "Pan: " .$c_pan. " * " .$p_pan. " = " . $total_pan ."<br />";
			echo "----------------------<br />";
			echo "TOTAL: ". ($total_manzanas + $total_pan + $total_patatas) ."<br />";
			echo "</p>";
			
			/*
			Exercicio 9:
			Calcular el sueldo total que percibe un trabajador cuyo sueldo base es, por ejemplo, 1000�
			al que le descuentan un 8% de impuestos.
			Guarda el documento como 9sueldo.php. Visualiza el resultado en el navegador.			
			*/
			
			echo "<h3>Exercicio 9</h3>";
			
			$impostos = 0.08;
			$salario = 1000;
			
			echo "
				Para un salario de ". $salario ."&euro; cunha retenci&oacute;n de ". ($impostos * 100) ."%, 
				teremos un salario final de ". ($salario - ($salario * $impostos)) ."&euro;.";			
			
			/*
			Exercicio 10:
			Tenemos una variable con un valor en pesetas, por ejemplo 1000.
			Crear otra que almacene ese valor en euros y lo visualice.
			*N&oacute;tese que para convertir de pesetas a euros hay que multiplicar por 166,386.
			Guarda el documento como 10euros.php. Visualiza el resultado en el navegador.
			*/
			
			echo "<h3>Exercicio 10</h3>";
			
			$pts = 1000;
			$pts_euro = 166.386;
			
			$euros_final = round ($pts / $pts_euro, 2);
			
			echo $pts. " pesetas = ". $euros_final ." euros.";
		 ?>	 
	</body>
</html>
