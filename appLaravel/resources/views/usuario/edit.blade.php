@extends('layouts.admin')

@section('content')

	{!!Form::model($user, array('route' => ['usuario.update', $user->id], 'method' => 'PUT'))!!}
		
		@include('usuario.forms.usr')

		{!!Form::submit('Editar', array('class' => 'btn btn-primary'))!!}

	{!!Form::close()!!}

	{!!Form::open(array('route' => ['usuario.destroy', $user->id], 'method' => 'DELETE'))!!}

		{!!Form::submit('Eliminar', array('class' => 'btn btn-danger'))!!}

	{!!Form::close()!!}

@stop