@extends('layouts.master')
@extends('layouts.admin')
@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif

@section('title', 'Mostrar usuarios')

@section('content')

	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Email</th>
			<th>Telefono</th>
			<th>Operaciones</th>
		</thead>
		@foreach($users as $user)
		<tbody>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
			<td>{{$user->phone}}</td>
			<td>
				<?php echo link_to('user/edit/'.$user->id, $title = 'Editar', $attributes = array('class' => 'btn btn-primary'), $secure = null); ?>				
			</td>
		</tbody>
		@endforeach
	</table>

@stop