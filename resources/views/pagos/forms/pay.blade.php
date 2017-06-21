<div class="field_container">
			
				
					<div class="row">

						<div class="col-md-4">
							<div class="form-group">
							{!!Form::label('Nombre de la Finca')!!}
							{!!Form::text('n_finca',null,['class'=>'form-control', 'placeholder'=>'Ingrese el nombre de la finca'])!!}
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
							{!!Form::label('Monto a cancelar')!!}
							{!!Form::text('monto',null,['class'=>'form-control', 'placeholder'=>'Monto Bs'])!!}
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
							{!!Form::label('Mes a cancelar')!!}
							{!!Form::select('mes_cancelado', ['Enero'=>'Enero','Febrero'=>'Febrero','Marzo'=>'Marzo','Abril'=>'Abril','Mayo'=>'Mayo','Junio'=>'Junio','Julio'=>'Julio','Agosto'=>'Agosto','Septiembre'=>'Septiembre','Octubre'=>'Octubre','Noviembre'=>'Noviembre','Diciembre'=>'Diciembre'], 'Enero',['style'=>'color:black'])!!}
							</div>
						</div>

						
					
					</div>

					<div class="row">

						<div class="col-md-12" align="center">
						<div class="form-group">
							<h5 style="color: white">Datos del Contribuyente</h5>
							</div>
						</div>

					</div>
					
					<div class="row">

						<div class="container-fluid">

							<div class="col-md-1">
								<div class="form-group">
									{!!Form::select('nac_contribuyente', ['V' => 'V', 'E' => 'E'], 'V');!!}
								</div>
							</div>

							
							<div class="col-md-5">
								<div class="form-group">
								{!!Form::text('ci_contribuyente',null,['class'=>'form-control', 'placeholder'=>'Ejm:20123456 '])!!}
								</div>
							</div>
							
					

						<div class="col-md-6">
							<div class="form-group">
							{!!Form::text('nombre_contribuyente',null,['class'=>'form-control', 'placeholder'=>'Nombre del contribuyente'])!!}
							</div>
						</div>
						
						</div>

					</div>

					<div class="row">

						<div class="col-md-12" align="center">
						<div class="form-group">
							<h5 style="color: white">Datos del Tesorero</h5>
							</div>
						</div>

					</div>


					<div class="row">

						<div class="container-fluid">

							<div class="col-md-1">
								<div class="form-group">
									{!!Form::select('nac_tesorero', ['V' => 'V', 'E' => 'E'], 'V');!!}
								</div>
							</div>

							
							<div class="col-md-5">
								<div class="form-group">
								{!!Form::text('ci_tesorero',null,['class'=>'form-control', 'placeholder'=>'Ejm:20123456 '])!!}
								</div>
							</div>
							
					

						<div class="col-md-6">
							<div class="form-group">
							{!!Form::text('nombre_tesorero',null,['class'=>'form-control', 'placeholder'=>'Nombre del tesorero'])!!}
							</div>
						</div>
						
						</div>

					</div>

					
			</div>