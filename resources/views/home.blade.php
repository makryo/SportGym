@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tabla de opciones</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                <div class="jumbotron">
                    <h1 class="display-4">Bienvenido {{ Auth::user()->name }}</h1>
                    <p class="lead">Lista de opciones</p>
                    <hr class="my-4">
                    <p class="lead">

                    <div class="row">
                        <div class="col-4">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="https://i.ibb.co/hcbtVLf/pixlr-bg-result.png" alt="Card image cap">
                                    <div class="card-body">
                                    <h5 class="card-title">Registro de clientes</h5>
                                    <p class="card-text">Ingresa, lista y edita los datos de los clientes</p>
                                    <a href="{{ route('cliente.create') }}" class="btn btn-outline-primary btn-lg">Nuevo cliente</a>
                                    <br>
                                    <br>
                                    <a href="{{ route('cliente.index') }}" class="btn btn-outline-primary btn-lg">Gestionar clientes</a>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-4">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="https://i.ibb.co/Xx3sMbN/pixlr-bg-result-1.png" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Registro de asistencia</h5>
                                    <p class="card-text">Ingresa, verifica y lista los datos de la asistencia</p>
                                    <a href="{{ route('asistencia.create') }}" class="btn btn-outline-primary btn-lg">Nuevo ingreso</a>
                                    <br>
                                    <br>
                                    <a href="{{ route('asistencia.index') }}" class="btn btn-outline-primary btn-lg">Gestionar asistencias</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="https://i.ibb.co/k85HzRG/pixlr-bg-result-2.png" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Generar reportes</h5>
                                    <p class="card-text">Genere los reportes para entrega</p>
                                    <a href="{{ route('asistencia.index') }}" class="btn btn-outline-primary btn-lg">Generar informe por mes</a>
                                    <br>
                                    <br>
                                    <a href="{{ route('print') }}" class="btn btn-outline-primary btn-lg">Generar lista de clientes</a>
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                                        

                    

                    


                        
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
