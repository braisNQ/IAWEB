<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<!-- ******* codificaci&oacute;n no utf-8, 8951 caracteres latinos ****-->
		<meta content="text/html; charset=utf-8, 8951" http-equiv="Content-Type" />
		<title>Estructuras de control</title>
	</head>
	
	<body>
		<?php
		
			/*
			Exercicio 2:
			Escribir un programa que teniendo almacenada en una variable la nota de un examen (un n� entre 0 y 10)
			imprima por pantalla la calificaci&oacute;n en formato texto:
			"Suspenso", si la nota es menor que 5,
			"Aprobado" si est&aacute; entre 5 inclusive y 7 sin incluir,
			"Notable" si est&aacute; entre 7 inclusive y 9 sin incluir,
			"Sobresaliente" si est&aacute; entre 9 inclusive y 10 sin incluir y
			"Matr&iacute;cula de honor" si la nota es igual a 10.
			*/
			
			echo "<h3>Exercicio 2: Notas</h3>";
			
			$nota = 10;
			
			calcula_nota($nota);
			
			function calcula_nota($n)
			{
				if($n > 10 || $n <0)
					echo "A nota proporcionada &eacute; incorrecta";
				else
				{
					echo "A nota correspondente a un ". $n ." &eacute;: ";
					if($n >= 0 && $n <5)
						echo "Suspenso";
					if($n>=5 && $n<7)
						echo "Aprobado";
					if($n >= 7 && $n <9)
						echo "Notable";
					if($n>=9 && $n<10)
						echo "Sobresaliente";
					if($n==10)
						echo "MH";
				}
			}
			
			/*
			Exercicio 3
			Almacenar en una variable el n&uacute;mero de mes.
			Escribir un programa que muestre por pantalla "Vacaciones!" si se trata del mes de
			Junio, julio o agosto y que muestre "Hay que trabajar" en cualquier otro caso
			*/
			
			echo "<h3>Exercicio 3: Vacaci&oacute;ns</h3>";
			
			$mes = date("m"); //recolle o mes actual
			$mes_letra = date("M"); //recolle o nome do mes
			
			echo "Estamos no mes ".$mes_letra. " (".$mes.").... ";
			if($mes >=6 && $mes <=8)
				echo "VACACI&Oacute;NS!!!!!";
			else
				echo "A traballar!";
				
			/*
			Exercicio 4
			se mostrar&aacute; una tabla de 100 celdas en las que se van mostrando los valores
			desde 1 hasta 100 y alternando los colores de las celdas.
			*/
			
			echo "<h3>Exercicio 4: Exemplo uso FOR</h3>";
			
			$max_row = 10;
			$max_col = 10;
			$color1 = "#f278a0";
			$color2 = "03c0cf";
			
			echo "<table border='1'>";
			
			for($i=1; $i<=$max_row; $i++)
			{
				echo "<tr>";			
				for($j=1; $j<=$max_col; $j++)
				{
					echo "<td ";
					if($i % 2 == 0)
						echo "bgcolor = ".$color1;
					else
						echo "bgcolor = ".$color2;
					echo ">".($i * $j)."</td>";
				}			
				echo "</tr>";
			}
			echo "</table>";			
			
			/*
			Exercicio 5
			Usando la instrucci&oacute;n for en PHP, crea un documento empleando este lenguaje,
			que permita dibujar un rect&aacute;ngulo de asteriscos de 5 filas y 7 columnas
			*/
			
			echo "<h3>Exercicio 5: Cuadrado de asteriscos</h3>";
			
			$max_row = 5;
			$max_col = 7;
			
			for($i=0;$i<$max_row;$i++)
			{
				for($j=0;$j<$max_col;$j++)
				{
					echo " * ";
				}
				echo "<br />";
			}

			echo "<h3>Exercicio 5: Versi&oacute;n 2 - Borde de asteriscos</h3>";			
			
			for($i=0;$i<$max_row ;$i++)
			{
				if($i == 0 || $i == $max_row -1)
					full_row($max_col);
				else
					empty_row($max_col);
				echo "<br />";
			}
			
			function full_row($r)
			{
				for($i=0; $i<$r;$i++)
					echo " * ";
			}
			
			function empty_row($r)
			{
				echo " * ";
				for($i=0; $i<$r-2;$i++)
					echo "&nbsp;&nbsp;&nbsp;";
				echo " * ";
			}
			
			/*
			Exercicio 6
			Crear una variable llamada $numero que contendr&aacute; un valor num&eacute;rico, el que cada uno quiera.
			Escribir un programa que muestre el mensaje "numero incorrecto"
			si el n&uacute;mero es negativo o igual a cero y que muestre la tabla de multiplicar
			de ese n&uacute;mero si es positivo.
			*/
			
			echo "<h3>Exercicio 6: Tabla de multiplicar</h3>";
			
			$numero = 80;
			if($numero <=0)
				echo "N&uacute;mero incorrecto";
			else
			{
				for($i=1;$i<=10;$i++)
				{
					echo $numero ." * ". $i ." = ". ($i * $numero) ."<br />";
				}
			}
			
			/*
			Exercicio 7
			Crear una p&aacute;gina que emplee PHP para crear un array que contendr&aacute;
			todos los colores del arco iris: rojo, naranja, amarillo, verde, azul, y violeta.
			El programa permitir&aacute; recorrer el array y mostrar todos los colores por pantalla, uno en cada l&iacute;nea.
			*/
			
			echo "<h3>Exercicio 7: Arco iris</h3>";
			
			$cores = array
			(
				array ("vermello", "red"),
				array ("laranxa", "orange"),
				array ("amarelo", "yellow"),
				array ("verde", "green"),
				array ("azul claro", "cyan"),
				array ("azul escuro", "blue"),
				array ("morado", "purple")
			);
			
			echo "<table>";
			for($i=0;$i<count($cores);$i++)
			{
				echo "<tr>";
				echo "<td bgcolor='".$cores[$i][1] ."'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>". $cores[$i][0] ."</td>";
				echo "</tr>";
			}
			echo "</table>";		 
		?>	 
	</body>
</html>
