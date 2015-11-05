@extends('layouts.master')

@section('title', 'Editar usuarios')

@section('content')

	@include('alerts.request')
	{!!Form::model($type, ['url'=>['user/type/update/'.$type->id], 'method'=>'PUT'])!!}
		@include('user.forms.type')
		{!!Form::submit('Editar', ['class' => 'btn btn-primary'])!!}
	{!!Form::close()!!}

	{!!Form::open(['url'=>['user/type/delete/'.$type->id], 'method'=>'DELETE'])!!}
		{!!Form::submit('Eliminar', ['class' => 'btn btn-danger'])!!}
	{!!Form::close()!!}

@stop