@extends('layouts.app')

@section('content')
        <header class="header">
            <div class = "home_menu">
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
<div class="form_container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="col-md-4">
                    Estás Registrado!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
