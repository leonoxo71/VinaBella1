@extends('admin.template.main')

@section('title', 'Lista de usuarios')

@section('content')
<a href="{{ route('Usuarios.create') }}" class="btn btn-info">Registrar nuevo usuario</a>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Apellido materno</th>
			<th>Apellido Materno</th>
			<th>Correo</th>
			<th>identificacion</th>
			<th>Nivel acesso</th>
			<th>Accion</th>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{$user->Cod_usuario }}</td>
					<td>{{$user->Nom_usuario }}</td>
					<td>{{$user->Ap_paterno }}</td>
					<td>{{$user->Ap_materno }}</td>
					<td>{{$user->Correo_electronico}}</td>
					<td>{{$user->Identificacion }}</td>
					@if($user->Nivel_acesso === '1' )
						<td>Miembro</td>
					@elseif($user->Nivel_acesso === '2' )
						<td>Administrador</td>

					@endif
					<td>
						<a href="{{ route('Usuarios.edit', $user->Cod_usuario) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a> 
						<a href="{{ route('admin.Usuarios.destroy', $user->Cod_usuario) }}" onclick="return confirm('Esta seguro de querer eliminarlo')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $users->render()!!}
@endsection