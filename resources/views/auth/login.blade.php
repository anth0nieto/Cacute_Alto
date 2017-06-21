@extends('layouts.app')

@section('content')
<div class="form_container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Iniciar Sesión</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4" style="color:black"><h5>Correo Electrónico</h5></label>
                            
                            <div class="col-md-6">
                                
                                <div class="input-group">
                                <span class="input-group-addon" id="sizing-addon2">@</span>
                                <input id="email" type="email" name="email" class="form-control" placeholder="Email" aria-describedby="sizing-addon2" value="{{ old('email') }}" required autofocus>
                                </div>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4" style="color:black"><h5>Contraseña</h5></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <div class="checkbox">
                                    <label style="color:black" style="size:10px">
                                        <input type="checkbox" name="remember"> Recordar
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <br><br><button type="submit" class="btn btn-primary">
                                    Iniciar Sesión
                                </button>

                                <a id ="forget" class="btn" style="color:blue" href="{{ url('/password/reset') }}">
                                    ¿Olvidó su Contraseña?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
