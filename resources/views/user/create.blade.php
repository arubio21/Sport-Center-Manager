@extends('layouts.master')

@section('titel', 'Crear usuario')

@section('content')
	
	@include('alerts.request')
	{!!Form::open(['url'=>'user/store', 'method'=>'POST'])!!}
		@include('user.forms.usr')
		{!!Form::submit('Registrar', ['class' => 'btn btn-primary'])!!}
	{!!Form::close()!!}

@stop