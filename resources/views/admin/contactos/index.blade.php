@extends('admin.template.main')

@section('title', 'Listado de contactos')

@section('content')
    <a href="{{ route('admin.contactos.create') }}" class="btn btn-info">
		Registrar un nuevo contacto
	</a>
	<hr>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Apellidos</th>
			<th>email</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($contactos as $contacto)
				<tr>
					<td>{{ $contacto->id }}</td>
					<td>{{ $contacto->nombre }}</td>
					<td>{{ $contacto->apellidos }}</td>
					<td>{{ $contacto->email }}</td>
					<td>
						<a href="{{ route('admin.contactos.edit', $contacto->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
						<a href="{{ route('admin.contactos.destroy', $contacto->id) }}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">
		{!! $contactos->render() !!}
	</div>
@endsection
