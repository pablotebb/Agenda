@extends('admin.template.main')

@section('title', 'Listado de proyectos')

@section('content')
    <a href="{{ route('admin.proyectos.create') }}"
       class="btn btn-info">
     	Registrar nuevo proyecto
    </a>
    <!-- BUSCADOR DE ZONA DE ESTUDIO -->
		{!! Form::open(['route'  => 'admin.proyectos.index',
		                 'method' => 'GET',
		                 'class'  => 'navbar-form pull-right']) !!}

    			<div class="input-group">

    				{!! Form::text('titulo',
    				                 null,
    				                 ['class'      => 'form-control',
    				                 'placeholder' => 'Buscar proyecto..',
    				                 'aria-describedby' => 'search']) !!}

    			    <span class="input-group-addon" id="search">
    			    	<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
    			    </span>
    			</div>
    {!! Form::close() !!}
    <!-- FIN DEL BUSCADOR -->
    <hr>
	<table class="table table-striped">
		<thead>
			<thead>
				<th>ID</th>
				<th>Título</th>
				<th>Idea</th>
				<th>Programadores</th>
				<th>Diseñadores</th>
        <th>Marketing</th>
			</thead>
			<tbody>
				@foreach($proyecto as $proy)
					<tr>
						<td>{{ $proy->id }}</td>
						<td>{{ $proy->titulo }}</td>
						<td>{{ $proy->idea }}</td>
						<td>{{ $proy->programadores }}</td>
						<td>{{ $proy->disenadores }}</td>
						<td>{{ $proy->marketing }}</td>
						<td>
							<a href="{{ route('admin.proyectos.edit', $proy->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
							<a href="{{ route('admin.proyectos.destroy', $proy->id) }}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
						</td>
					</tr>
				@endforeach
			</tbody>
		</thead>
	</table>
	<div class="text-center">
		{!! $proyecto->render() !!}
	</div>
@endsection
