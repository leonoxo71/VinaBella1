@extends('admin.template.main')

@section('title', 'Crear Cliente')

@section('content')

	{!! Form::open(['route' => 'Clientes.store', 'method' => 'POST'])!!}
  <div class="form-group">
		{!! Form::label('Tipo_documento', 'Tipo Documento') !!}
		{!! Form::select('Tipo_documento', [ 'carnet' => 'carnet', 'pasaporte' => 'pasaporte'], null, ['placeholder' => 'Tipo documento','class'=>'form-control']) !!}
	</div>

  <div class="form-group">
		{!! Form::label('Nro_doc', 'Nroº documento') !!}
		{!! Form::text('Nro_doc', null, ['class'=>'form-control', 'placeholder' => '1234569789' ,'required' ]) !!}
	</div>

	<div class="form-group">
		{!! Form::label('Nombre', 'nombre') !!}
		{!! Form::text('Nombre', null, ['class'=>'form-control', 'placeholder' => 'Primer Nombre' ,'required' ]) !!}
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
		{!! Form::label('Telefono', 'Telefono') !!}
		{!! Form::text('Telefono', null, ['class'=>'form-control', 'placeholder' => '+56912345678' ,'required' ]) !!}
	</div>

	<div class="form-group">
		{!! Form::label('Correo_electronico', 'Correo Electronico') !!}
		{!! Form::email('Correo_electronico', null, ['class'=>'form-control', 'placeholder' => 'example@gmail.com' ,'required' ]) !!}
	</div>

	<div class="form-group">
		{!! Form::label('Calle_res', 'Calle Residencia') !!}
		{!! Form::text('Calle_res') !!}
	</div>

	<div class="form-group">
		{!! Form::submit('registrar', ['class' => 'btn btn-primary']) !!}
	</div>
	{!! Form::close() !!}

@endsection
