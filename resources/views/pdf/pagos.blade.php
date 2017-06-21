<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
</head>
<body>

	<header class="header">
            <div class = "header_container">
                <h1 align="center">Consejo Comunal <span>Cacute Alto</span></h1>
                <hr class = "separator" style="color:#00695C ">
            </div>

        </header>
	
	<h1 align="center" width="100%" style="color: #333" > Lista de Pagos </h1>
	<table class="table" style="border: 1px solid #000" width="100%" align ="center" color = "#5cb85c">

		             <thead style="width:40%; background-color:#00695C; color:#fff;border: 1px solid #000;">
		             	<tr style="border: 1px solid #000">
		             		<th>Nombre de la Finca</th>
							<th>Mes Cancelado</th>
							<th>Fecha</th>
							<th>Monto Bs</th>
							<th>Ci del Tesorero</th>
							<th>Nombre del Tesorero</th>
							<th>Ci del Contribuyente</th>
							<th>Nombre del Contribuyente</th>
		             	</tr>
						
					</thead>
			

            
		
				@foreach($pagos as $pago)


				<tbody style="border: 1px solid #000">
					<tr>
						<td style="width:20%">{!!$pago->n_finca!!}</td>
						<td style="background-color:#336699; color:#fff; text-align: center">{!!$pago->mes_cancelado!!}</td>
						<td>{!!$pago->f_cuota!!}</td>
						<td>{!!$pago->monto!!}</td>
						<td>{!!$pago->ci_tesorero!!}</td>
						<td>{!!$pago->nombre_tesorero!!}</td>
						<td>{!!$pago->ci_contribuyente!!}</td>
						<td>{!!$pago->nombre_contribuyente!!}</td>
					</tr>
					
					
					
				</tbody>

				@endforeach

			

	</table>
	
	
</body>
</html>
	