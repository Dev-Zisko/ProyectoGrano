@extends('layouts.dashboard')

@section('menu')
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('categorias') }}"><i class="fa fa-fw fa-bars"></i>Categorías</a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('gastos') }}"><i class="fa fa-fw fa-balance-scale"></i>Gastos</a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('facturas') }}"><i class="fa fa-fw fa-file-alt"></i>Facturas</a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('main') }}"><i class="fa fa-fw fa-dollar-sign"></i>Pagos</a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('usuarios') }}"><i class="fa fa-fw fa-user-circle"></i>Usuarios</a>
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
                                <h2 style="text-align: center;" class="pageheader-title">Editar Gasto</h2>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">
                        <div class="row">
                        <form style="margin: 0 auto;" class="form-login" method="POST">
                        @csrf
                        <div class="card-header card-header-primary text-center">
                          <div class="social-line">

                            <div class="form-group{{ $errors->has('categoria') ? ' has-error' : '' }}">
                                <label class="col-md-12 control-label" style="text-align: center;">Categoría del gasto</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                        <i style="color: #4267FF;" class="fa fa-fw fa-bars"></i>
                                        </span>
                                    </div>
                                    <select type="text" id="categoria" name="categoria" class="form-control">
                                        @foreach($categories as $category)
                                            @if($category->id == $expense->id_category)
                                                <option value="{{ $category->id }}" selected>{{ $category->nombre }}</option>
                                            @endif
                                            @if($category->id != $expense->id_category)
                                                <option value="{{ $category->id }}">{{ $category->nombre }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                        <i style="color: #4267FF;" class="fa fa-fw fa-balance-scale"></i>
                                        </span>
                                    </div>
                                    <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Nombre del gasto..." value="{{ $expense->nombre }}" required>
                                    @if ($errors->has('nombre'))
                                        <span class="help-block">
                                            <strong style="color: red;">{{ $errors->first('nombre') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('monto') ? ' has-error' : '' }}">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                        <i style="color: #4267FF;" class="fa fa-fw fa-dollar-sign"></i>
                                        </span>
                                    </div>
                                    <input id="monto" name="monto" type="number" class="form-control" placeholder="Monto del gasto..." min="0" step="any" value="{{ $expense->monto }}" required>
                                    @if ($errors->has('monto'))
                                        <span class="help-block">
                                            <strong style="color: red;">{{ $errors->first('monto') }}</strong>
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