@extends('layouts.admin')

@section('content')

	{!!Form::open(array('route' => 'usuario.store', 'mothod' => 'POST'))!!}
		@include('usuario.forms.usr')

		{!!Form::submit('Registrar', array('class' => 'btn btn-primary'))!!}

	{!!Form::close()!!}

@stop