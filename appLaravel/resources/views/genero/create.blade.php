@extends('layouts.admin')

@section('content')

    <h2>Creacion de Generos</h2>

    {!!Form::open()!!}

        @include('alerts.successAjax')
        @include('alerts.errorAjax')      

        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

        @include('genero.form.genero')

        {!!link_to('#', $title = 'Registrar', $attributes = ['id' => 'registro', 'class' => 'btn btn-primary'], $secure = null)!!}

    {!!Form::close()!!}

@stop

@section('scripts')
    {!!Html::script('js/script.js')!!}
@stop
