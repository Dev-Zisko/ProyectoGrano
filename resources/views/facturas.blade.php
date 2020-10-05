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
                                <h2 class="pageheader-title">Facturas</h2>
                                <a style="margin: 0 auto; width: 150px; margin-top: 10px;" href="{{ route('facturasd') }}" class="btn btn-outline-primary"><i class="fa fa-trash"></i> Eliminar facturas</a>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">
                        <div class="row">
                            <!-- ============================================================== -->
                      
                            <!-- ============================================================== -->

                                          <!-- recent orders  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12" style="text-align: center;">
                                <div class="card">
                                    <a style="margin: 0 auto; width: 150px; margin-top: 10px;" href="{{ route('facturasr') }}" class="btn btn-outline-primary"><i class="fa fa-plus"></i> Crear factura</a>
                                    <h5 class="card-header">Facturas</h5> 
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">Mes</th>
                                                        <th class="border-0">Año</th>
                                                        <th class="border-0">Fecha de Vencimiento</th>
                                                        <th class="border-0">Piso-Apartamento</th>
                                                        <th class="border-0">Nombre y Apellido</th>
                                                        <th class="border-0">Monto</th>
                                                        <th class="border-0">Total Factura</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($users as $user)
                                                        @foreach($bills as $bill)
                                                        <tr>
                                                            @if($user->id == $bill->id_user)
                                                                <td>{{ $bill->mes }}</td>
                                                                <td>{{ $bill->año }}</td>
                                                                <td>{{ $bill->fechavencimiento }}</td>
                                                                <td>{{ $user->piso }}-{{ $user->apartamento }}</td>
                                                                <td>{{ $user->nombre }} {{ $user->apellido }}</td>
                                                                <td>{{ $bill->monto }}</td>
                                                                <td>{{ $bill->total }}</td>
                                                             @endif
                                                        </tr>
                                                        @endforeach
                                                    @endforeach
                                                    @if(count($bills) == 0)
                                                        <tr>
                                                            <td>No hay facturas</td>
                                                            <td>
                                                                registradas aún.
                                                            </td>
                                                        </tr>
                                                    @endif
                                                </tbody>
                                            </table>
                                            <br>
                                            <div>{{ $bills->links() }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end recent orders  -->
                            <!-- ============================================================== -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
@endsection