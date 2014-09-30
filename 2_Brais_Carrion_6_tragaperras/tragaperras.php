<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<!-- ******* codificaci�n no utf-8, 8951 caracteres latinos ****-->
		<meta content="text/html; charset=utf-8, 8951" http-equiv="Content-Type" />
		<title>Tragaperras</title>
	</head>
	
	<body>
		<?php
		
		/*
		Práctica 6: Tragaperras
		
		El programa tendr� dos p�ginas:
		    La primera pide el valor de la apuesta
		    La segunda muestra la jugada de la m�quina tragaperras y dice cu�nto se ha ganado.

		Se deben rellenar todos los campos con valores num�ricos mayores que cero (se permiten decimales)
		Premios:
		    Si sale una cereza, se devuelve la apuesta.
		    Si salen dos cerezas, se devuelve cuatro veces la apuesta.
		    Si salen tres cerezas, se devuelve diez veces la apuesta.
		    Si salen dos veces una fruta que no sean cerezas, se devuelve dos veces la apuesta.
		    Si salen tres veces una fruta que no sean cerezas, se devuelve cinco veces la apuesta.
		    Si sale una cereza y dos frutas iguales, se devuelve tres veces la apuesta.
		    En el resto de casos, se pierde el dinero.
		*/
		
		/*
		 * NOTA:
		 * Cando se copia algo con licencia CC hai que citar a fonte
		 * http://www.mclibre.org/consultar/php/examenes/12-13/tragaperras.html 
		 */
		
		
		if(isset($_GET['aposta']))//se se chega a través do formulario
		{
			$aposta = $_GET['aposta'];
		
			if($aposta < 0)
			{
				echo "A aposta &eacute; incorrecta<br />";
				echo "<a href='formulario.php'>Voltar atr&aacute;s</a>";
			}
			else
			{
				$tirada = get_froitas();
				
				presenta_tirada($tirada);
				presenta_premios();
				
				$premio = calcula_premio($tirada, $aposta);
				
				echo "
					<div align='center'>
						<h4>Apostaches ".$aposta."&euro;. As t&uacute;as ganancias con esta tirada da tragaperras foron.....</h4>
						<h2>".$premio."&euro;!!!!</h2>
						<a href='formulario.php'>Nova aposta</a>
						
				";
				
			}
			
		}
		else //se se chega sen pasar valores
		{
			echo "Ocorreu alg&uacute;n erro.<br />";
			echo "<a href='formulario.php'>Voltar atr&aacute;s</a>";
		}
		
		/*
		 * función get_froitas
		 * devolve un array coas 3 froitas aleatorias
		 */
		function get_froitas()
		{
			$toret = array();
			
			$toret[0] = rand(1 , 6);
			$toret[1] = rand(1 , 6);
			$toret[2] = rand(1 , 6);
			
			return $toret;
		}
		
		/*
		 * función presenta_tirada(t)
		 * debuxa a tirada actual
		 */
		 function presenta_tirada($t)
		 {
		 	echo "
			 	<div align='center'>
			 		<h2>TRAGAPERRAS</h2>
			 		<table border='1'>
						<tr>
							<td><img src='img/".$t[0].".png' /></td>
							<td><img src='img/".$t[1].".png' /></td>
							<td><img src='img/".$t[2].".png' /></td>
						</tr>
					</table>
				</div>
			";
		 }
		 
		 /*
		  * función presenta_premios 
		  * debuxa a lista de premios
		  */
		 function presenta_premios()
		 {
			?>
			<div align='center'>
		 		<table border=1 cellpadding=0 cellspacing=0>
		 			<tr>
		 				<th colspan="6">Lista de Premios</th>
		 			</tr>
		 			<tr>
		 				<td>Aposta * 1</td>
		 				<td>Aposta * 2</td>
		 				<td>Aposta * 3</td>
		 				<td>Aposta * 4</td>
		 				<td>Aposta * 5</td>
		 				<td>Aposta * 10</td>
		 			</tr>
		 			<tr>
		 				<td><img src='img/1.png' width=30 /></td>
		 				<td><img src='img/2.png' width=30 /><img src='img/2.png' width=30 /></td>
		 				<td><img src='img/1.png' width=30 /><img src='img/2.png' width=30 /><img src='img/2.png' width=30 /></td>
		 				<td><img src='img/1.png' width=30 /><img src='img/1.png' width=30 /></td>
		 				<td><img src='img/2.png' width=30 /><img src='img/2.png' width=30 /><img src='img/2.png' width=30 /></td>
		 				<td><img src='img/1.png' width=30 /><img src='img/1.png' width=30 /><img src='img/1.png' width=30 /></td>
		 			</tr>
		 			<tr>
		 				<td></td>
		 				<td><img src='img/3.png' width=30 /><img src='img/3.png' width=30 /></td>
		 				<td><img src='img/1.png' width=30 /><img src='img/3.png' width=30 /><img src='img/3.png' width=30 /></td>
		 				<td></td>
		 				<td><img src='img/3.png' width=30 /><img src='img/3.png' width=30 /><img src='img/3.png' width=30 /></td>
		 				<td></td>
		 			</tr>
		 			<tr>
		 				<td></td>
		 				<td><img src='img/4.png' width=30 /><img src='img/4.png' width=30 /></td>
		 				<td><img src='img/1.png' width=30 /><img src='img/4.png' width=30 /><img src='img/4.png' width=30 /></td>
		 				<td></td>
		 				<td><img src='img/4.png' width=30 /><img src='img/4.png' width=30 /><img src='img/4.png' width=30 /></td>
		 				<td></td>
		 			</tr>
		 			<tr>
		 				<td></td>
		 				<td><img src='img/5.png' width=30 /><img src='img/5.png' width=30 /></td>
		 				<td><img src='img/1.png' width=30 /><img src='img/5.png' width=30 /><img src='img/5.png' width=30 /></td>
		 				<td></td>
		 				<td><img src='img/5.png' width=30 /><img src='img/5.png' width=30 /><img src='img/5.png' width=30 /></td>
		 				<td></td>
		 			</tr>
		 			<tr>
		 				<td></td>
		 				<td><img src='img/6.png' width=30 /><img src='img/6.png' width=30 /></td>
		 				<td><img src='img/1.png' width=30 /><img src='img/6.png' width=30 /><img src='img/6.png' width=30 /></td>
		 				<td></td>
		 				<td><img src='img/6.png' width=30 /><img src='img/6.png' width=30 /><img src='img/6.png' width=30 /></td>
		 				<td></td>
		 			</tr>
				</table>
			</div>
			<?php
		 }
		
		/*
		 * función calcula_premio(t, p)
		 * devolve o premio corresponte a unha tirada e unha aposta
		 */
		function calcula_premio($t, $p)
		{
			$toret = 0;
			
			$count = array();//conta cantas veces aparece cada froita no array de tirada
			
			for($i=1; $i<=6; $i++) //crea e recorre o array de froitas
			{
				$count[$i] = 0;
				for($j=0; $j<3; $j++) // para cada froita recorre o array de tirada
				{
					if($t[$j] == $i) // se é a froita en cuestión suma 1
						$count[$i]++;
				}
			}
			
			/*
		    Si salen tres cerezas, se devuelve diez veces la apuesta.
		    Si salen tres veces una fruta que no sean cerezas, se devuelve cinco veces la apuesta.
		    Si salen dos cerezas, se devuelve cuatro veces la apuesta.
		    Si sale una cereza y dos frutas iguales, se devuelve tres veces la apuesta.
		    Si salen dos veces una fruta que no sean cerezas, se devuelve dos veces la apuesta.
			Si sale una cereza, se devuelve la apuesta.
			 */		
			
			// Cálculos de devolución de premio
			if($count[1] == 3)
				$toret = $p * 10;
			else if($count[2] == 3 || $count[3] == 3 || $count[4] == 3 || $count[5] == 3 || $count[6] == 3)
				$toret = $p * 5;
			else if($count[1] == 2)
				$toret = $p * 4;
			else if($count[1] == 1 && ($count[2] == 2 || $count[3] == 2 || $count[4] == 2 || $count[5] == 2 || $count[6] == 2))
				$toret = $p * 3;
			else if($count[2] == 2 || $count[3] == 2 || $count[4] == 2 || $count[5] == 2 || $count[6] == 2)
				$toret = $p * 2;
			else if($count[1] == 1)
				$toret = $p;
			
			return $toret;
		}


		 ?>	 
	</body>
</html>
