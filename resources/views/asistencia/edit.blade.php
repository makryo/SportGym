<?php
use App\cliente;
$cliente = cliente::all();
?>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Editar registro</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Actualizar datos</h1>
                    <div class="container">
                    
                        <form method="post" action="{{ route('asistencia.update', $Edita->id) }}">

                            @csrf
                            @method('PATCH')
                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-6">
                                    <input type="text" name="token" value="{{ $Edita->token }}" required class="form-control">
                                    <br>
                                    
                                </div>

                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <select name="nom_cliente" class="form-control" value="{{ $Edita->nom_cliente }}" required>
                                                @foreach($cliente as $Lista)
                                                    <option value="{{ $Lista->id }}">
                                                        {{ $Lista->nombres }}
                                                    </option>
                                                @endforeach
                                        </select>
                                    </div>
                                    <br>
                                </div>
                            </div>
                            <input type="submit" value="Guardar" class="btn btn-success">
                            <a href="{{ route('asistencia.index') }}" type="button" class="btn btn-warning">Regresar</a>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection