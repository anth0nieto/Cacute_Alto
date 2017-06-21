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
		<script type="text/javascript">
			$(document).ready(function()
			{ /*Para que no funcione hasta estar cargada la pagina*/
				
				$('#registry_type').change(function()
				{
					if ($('#registry_type').val() == "Persona")
					{
            			$('#age_selector').slideDown('slow');
            			$('#home_registry').hide();
            			$('#farm_registry').hide();
            			$('#const_registry').hide();
            			$('#meeting_registry').hide();
            			$('#fee_registry').hide();
            			if($("input[name='age_opt']:checked").val() == "Adult") 
            			{	
            				$('#adult_registry').slideDown('slow');
            				$('#underage_registry').hide();
            				if($("input[name='prod_opt']:checked").val() == "Prod_true") 
            				{	
            					$('#prod_fields').slideDown('slow');
            				}
            				else
            				{
            					$('#prod_fields').slideUp('slow');
            				}
            			
            			}
            			else
            			{
            				$('#underage_registry').slideDown('slow');
            				$('#adult_registry').hide();
            				$('#prod_fields').hide();
            			}

   					}
   					else if($('#registry_type').val() == "Vivienda")
   					{
   						$('#age_selector').hide();
        				$('#adult_registry').hide();
        				$('#underage_registry').hide();
        				$('#prod_fields').hide();
            			$('#farm_registry').hide();
            			$('#const_registry').hide();
            			$('#meeting_registry').hide();
            			$('#fee_registry').hide();
        				$('#home_registry').slideDown('slow');
        				if($("input[name='home_opt']:checked").val() == "Address")
        				{
        					$('#address_registry').slideDown('slow');
        				}
        				else
        				{
        					$('#address_registry').slideUp('slow');
        					$('#habs_registry').slideDown('slow');
        				}
   					}

   					else if($('#registry_type').val() == "Finca")
   					{
   						$('#age_selector').hide();
        				$('#adult_registry').hide();
        				$('#underage_registry').hide();
        				$('#prod_fields').hide();
            			$('#home_registry').hide();
            			$('#const_registry').hide();
            			$('#meeting_registry').hide();
            			$('#fee_registry').hide();
        				$('#farm_registry').slideDown('slow');
        				if($("input[name='land_opt']:checked").val() == "Land")
        				{
        					$('#land_registry').slideDown('slow');
        					$('#landlord_registry').hide();
        				}
        				else
        				{
        					$('#land_registry').slideUp('slow');
        					$('#landlord_registry').slideDown('slow');
        				}
   					}

   					else if($('#registry_type').val() == "Constancia")
   					{
   						$('#age_selector').hide();
        				$('#adult_registry').hide();
        				$('#underage_registry').hide();
        				$('#prod_fields').hide();
            			$('#home_registry').hide();
            			$('#farm_registry').hide();
            			$('#meeting_registry').hide();
            			$('#fee_registry').hide();
        				$('#const_registry').slideDown('slow');
   					}

   					else if($('#registry_type').val() == "Reunión")
   					{
   						$('#age_selector').hide();
        				$('#adult_registry').hide();
        				$('#underage_registry').hide();
        				$('#prod_fields').hide();
            			$('#home_registry').hide();
            			$('#const_registry').hide();
        				$('#farm_registry').hide();
        				$('#fee_registry').hide();
        				$('#meeting_registry').slideDown('slow');
        				if($("input[name='meet_opt']:checked").val() == "act")
        				{
        					$('#act_registry').slideDown('slow');
        					$('#att_registry').hide();
        				}
        				else
        				{
        					$('#act_registry').slideUp('slow');
        					$('#att_registry').slideDown('slow');
        				}
   					}

   					else if($('#registry_type').val() == "Cuota")
   					{
   						$('#age_selector').hide();
        				$('#adult_registry').hide();
        				$('#underage_registry').hide();
        				$('#prod_fields').hide();
            			$('#home_registry').hide();
            			$('#farm_registry').hide();
            			$('#meeting_registry').hide();
        				$('#const_registry').hide();
        				$('#fee_registry').slideDown('slow');
   					}

				});


				$("input[name='home_opt']").on("click",function()
        		{
        			if($("input[name='home_opt']:checked").val() == "Address") 
            		{	
            			$('#address_registry').show();
            			$('#habs_registry').hide();

            		}
            		else
            		{
            			$('#address_registry').hide();
            			$('#habs_registry').show();	
        			}
        		});


				$("input[name='land_opt']").on("click",function()
        		{
        			if($("input[name='land_opt']:checked").val() == "Land") 
            		{	
            			$('#land_registry').show();
            			$('#landlord_registry').hide();

            		}
            		else
            		{
            			$('#land_registry').hide();
            			$('#landlord_registry').show();	
        			}
        		});

				$("input[name='age_opt']").on("click",function()
            	{
            			if($("input[name='age_opt']:checked").val() == "Adult") 
            			{	
            				$('#adult_registry').show();
            				$('#underage_registry').hide();
            				if($("input[name='prod_opt']:checked").val() == "Prod_true") 
            				{	
            					$('#prod_fields').slideDown('slow');
            				}
            				else
            				{
            					$('#prod_fields').slideUp('slow');
            				}
            			}
            			else
            			{
            				$('#underage_registry').show();
            				$('#adult_registry').hide();
            				$('#prod_fields').hide();
            			}
   				});

				$("input[name='meet_opt']").on("click",function()
        		{
        			if($("input[name='meet_opt']:checked").val() == "act") 
            		{	
            			$('#act_registry').show();
            			$('#att_registry').hide();

            		}
            		else
            		{
            			$('#act_registry').hide();
            			$('#att_registry').show();	
        			}
        		});


				$('#ad_datepicker').datepicker({
					showAnim: 'slideDown',
					changeMonth: true,
					changeYear: true,
					yearRange: "-100:+0",
					dateFormat: "yy-mm-dd"
				});

				$('#u_datepicker').datepicker({
					showAnim: 'slideDown',
					changeMonth: true,
					changeYear: true,
					yearRange: "-100:+0",
					dateFormat: "yy-mm-dd"
				});


				$('#const_datepicker').datepicker({
					showAnim: 'slideDown',
					changeMonth: true,
					changeYear: true,
					yearRange: "-1:+0",
					dateFormat: "yy-mm-dd"
				});


				$('#meet_datepicker1').datepicker({
					showAnim: 'slideDown',
					changeMonth: true,
					changeYear: true,
					yearRange: "-1:+0",
					dateFormat: "yy-mm-dd"
				});
				
				$('#meet_datepicker2').datepicker({
					showAnim: 'slideDown',
					changeMonth: true,
					changeYear: true,
					yearRange: "-1:+0",
					dateFormat: "yy-mm-dd"
				});

				$('#fee_datepicker').datepicker({
					showAnim: 'slideDown',
					changeMonth: true,
					changeYear: true,
					yearRange: "-1:+0",
					dateFormat: "yy-mm-dd"
				});

				$("input[name='prod_opt']").on("click",function()
            	{
            			if($("input[name='prod_opt']:checked").val() == "Prod_true") 
            			{	
            				$('#prod_fields').slideDown('slow');
            			}
            			else
            			{
            				$('#prod_fields').slideUp('slow');
            			}
   				});

			}); 

		</script>

		<script type="text/javascript">
			function form_modifier () 
			{
				var aux1 = document.getElementById("id_type");
				var idtype = aux1.options[aux1.selectedIndex].value;
				var idtext = document.getElementById("id").value;
				var ad_fullid = idtype+"-"+idtext+"-0";
				document.getElementById("ad_fullid").value = ad_fullid;
				document.forms.person_registry_form.submit();
			}

		</script>






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
				<form name="person_registry_form" action="store" method="POST">

					<div class="field_container">
						<p id="reg_selector">Seleccione el Tipo de Registro<br><br></p>
						<select id="registry_type" name="registry_type" class="styled-select">
							<option selected disabled>Seleccione</option>
							<option value="Persona">Persona</option>
							<option value="Vivienda">Vivienda</option>
							<option value="Finca">Finca</option>
							<option value="Constancia">Constancia</option>
							<option value="Reunión">Reunión</option>
							<option value="Cuota">Cuota</option>
						</select>
					</div>


					<p id="age_selector"> Seleccione el Tipo de Persona      
					<input type="radio" id="ad_opt" name="age_opt" class="radio_opt" value="Adult" checked> Adulto
					<input type="radio" id ="u_opt" name="age_opt" class="radio_opt" value="Underage"> Menor </p>

					<div class="field_container" id="adult_registry">
						<input class ="text_field" type="text" name="ad_first_name" id="ad_first_name" placeholder="Primer Nombre">
						<input class ="text_field" type="text" name="ad_middle_name" id="ad_middle_name" placeholder="Segundo Nombre"><br>
						<input class ="text_field" type="text" name="ad_surname" id="ad_surname" placeholder="Primer Apellido">
						<input class ="text_field" type="text" name="ad_second_surname" id="ad_second_surname" placeholder="Segundo Apellido">
						<br><select id="id_type" name="id_type" class="id_type_select">
							<option value="V">V</option>
							<option value="E">E</option>
						</select>
						<input class="id_field" type="text" name="id" id="id" placeholder="Cédula de Identidad">
						<input type="hidden" name="ad_fullid" id="ad_fullid">
						<input class="text_field" type="text" name="ad_datepicker" id="ad_datepicker" placeholder="Fecha de Nacimiento">
						<br><input class="text_field" type="text" name="ad_country" id="ad_country" placeholder="País de Nacimiento">
						<select id="ad_gender_type" name="ad_gender_type" class="styled-select">
							<option selected disabled>Seleccione Género</option>
							<option value="F">Femenino</option>
							<option value="M">Masculino</option>
						</select>
						<br>
						<input class="text_field" type="text" name="phone" id="phone" placeholder="Número Telefónico">
						<select id="ad_med_cond" name="ad_med_cond" class="styled-select">
							<option selected disabled>¿Posee Alguna Condición Médica?</option>
							<option value=true>Si</option>
							<option value=false>No</option>
						</select><br>
						<input class="text_field" type="text" name="occupation" id="occupation" placeholder="Ocupación">
						<select id="alpha" name="alpha" class="styled-select">
							<option selected disabled>¿Está Alfabetizado?</option>
							<option value=true>Si</option>
							<option value=false>No</option>
						</select>
						<br><p id="prod_query">¿Se desempeña como productor agrícola?       
						<input type="radio" name="prod_opt" class="radio_opt" value="Prod_false" checked> No
						<input type="radio" name="prod_opt" class="radio_opt" value="Prod_true"> Si </p>
					</div>

					<div class="field_container" id="prod_fields">
						<input class="text_field" type="text" name="prod_code" id="prod_code" placeholder="Código de Productor">
						<input class="text_field" type="text" name="prod_area" id="prod_area" placeholder="Hectáreas Productivas">
						<br><br><select id="prod_property" name="prod_property" class="styled-select">
							<option selected disabled>Seleccione Tenencia de Tierras</option>
							<option value="Propietario">Propietario</option>
							<option value="Mediero">Mediero</option>
							<option value="Arrendatario">Arrendatario</option>
						</select>
					</div>


					<div class="field_container" id="underage_registry">
						<select id="idrep_type" name="idrep_type" class="id_type_select">
							<option value="V" selected>V</option>
							<option value="E">E</option>
						</select>
						<input class="id_field" type="text" name="idrep" id="idrep" placeholder="Cédula del Representante">
						<input class="text_field" type="text" name="reprel" id="reprel" placeholder="Relación del Representante">
						<br><input class ="text_field" type="text" name="u_first_name" id="u_first_name" placeholder="Primer Nombre">
						<input class ="text_field" type="text" name="u_middle_name" id="u_middle_name" placeholder="Segundo Nombre"><br>
						<input class ="text_field" type="text" name="u_surname" id="u_surname" placeholder="Primer Apellido">
						<input class ="text_field" type="text" name="u_second_surname" id="u_second_surname" placeholder="Segundo Apellido">
						<input class="text_field" type="text" name="u_datepicker" id="u_datepicker" placeholder="Fecha de Nacimiento">
						<input class="text_field" type="text" name="u_country" id="u_country" placeholder="País de Nacimiento"><br><br>
						<select id="u_gender_type" name="u_gender_type" class="styled-select">
							<option selected disabled>Seleccione Género</option>
							<option value="F">Femenino</option>
							<option value="M">Masculino</option>
						</select>
						<select id="u_med_cond" name="u_med_cond" class="styled-select">
							<option selected disabled>¿Posee Alguna Condición Médica?</option>
							<option value=true >Si</option>
							<option value=false>No</option>
						</select>
						<br><br><select id="school" name="school" class="styled-select">
							<option selected disabled>¿Está Escolarizado Actualmente?</option>
							<option value="true">Si</option>
							<option value="false">No</option>
						</select>
					</div>


					<div id="home_registry" class="field_container">
						<p id="home_selector"> Seleccione el Tipo de Registro      
							<input type="radio" id="address_opt" name="home_opt" class="radio_opt" value="Address" checked> Dirección
							<input type="radio" id ="habs_opt" name="home_opt" class="radio_opt" value="Habs"> Habitantes
						</p>

						<div class="field_container" id="address_registry">
							<input class ="text_field" type="text" name="home_address" id="home_address" placeholder="Direccion">
							<select id="home_prop" name="home_prop" class="styled-select">
								<option selected disabled>¿La Vivienda es Propia?</option>
								<option value=true>Si</option>
								<option value=false>No</option>
							</select><br>
						</div>	

						<div class="field_container" id="habs_registry">
							<select id="idhab_type" name="idhab_type" class="id_type_select">
								<option value="V" selected>V</option>
								<option value="E">E</option>
							</select>
							<input class="id_field" type="text" name="hab_id" id="hab_id" placeholder="Inserte el Identificador">
							<input class="text_field" type="text" name="home_cod" id="home_cod" placeholder="Inserte el Código de la Vivienda">
						</div>
					</div>



					<div id="farm_registry" class="field_container">
						<p id="farm_selector"> Seleccione el Tipo de Registro      
							<input type="radio" id="land_opt" name="land_opt" class="radio_opt" value="Land" checked> Finca
							<input type="radio" id ="landlord_opt" name="land_opt" class="radio_opt" value="Landlord"> Productor por Finca
						</p>

						<div class="field_container" id="land_registry">
							<input class ="text_field" type="text" name="farm_name1" id="farm_name1" placeholder="Nombre de la Finca">
							<select id="water_turn" name="water_turn" class="styled-select">
								<option selected disabled>Turno de Sistema de Riego</option>
								<option value="A">A</option>
								<option value="B">B</option>
							</select><br>
						</div>	

						<div class="field_container" id="landlord_registry">
							<input class="text_field" type="text" name="code_prod" id="code_prod" placeholder="Código de Productor">
							<input class="text_field" type="text" name="farm_name2" id="farm_name2" placeholder="Inserte el Nombre de la Finca">
						</div>
					</div>


					<div id="const_registry" class="field_container">
						<input class="text_field" type="text" name="const_datepicker" id="const_datepicker" placeholder="Fecha de Constancia">
						<br><select id="idconst_type" name="idconst_type" class="id_type_select">
							<option value="V" selected>V</option>
							<option value="E">E</option>
						</select>
							<input class="id_field" type="text" name="const_id" id="const_id" placeholder="Inserte Cédula del Solicitante">
						<br><select id="const_type" name="const_type" class="styled-select">
							<option selected disabled>Tipo de Constancia</option>
							<option value="Constancia de Productor Agrícola">Constancia de Productor Agrícola</option>
							<option value="Constancia de Residencia">Constancia de Residencia</option>
							<option value="Aval de Transporte de Abono">Aval de Transporte de Abono</option>
							<option value="Aval para Desmalezar">Aval para Desmalezar</option>
						</select><br>
					</div>



					<div id="meeting_registry" class="field_container">
						<p id="meet_selector"> Seleccione el Tipo de Registro      
							<br><br><input type="radio" id="act_opt" name="meet_opt" class="radio_opt" value="act" checked> Datos Reunión
							<input type="radio" id ="att_opt" name="meet_opt" class="radio_opt" value="att"> Asistencia a la Reunión
						</p>

						<div class="field_container" id="act_registry">
						<input class="text_field" type="text" name="meet_datepicker1" id="meet_datepicker1" placeholder="Fecha de la Reunión">
						<br><input class="text_field" type="text" name="meet_act" id="meet_act" placeholder="URL del Acta">
						</div>	

						<div class="field_container" id="att_registry">
						<input class="text_field" type="text" name="meet_datepicker2" id="meet_datepicker2" placeholder="Fecha de la Reunión">
						<br><select id="idmeet_type" name="idmeet_type" class="id_type_select">
							<option value="V" selected>V</option>
							<option value="E">E</option>
						</select>
							<input class="id_field" type="text" name="meet_id" id="meet_id" placeholder="Inserte Cédula de Asistente">
						</div>
					</div>


					<div id="fee_registry" class="field_container">
						<br><input class="text_field" type="text" name="fee_datepicker" id="fee_datepicker" placeholder="Fecha de Pago">
						<br><input class="text_field" type="text" name="land_name" id="land_name" placeholder="Nombre de Finca que Cancela">
						<br><input class="text_field" type="text" name="amount" id="amount" placeholder="Monto Cancelado">
					</div>

				<br><br><input type="submit" name="person_register" id="submit_person" class ="button" value="Enviar" onclick="form_modifier()">
				<input type="reset" name="person_eraser" id="clear_person" class ="button" value="Limpiar">
				</form>
			</table>
		</div>

			

	</body>
</html>
