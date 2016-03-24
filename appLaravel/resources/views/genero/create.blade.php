@extends('layouts.admin')

@section('content')

    <h2>Creacion de Generos</h2>

    {!!Form::open()!!}

        <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong> Registro Agragado Correctamente</strong>
        </div>

        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

        @include('genero.form.genero')

        {!!link_to('#', $title = 'Registrar', $attributes = ['id' => 'registro', 'class' => 'btn btn-primary'], $secure = null)!!}

    {!!Form::close()!!}

@stop

@section('scripts')
    {!!Html::script('js/script.js')!!}
@stop
