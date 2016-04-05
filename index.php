<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso Ingreso UTN FRA</title>

		<!--Estilos-->
		<link rel="stylesheet" type="text/css" href="./estilo.css">
		<link rel="stylesheet" type="text/css" href="./animacion.css">
		<!--final de Estilos-->

		<!--Lógica-Programación-->
		<script type="text/javascript" src="jsFerreteFacturacion.js"></script>
        <!--Final de Lógica-Programación -->
		

		</head>
	<body>
		<div class="CajaUno animated bounceInDown">
			
		
			<form id="FormIngreso" action="" method="post">

				<input type="number"  name="n1" placeholder="Ingrese Precio" id="PrecioUno">
				<input type="number"  name="n2" placeholder="Ingrese Precio" id="PrecioDos">
				<input type="number"  name="n3" placeholder="Ingrese Precio" id="PrecioTres">
				<br>
				<input type="submit" name="sumar" value="sumar">
				<input type="submit" name="promedio" value="promedio">
				<input type="submit" name="precio" value="precio final">
				
				
			</form>
			
		</div>
		<div class="CajaUno animated bounceInLeft" >
			
			
			<!---<button  class="MiBotonUTN" onclick="Sumar()" >Sumar</button>
			<button  class="MiBotonUTN" onclick="Promedio()" >Promedio</button>
			<button  class="MiBotonUTN" onclick="PrecioFinal()" >Precio Final</button> -->

		</div>

		<div class="CajaEnunciado animated bounceInLeft">
			<h2>Enunciado:</h2>
			
	
				<h3>
					1.	Para el departamento de facturación:
						<br>A.	Ingresar tres precios de productos y mostrar la suma de los mismos.
						<br>B.	Ingresar tres precios de productos y mostrar el promedio de los mismos.
						<br>C.	ingresar tres precios de productos  y mostrar precio final (más IVA 21%).



				</h3>
			
		</div>

		<div class="CajaAbajo animated bounceInUp">
			<a  class="MiBotonUTNLinea" onclick="location.href='index.html'" >Men&uacute; ejercicios</a>	
		</div>

		<?php 
			
			if (isset($_POST['sumar'])) {
				$precio1 = $_POST['n1'];
				$precio2 = $_POST['n2'];
				$precio3 = $_POST['n3'];


				echo "la suma es: ";
				echo "$precio1"+"$precio2"+"$precio3";
			}

			if (isset($_POST['promedio'])) {
				# code...
			}

			if (isset($_POST['precio'])) {
				# code...
			}



		 ?>



	</body>
</html>