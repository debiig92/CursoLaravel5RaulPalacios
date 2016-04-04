@extends('layouts.master')

    @section('content')

    {!! Form::select('state', $states) !!}

    {!! Form::select('town') !!}

    @endsection

