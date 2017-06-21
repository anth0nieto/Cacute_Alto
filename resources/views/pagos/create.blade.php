@extends('manage')


@section('content')
		
		@include('alerts.request')

		<div class = "form_container">
			
			<table align="center">

			
			{!!Form::open(['route'=>'payment.store','method'=>'POST'])!!}

			<p id="reg_selector">Ingresar Datos<br><br></p>
			

			@include('pagos.forms.pay')
			
			
			</table>

			{!!Form::submit('Registrar',['class'=>'btn btn-success'])!!}
			
			

			{!!Form::close()!!}
		
		</div>

@stop
