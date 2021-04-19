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
                    
                        <form method="post" action="{{ route('cliente.update', $Edita->id) }}">

                            @csrf
                            @method('PATCH')
                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-6">
                                    <input type="text" name="nombres" value="{{ $Edita->nombres }}" required class="form-control">
                                    <br>
                                    <input type="text" name="apellidos" value="{{ $Edita->apellidos }}" required class="form-control">
                                    <br>
                                    <input type="date" name="fech_nac" value="{{ $Edita->fech_nac }}" required class="form-control">
                                    <br>
                                    <div class="input-group mb-3">
                                        <select name="genero" class="form-control" value="{{ $Edita->genero }}" required>
                                            <option>{{ $Edita->genero }}</option>
                                            <option>Masculino</option>
                                            <option>Femenino</option>
                                        </select>
                                    </div>
                                    <br>
                                </div>

                                <div class="col-6">
                                    <input type="text" name="direccion" value="{{ $Edita->direccion }}" required class="form-control">
                                    <br>
                                    <input type="number" name="dpi" value="{{ $Edita->dpi }}" required class="form-control">
                                    <br>
                                    <input type="number" name="telefono" value="{{ $Edita->telefono }}" required class="form-control">
                                    <br>
                                    
                                </div>
                            </div>
                            <input type="submit" value="Guardar" class="btn btn-success">
                            <a href="{{ route('cliente.index') }}" type="button" class="btn btn-warning">Regresar</a>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection