@extends('admin.template.main')

@section('title', 'Listado de cursos (de pago)')

@section('content')
    <a href="{{ route('admin.zonaestudiopago.create') }}"
       class="btn btn-info">
     	Registrar nueva zona de estudio (de pago)
    </a>
    <!-- BUSCADOR DE ZONA DE ESTUDIO -->
		{!! Form::open(['route'  => 'admin.zonaestudiopago.index',
		                 'method' => 'GET',
		                 'class'  => 'navbar-form pull-right']) !!}

    			<div class="input-group">

    				{!! Form::text('titulo',
    				                 null,
    				                 ['class'      => 'form-control',
    				                 'placeholder' => 'Buscar curso..',
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
				<th>Descripción</th>
				<th>Github</th>
				<th>Videos</th>
				<th>Descripción</th>
			</thead>
			<tbody>
				@foreach($estudioprivate as $estudio)
					<tr>
						<td>{{ $estudio->id }}</td>
						<td>{{ $estudio->titulo }}</td>
						<td>{{ $estudio->descripcion }}</td>
						<td>{{ $estudio->github }}</td>
						<td>{{ $estudio->videos }}</td>
						<td>{{ $estudio->descripcion }}</td>
						<td>
							<a href="{{ route('admin.zonaestudiopago.edit', $estudio->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
							<a href="{{ route('admin.zonaestudiopago.destroy', $estudio->id) }}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
						</td>
					</tr>
				@endforeach
			</tbody>
		</thead>
	</table>
	<div class="text-center">
		{!! $estudioprivate->render() !!}
	</div>
@endsection
