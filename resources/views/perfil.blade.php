@extends('layouts.dashboard')

@section('menu')
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('main') }}"><i class="fa fa-fw fa-file-alt"></i>Ver pagos y facturas</a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('perfil') }}"><i class="fa fa-fw fa-user-circle"></i>Editar Perfil</a>
    </li>
@endsection

@section('content')
<!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 style="text-align: center;" class="pageheader-title">Editar perfil</h2>
                                <h4 style="text-align: center; color: #7F0000;">Si no quiere cambiar su contraseña, deje ese campo vacío.</h4>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">
                        <div class="row">
                        <form style="margin: 0 auto;" class="form-login" method="POST" action="{{ route('perfil') }}">
                        @csrf
                        <div class="card-header card-header-primary text-center">
                          <div class="social-line">

                            <div class="form-group{{ $errors->has('cedula') ? ' has-error' : '' }}">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                        <i style="color: #4267FF;" class="fa fa-fw fa-id-card"></i>
                                        </span>
                                    </div>
                                    <input id="cedula" name="cedula" type="number" class="form-control" placeholder="Cédula..." value="{{ Auth::user()->cedula }}" min="0" required>
                                    @if ($errors->has('cedula'))
                                        <span class="help-block">
                                            <strong style="color: red;">{{ $errors->first('cedula') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                        <i style="color: #4267FF;" class="fa fa-fw fa-user"></i>
                                        </span>
                                    </div>
                                    <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Nombre..." value="{{ Auth::user()->nombre }}" required>
                                    @if ($errors->has('nombre'))
                                        <span class="help-block">
                                            <strong style="color: red;">{{ $errors->first('nombre') }}</strong>
                                        </span>
                                    @endif
                                    <span class="input-group-addon">_</span>
                                    <input id="apellido" name="apellido" type="text" class="form-control" placeholder="Apellido..." value="{{ Auth::user()->apellido }}" required>
                                    @if ($errors->has('apellido'))
                                        <span class="help-block">
                                            <strong style="color: red;">{{ $errors->first('apellido') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                        <i style="color: #4267FF;" class="fa fa-fw fa-phone"></i>
                                        </span>
                                    </div>
                                    <input id="telefono" name="telefono" type="number" class="form-control" placeholder="Teléfono..." value="{{ Auth::user()->telefono }}" min="0" required>
                                    @if ($errors->has('telefono'))
                                        <span class="help-block">
                                            <strong style="color: red;">{{ $errors->first('telefono') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                        <i style="color: #4267FF;" class="fa fa-fw fa-envelope"></i>
                                        </span>
                                    </div>
                                    <input id="email" name="email" type="email" class="form-control" placeholder="Correo Electrónico..." value="{{ Auth::user()->email }}" required>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong style="color: red;">{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('piso') ? ' has-error' : '' }}">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                        <i style="color: #4267FF;" class="fa fa-fw fa-home"></i>
                                        </span>
                                    </div>
                                    <input id="piso" name="piso" type="number" class="form-control" placeholder="Piso..." value="{{ Auth::user()->piso }}" min="0" required>
                                    @if ($errors->has('piso'))
                                        <span class="help-block">
                                            <strong style="color: red;">{{ $errors->first('piso') }}</strong>
                                        </span>
                                    @endif
                                    <span class="input-group-addon">_</span>
                                    <input id="apartamento" name="apartamento" type="number" class="form-control" placeholder="Apartamento..." value="{{ Auth::user()->apartamento }}" min="0" required>
                                    @if ($errors->has('apartamento'))
                                        <span class="help-block">
                                            <strong style="color: red;">{{ $errors->first('apartamento') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                        <i style="color: #4267FF;" class="fa fa-fw fa-lock"></i>
                                        </span>
                                    </div>
                                    <input id="password" name="password" type="password" class="form-control" placeholder="Contraseña..." value="{{ old('password-confirm') }}">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong style="color: red;">{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                          </div>
                        </div>
                        <div class="footer text-center">
                            <button type="submit" class="btn btn-outline-primary">Guardar cambios</button>
                        </div>
                      </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
@endsection