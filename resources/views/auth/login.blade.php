@extends('auth.auth_layout')

@section('tittle') Login @endsection

@section('content_auth')

<div id="login-container">
            <!-- Login Header -->
            <h1 class="h2 text-light text-center push-top-bottom animation-slideDown">
                <i class="fa fa-cube"></i> <strong>Bienvenido al Administrador</strong>
            </h1>
            <!-- END Login Header -->

            <!-- Login Block -->
            <div class="block animation-fadeInQuickInv">
                <!-- Login Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="page_ready_reminder.html" class="btn btn-effect-ripple btn-primary" data-toggle="tooltip" data-placement="left" title="Forgot your password?"><i class="fa fa-exclamation-circle"></i></a>
                        <a href="page_ready_register.html" class="btn btn-effect-ripple btn-primary" data-toggle="tooltip" data-placement="left" title="Create new account"><i class="fa fa-plus"></i></a>
                    </div>
                    <h2>Tu Foto.</h2>
                </div>
                <!-- END Login Title -->

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Ooops!</strong> Hay algunos problemas con su ingreso.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                <!-- Login Form -->
                <form id="form-login" action="{{ url('/auth/login') }}" method="post" class="form-horizontal">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="text" id="login-email" name="email" class="form-control" placeholder="Su correo.." value="{{ old('email') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="password" id="login-password" name="password" class="form-control" placeholder="Su contraseña..">
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-8">
                            <label class="csscheckbox csscheckbox-primary">
                                <input type="checkbox" id="login-remember-me" name="remember">
                                <span></span>
                            </label>
                            Recordarme
                        </div>
                        <div class="col-xs-4 text-right">
                            <button type="submit" class="btn btn-effect-ripple btn-sm btn-primary"><i class="fa fa-check"></i> Ingresar</button>
                        </div>
                         <a class="btn btn-link" href="{{ url('/password/email') }}">Olvido su contraseña?</a>
                    </div>
                </form>
                <!-- END Login Form -->
            </div>
            <!-- END Login Block -->
@endsection