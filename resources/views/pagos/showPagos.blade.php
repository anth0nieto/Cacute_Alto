@extends('manage')


@section('content')

 	@include('alerts.success')
	@include('alerts.errors')
 	
 	
 	<div class="form_container_custom">
 	
 
 	
 	<table class="table" style="color: white">
		
		@if(count($pagos)!=0)
				
				<?php $nombre = "";?>

			@if($var==true)

				<?php $nombre = $pagos[0]->n_finca;?>
			
			@endif

			<a href="/pdfPagos?var=<?php echo $var;?>&nombre=<?php echo $nombre;?>" style="color:white"><button type="button" class="btn btn-danger" aria-label="Left Align" >
  			<span class="glyphicon glyphicon-save"> Descargar PDF</span>
			</button></a>
		
		@endif

             <div class="panel-heading">
		             <thead align="center">
						<th>Nombre de la Finca</th>
						<th>Mes Cancelado</th>
						<th>Fecha</th>
						<th>Monto</th>
						<th>Ci del Tesorero</th>
						<th>Nombre del Tesorero</th>
						<th>Ci del Contribuyente</th>
						<th>Nombre del Contribuyente</th>
						<th>Operación</th>
					</thead>
			</div>

            <div class="panel-body">
	

		
		
				@foreach($pagos as $pago)


				<tbody align="left">
					
					<td>{!!$pago->n_finca!!}</td>
					<td>{!!$pago->mes_cancelado!!}</td>
					<td>{!!$pago->f_cuota!!}</td>
					<td>{!!$pago->monto!!}</td>
					<td>{!!$pago->ci_tesorero!!}</td>
					<td>{!!$pago->nombre_tesorero!!}</td>
					<td>{!!$pago->ci_contribuyente!!}</td>
					<td>{!!$pago->nombre_contribuyente!!}</td>
					<td>
			
						<ul class="list-inline">
			  			
						<li>

						{!!Form::open(['action'=>['PaymentsController@edit', $pago->id], 'method' => 'GET'])!!}
						{!!Form::submit('Editar',['class'=>'btn btn-primary'])!!}
						{!!Form::close()!!}

						<li>
						
						</ul>
			
					</td>
					
				</tbody>

				@endforeach

			
			</div>

	</table>
	
	{!! $pagos->links() !!}
	
	</div>
    
	
	


@stop
