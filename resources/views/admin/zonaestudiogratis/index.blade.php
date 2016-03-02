@extends('admin.template.main')

@section('title', 'Listado de cursos free')

@section('content')
    <a href="{{ route('admin.zonaestudiogratis.create') }}"
       class="btn btn-info">
     	Registrar nueva zona de estudio
    </a>
    <!-- BUSCADOR DE ZONA DE ESTUDIO -->
		{!! Form::open(['route'  => 'admin.zonaestudiogratis.index',
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
				@foreach($estudiofree as $estudio)
					<tr>
						<td>{{ $estudio->id }}</td>
						<td>{{ $estudio->titulo }}</td>
						<td>{{ $estudio->descripcion }}</td>
						<td>{{ $estudio->github }}</td>
						<td>{{ $estudio->videos }}</td>
						<td>{{ $estudio->descripcion }}</td>
						<td>
							<a href="{{ route('admin.zonaestudiogratis.edit', $estudio->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
							<a href="{{ route('admin.zonaestudiogratis.destroy', $estudio->id) }}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
						</td>
					</tr>
				@endforeach
			</tbody>
		</thead>
	</table>
	<div class="text-center">
		{!! $estudiofree>render() !!}
	</div>
@endsection
