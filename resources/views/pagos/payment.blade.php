@extends('manage')


@section('content')
		
		<div class="container" >		
					
						@include('alerts.success')
						@include('alerts.errors')
						@include('alerts.request')			
		</div>
		
		<div class = "form_container">
			<table>

			<p id="reg_selector">Seleccione la acción que desea realizar<br><br></p>
				
				<div class="row">
					<div class="list-group">
					  <a href="{!!URL::to('/registrarPago')!!}" class="list-group-item active">
					    <span class="label label-success"><h>Registrar Pago</h></span>
					    <h5 class="list-group-item-text">Registre el pago de una finca</h5>
					  </a>
					</div>
				</div>

				<div class="row">
					<div class="list-group">
					  <a href="{!!URL::to('/listarPago')!!}" class="list-group-item active">
					    <span class="label label-warning"><h>Listar Pagos</h></span>
					    <h5 class="list-group-item-text">Liste todos los pagos realizados</h5>
					  </a>
					</div>
				</div>

				<div class="row">
					<div class="list-group">
					  <a href="{!!URL::to('/listarPagoFinca')!!}" class="list-group-item active">
					    <span class="label label-default"><h>Listar Pagos por finca</h></span>
					    <h5 class="list-group-item-text">Liste todos los pagos ordenados por Finca</h5>
					  </a>
					</div>
				</div>
				
		
			</table>
		
		</div>

@stop
