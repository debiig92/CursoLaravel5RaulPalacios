@extends('layouts.admin')

@section('content')
@include('genero.modal')
<div class="alert alert-success alert-dismissible" role="alert" id="msj-success" style="display:none;">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Genero Actualizado Correctamente.</strong>
</div>

<table class="table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Operaciones</th>
        </tr>
    </thead>
    <tbody id="datos">

    </tbody>
</table>

@stop

@section('scripts')
    {!!Html::script('js/script2.js')!!}
@stop
