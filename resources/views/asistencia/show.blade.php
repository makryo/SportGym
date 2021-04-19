@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Detalles de registro</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Confirmar datos registrados</h1>
                    
                    <dl>
                    <div class="row">
                        <div class="col-6">
                            <dt>Token</dt><dd>{{ $asis->token }}</dd>
                            <dt>id cliente</dt><dd>{{ $asis->nom_cliente }}</dd>
                            
                        </div>

                        <div class="col-6">
                            <dt>Fecha y Hora</dt><dd>{{ $asis->created_at }}</dd>
                            
                        </div>
                    </div>
                    </dl>
                    <br>  
                    <a href="/home" type="button" class="btn btn-warning">Inicio</a>
                    <a href="{{ route('asistencia.index') }}" type="button" class="btn btn-warning">Gestion de asistencias</a>
                    <a href="{{ route('asistencia.edit', $asis->id) }}" class="btn btn-success">Editar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection