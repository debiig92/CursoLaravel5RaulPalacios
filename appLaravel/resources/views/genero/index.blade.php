@extends('layouts.admin')

@section('content')

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
