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
                <div class="card-header">Asignar token a Cliente</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Formulario</h1>
                    <div class="container">
                        
                    <!-- -->
                        <form method="post" action="{{ route('asistencia.store') }}">
                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-6">
                                    <br>
                                    <label>Token</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="token" required>
                                    </div>
                                   
                                    
                                   
                                </div>

                                <div class="col-6">
                                <br>
                                    <label>Cliente</label>
                                        <div class="input-group mb-3">
                                            <select name="nom_cliente" class="input-group mb-3 form-control" required>
                                                @foreach($cliente as $Lista)
                                                    <option value="{{ $Lista->id }}">
                                                        {{ $Lista->nombres }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                </div>
                            </div>
                            <br>
                            <input type="submit" value="Guardar" class="btn btn-primary">
                            <a href="/home" type="button" class="btn btn-secondary">Regresar</a>

                            
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Ayuda</button>
                            
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Informacion</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>En el formulario ingrese los datos solicitados, en algunos campos se debe introducir 
                                        los datoscorrectos de lo contrario el sistema no dejara ingresarlo, asi como tampoco 
                                        podra dejar un campo vacio.</p>
                                    </div>
                                    <div class="modal-footer">
                                        
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                           
                        </form>      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection