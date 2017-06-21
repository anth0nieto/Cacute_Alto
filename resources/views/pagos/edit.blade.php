@extends('manage')


@section('content')
		
		@include('alerts.request')

		<div class = "form_container">
			
			<table align="center">

			
			{!!Form::model($pago,['route'=>['payment.update',$pago->id],'method'=>'PUT'])!!}

			<p id="reg_selector">Editar Datos<br><br></p>
			

			@include('pagos.forms.pay')
							
			
			</table>
			
			<ul class="list-inline">
				<li>
					{!!Form::submit('Actualizar',['class'=>'btn btn-success'])!!}
					{!!Form::close()!!}
		
				</li>
				<li>
					{!!Form::open(['route'=>['payment.destroy', $pago->id], 'method' => 'DELETE'])!!}
						{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
						{!!Form::close()!!}
				</li>

			</ul>
			
			
			{!!Form::close()!!}
		

			
		</div>

@stop
