@extends('admin.template.main')

@section('title', 'Editar Usuario')

@section('content')

	{!! Form::open(['route' => ['Usuarios.update', $user], 'method' => 'POST'])!!}
	@method('PUT')
	<div class="form-group">
		{!! Form::label('Nom_usuario', 'nombre') !!}
		{!! Form::text('Nom_usuario', $user->Nom_usuario, ['class'=>'form-control', 'placeholder' => 'Primer Nombre' ,'required' ]) !!}
	</div>
	
	<div class="form-group">
		{!! Form::label('Ap_paterno', 'Apellido Paterno') !!}
		{!! Form::text('Ap_paterno', $user->Ap_paterno, ['class'=>'form-control', 'placeholder' => 'Apellido Paterno' ,'required' ]) !!}
	</div>

	<div class="form-group">
		{!! Form::label('Ap_materno', 'Apellido Materno') !!}
		{!! Form::text('Ap_materno', $user->Ap_materno, ['class'=>'form-control', 'placeholder' => 'Apellido Materno' ,'required' ]) !!}
	</div>

	<div class="form-group">
		{!! Form::label('telefono', 'Apellido Materno') !!}
		{!! Form::text('telefono', $user->telefono, ['class'=>'form-control', 'placeholder' => '+56912345678' ,'required' ]) !!}
	</div>
	
	<div class="form-group">
		{!! Form::label('Correo_electronico', 'Correo Electronico') !!}
		{!! Form::email('Correo_electronico', $user->Correo_electronico, ['class'=>'form-control', 'placeholder' => 'example@gmail.com' ,'required' ]) !!}
	</div>

	<div class="form-group">
		{!! Form::label('Identificacion', 'Identificacion') !!}
		{!! Form::text('Identificacion', $user->Identificacion, ['class'=>'form-control', 'placeholder' => 'example: Leonoxo' ,'required' ]) !!}
	</div>

	<div class="form-group">
		{!! Form::label('password', 'Contraseña') !!}
		{!! Form::password('password', $user->password, ['class'=>'form-control', 'placeholder' => '********' ,'required' ]) !!}
	</div>
	<div class="form-group">
		{!! Form::label('direccion', 'Direccion') !!}
		{!! Form::text('Direccion', $user->Direccion, ['class'=>'form-control', 'placeholder' => 'calle atea #569' ,'required' ]) !!}
	</div>

	<div class="form-group">
		{!! Form::label('Nivel_acceso', 'Nivel Acceso') !!}
		{!! Form::select('Nivel_acceso', [ 1 => 'Miembro', 2 => 'Administrador'], $user->Nivel_acesso, ['placeholder' => 'Selecciona Nivel','class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
	</div>
	{!! Form::close() !!}

@endsection
