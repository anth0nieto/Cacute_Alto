@extends('manage')


@section('content')

 	@include('alerts.success')
	@include('alerts.errors')
 
 	
 	<div class="form_container_custom">
 		
 	
 	<table class="table" style="color: white">

             <div class="panel-heading">
		             <thead align="center">
						<th>Nombre de la Finca</th>
						<th>Operación</th>
					</thead>
			</div>

            <div class="panel-body">
	

				{{$array[]=""}}
				<?php $var=true?>
				@foreach($pagos as $pago)
				
					@for($i=0; $i<count($array);$i++)
						@if($array[$i] == $pago->n_finca)
							<?php $var=false?>
							@break
						@endif
					@endfor


				<tbody align="left">
					
					@if($var==true)
						<td><a href="/showPagosFinca?n_finca=<?php echo $pago->n_finca?>">{!!$pago->n_finca!!}</a></td>
						<td>
							{!!Form::open(['action'=>['PaymentsController@showPagosFinca', $pago->id], 'method' => 'GET'])!!}
							<input name="n_finca" type="hidden" id="n_finca"  value="{{$pago->n_finca}}"/>
							{!!Form::submit('Abrir',['class'=>'btn btn-primary'])!!}
							{!!Form::close()!!}
						</td>
						<?php $array[]=$pago->n_finca?>
					@endif

						
				</tbody>

				@endforeach
					
			
			</div>

	</table>
	
	{!! $pagos->links() !!}
	
	</div>
    
	
	


@stop
