@extends('layouts.master')
@extends('layouts.admin')
@section('title', 'Editar usuarios')

@section('content')

	@include('alerts.request')
	{!!Form::model($user, ['url'=>['user/update/'.$user->id], 'method'=>'PUT'])!!}
		@include('user.forms.usr')
		{!!Form::submit('Editar', ['class' => 'btn btn-primary'])!!}
	{!!Form::close()!!}

	{!!Form::open(['url'=>['user/delete/'.$user->id], 'method'=>'DELETE'])!!}
		{!!Form::submit('Eliminar', ['class' => 'btn btn-danger'])!!}
	{!!Form::close()!!}

@stop