@extends('layouts.master')

@section('title', 'Editar usuarios')

@section('content')

	@include('alerts.request')
	{!!Form::model($user, ['url'=>['user', $user->id], 'method'=>'PUT'])!!}
		@include('user.forms.usr')
		{!!Form::submit('Editar', ['class' => 'btn btn-primary'])!!}
	{!!Form::close()!!}

	{!!Form::open(['url'=>['user', $user->id], 'method'=>'DELETE'])!!}
		{!!Form::submit('Eliminar', ['class' => 'btn btn-danger'])!!}
	{!!Form::close()!!}

@stop