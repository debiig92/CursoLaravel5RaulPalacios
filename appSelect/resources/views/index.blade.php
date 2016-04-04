@extends('layouts.master')

    @section('content')

    {!! Form::select('state', $states, null, ['placeholder' => 'Selecciona', 'id' => 'state']) !!}

    {!! Form::select('town', ['placeholder' => 'Selecciona'], null, ['id' => 'town']) !!}

    @endsection

