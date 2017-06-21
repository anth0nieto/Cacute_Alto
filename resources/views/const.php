<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       	<meta http-equiv="Content-type" content="text/html;charset=utf-8" />
		<title>
			Sistema de Gestión: Consejo Comunal Cacute Alto
		</title>
		<link href="img/favicon.ico" rel="icon" />
		<link rel="stylesheet" href="css/estilos.css">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<!-- Web-Fonts -->
		<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Merienda:400,700' rel='stylesheet' type='text/css'>
		<!-- //Web-Fonts -->
				<!--Se carga JQuery-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> 



	</head>
	<body>
		<header class="header">
			<div class = "header_container">
				<h1><a href="home">Consejo Comunal <span>Cacute Alto</span> </a></h1>
				<hr class = "separator">
				<nav>
					<ul class="menu">
						<li id ="opc_r" ><a href="registro">Registro</a></li>
						<li id ="opc_g"><a href="gestion">Gestión</a></li>
						<li id ="opc_c"><a href="constancias">Constancias</a></li>
						<li id ="opc_r"><a href="reuniones">Reuniones</a></li>
						<li id ="opc_p"><a href="pagos">Pagos</a></li>
						<li id ="opc_cr"><a href="calendario">Calendario de Riego</a></li>
					</ul>
				</nav>
			</div>

		</header>

		<div class = "form_container">
			<table>
				<form name="const_data_form" action="store" method="POST">

					<div class="field_container">
						<p id="reg_selector">Seleccione el Tipo de Constancia a Generar<br><br></p>
						<select id="const_type" name="const_type" class="styled-select">
							<option selected disabled>Tipo de Constancia</option>
							<option value="Constancia de Productor Agrícola" >Constancia de Productor Agrícola</option>
							<option value="Constancia de Residencia" disabled>Constancia de Residencia</option>
							<option value="Aval de Transporte de Abono" disabled>Aval de Transporte de Abono</option>
							<option value ="Aval para Desmalezar" disabled>Aval para Desmalezar</option>
						</select>
					</div>


					<div class="field_container" id="prod_const">
						<br>><input class ="text_field" type="text" name="directed" id="directed" placeholder="Dirigido a:">
							<br><select  class="id_type_select" id="cg_id_type">
								<option value="V" selected>V</option>
								<option value="E">E</option>
							</select>
						<input class ="text_field" type="text" name="id_cg" id="id_cg" placeholder="Introduzca su numero de C.I.: ">


				<br><br><input type="submit" name="submit_const" id="submit_const" class ="button" value="Generar">
				</form>
			</table>
		</div>


	</body>
</html>
