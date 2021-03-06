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
                            <dt>Nombres</dt><dd>{{ $client->nombres }}</dd>
                            <dt>Apellidos</dt><dd>{{ $client->apellidos }}</dd>
                            <dt>Fecha de nacimiento</dt><dd>{{ $client->fech_nac }}</dd>
                            <dt>Genero</dt><dd>{{ $client->genero }}</dd>
                        </div>

                        <div class="col-6">
                            <dt>Direccion</dt><dd>{{ $client->direccion }}</dd>
                            <dt>dpi</dt><dd>{{ $client->dpi }}</dd>
                            <dt>No. de telefono</dt><dd>{{ $client->telefono }}</dd>
                        </div>
                    </div>
                    </dl>
                    <br>  
                    <a href="/home" type="button" class="btn btn-warning">Inicio</a>
                    <a href="{{ route('cliente.index') }}" type="button" class="btn btn-warning">Gestion de clientes</a>
                    <a href="{{ route('cliente.edit', $client->id) }}" class="btn btn-success">Editar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection