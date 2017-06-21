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

		<link rel="shortcut icon" href="img/bg.JPG"/>
		<link href="img/favicon.ico" rel="icon" />
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<!-- Web-Fonts -->
		<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Merienda:400,700' rel='stylesheet' type='text/css'>
		<!-- //Web-Fonts -->
				<!--Se carga JQuery-->
		{!!Html::script('https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js')!!}
		{!!Html::script('http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.j')!!}
		{!!Html::style('css/bootstrap.css')!!}
		{!!Html::style('css/estilos.css')!!}
		


	</head>
	<body>
		<header class="header">
			<div class = "header_container">
				<h1><a href="home">Consejo Comunal <span>Cacute Alto</span> </a></h1>
				<hr class = "separator">
				<nav>
					<ul class="menu">
						<li id ="opc_r" ><a href="/registro">Registro</a></li>
						<li id ="opc_g"><a href="/gestion">Gestión</a></li>
						<li id ="opc_c"><a href="/constancias">Constancias</a></li>
						<li id ="opc_r"><a href="/reuniones">Reuniones</a></li>
						<li id ="opc_p"><a href="/pagos">Pagos</a></li>
						<li id ="opc_cr"><a href="/calendario">Calendario de Riego</a></li>
					</ul>
				</nav>
			</div>

		</header>

		@yield('content')
		
	</body>
	{!!Html::script('js/bootstrap.min.js')!!}
</html>
