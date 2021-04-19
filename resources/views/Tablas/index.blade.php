@extends('layouts.app')

@section('content')

<div class="container">
    <table id="task" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Fecha de nacimiento</th>
            <th>Genero</th>
            <th>Direccion</th>
            <th>Dpi</th>
            <th>Telefono</th>
        </tr>
        </thead>
    </table>
</div>

 
<script type="application/javascript">
    //$(document).ready(function() {
      //  oTable = $('#task').DataTable({
        $(function (){
            var table = $('#task').Datatable({
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('datatable.tasks') }}",
            "columns": [
                {data: 'id', name: 'id'},
                {data: 'nombres', name: 'nombres'},
                {data: 'apellidos', name: 'apellidos'},
                {data: 'fech_nac', name: 'fech_nac'},
                {data: 'genero', name: 'genero'},
                {data: 'direccion', name: 'direccion'},
                {data: 'dpi', name: 'dpi'},
                {data: 'telefono', name: 'telefono'},
            ]
        });
    });
</script>

@endsection
