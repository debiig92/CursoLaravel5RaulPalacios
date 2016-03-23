@extends('layouts.admin')

@section('content')
	
	@include('alerts.request')

	<h2>Crear Usuario</h2>

	{!!Form::open(array('route' => 'usuario.store', 'mothod' => 'POST'))!!}
		@include('usuario.forms.usr')

		{!!Form::submit('Registrar', array('class' => 'btn btn-primary'))!!}

	{!!Form::close()!!}

@stop