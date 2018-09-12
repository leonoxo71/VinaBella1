@extends('admin.template.main')

@section('title', 'Crear Usuario')

@section('content')

	@if(count($errors) > 0)
		<div class="alert alert-danger" role="alert">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</div>
	@endif

	{!! Form::open(['route' => 'Usuarios.store', 'method' => 'POST'])!!}
	<div class="form-group">
		{!! Form::label('Nom_usuario', 'nombre') !!}
		{!! Form::text('Nom_usuario', null, ['class'=>'form-control', 'placeholder' => 'Primer Nombre' ,'required' ]) !!}
	</div>
	
	<div class="form-group">
		{!! Form::label('Ap_paterno', 'Apellido Paterno') !!}
		{!! Form::text('Ap_paterno', null, ['class'=>'form-control', 'placeholder' => 'Apellido Paterno' ,'required' ]) !!}
	</div>

	<div class="form-group">
		{!! Form::label('Ap_materno', 'Apellido Materno') !!}
		{!! Form::text('Ap_materno', null, ['class'=>'form-control', 'placeholder' => 'Apellido Materno' ,'required' ]) !!}
	</div>

	<div class="form-group">
		{!! Form::label('telefono', 'Apellido Materno') !!}
		{!! Form::text('telefono', null, ['class'=>'form-control', 'placeholder' => '+56912345678' ,'required' ]) !!}
	</div>
	
	<div class="form-group">
		{!! Form::label('Correo_electronico', 'Correo Electronico') !!}
		{!! Form::email('Correo_electronico', null, ['class'=>'form-control', 'placeholder' => 'example@gmail.com' ,'required' ]) !!}
	</div>

	<div class="form-group">
		{!! Form::label('Identificacion', 'Identificacion') !!}
		{!! Form::text('Identificacion', null, ['class'=>'form-control', 'placeholder' => 'example: Leonoxo' ,'required' ]) !!}
	</div>

	<div class="form-group">
		{!! Form::label('password', 'Contraseña') !!}
		{!! Form::password('password', ['class'=>'form-control', 'placeholder' => '********' ,'required' ]) !!}
	</div>
	<div class="form-group">
		{!! Form::label('direccion', 'Direccion') !!}
		{!! Form::text('Direccion', null, ['class'=>'form-control', 'placeholder' => 'calle atea #569' ,'required' ]) !!}
	</div>

	<div class="form-group">
		{!! Form::label('Nivel_acceso', 'Nivel Acceso') !!}
		{!! Form::select('Nivel_acceso', [ 1 => 'Miembro', 2 => 'Administrador'], null, ['placeholder' => 'Selecciona Nivel','class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('registrar', ['class' => 'btn btn-primary']) !!}
	</div>
	{!! Form::close() !!}

@endsection