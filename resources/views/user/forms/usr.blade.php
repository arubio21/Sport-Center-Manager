<div class="form-group">
	{!!Form::label('Nombre: ')!!}
	{!!Form::text('name', null, ['class'=>'form-control', 'placeholder'=> 'Introduzca el nombre del usuario'])!!}
</div>
<div class="form-group">
	{!!Form::label('email: ')!!}
	{!!Form::text('email', null, ['class'=>'form-control', 'placeholder'=> 'Introduzca el email del usuario'])!!}
</div>
<div class="form-group">
	{!!Form::label('Teléfono: ')!!}
	{!!Form::text('phone', null, ['class'=>'form-control', 'placeholder'=> 'Introduzca el teléfono del usuario'])!!}
</div>
<div class="input-group">	
	{!!Form::label('Tipo de usuario: ')!!}
	<?php echo Form::select('type', $types, '3', array('class' => 'form-control')); ?>
</div>