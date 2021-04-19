<?php  
  
$tablaInscrip = DB::select('select asistencias.id, asistencias.token, clientes.nombres, asistencias.created_at 
from asistencias, clientes
where asistencias.nom_cliente = clientes.id');

?>

@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-13">
            <div class="card">
                <div class="card-header">Gestion de asistencias</div>
                    
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Asistencias guardadas</h1>
                    <br>
                    <script language="JavaScript">
                        $(document).ready(function() {
                            $('#datos').DataTable();
                        } );
                    </script>
                    <input type="text" id="searchTerm" onkeyup="doSearch()" class="form-control">

                    <table class="table table-striped table-bordered" id="datos">
                        <thead>
                        <tr>
                            <th>Token</th>
                            <th>Nombres</th>
                            <th>Fecha</th>
                            <th>detalles</th>
                        </tr>
                        </thead>

                        @foreach($tablaInscrip as $Lista)
                            <tr>
                                <td>{{ $Lista->token }}</td>
                                <td>{{ $Lista->nombres }}</td>
                                <td>{{ $Lista->created_at }}</td>
                                <td>
                                    <a href="{{ route('asistencia.show', $Lista->id) }}" class="btn btn-success">Detalles</a>    
                                    <br>
                                    <br>
                                    <form method="post" action="{{ route('asistencia.destroy', $Lista->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Borrar" class="btn btn-danger">
                                    </form>
                                </td>
                                
                            </tr>
                        @endforeach
                          
                    <tr class='noSearch hide'>
                        <td colspan="5"></td>
                    </tr>
                    </table>

                    
                    <br>  
                    <a href="/home" type="button" class="btn btn-danger">Regresar</a>
                    
                    
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection