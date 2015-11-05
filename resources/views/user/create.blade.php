@extends('layouts.master')

@section('tittle', $tittle)

@section('content')
	
	@include('alerts.request')
		<?php echo Form::open(array('url' => $url, 'method' => 'POST')) ?>
	<!--{!!Form::open(['url'=> $url, 'method'=>'POST'])!!}-->
		@include($include)
		{!!Form::submit('Registrar', ['class' => 'btn btn-primary'])!!}
	{!!Form::close()!!}

@stop