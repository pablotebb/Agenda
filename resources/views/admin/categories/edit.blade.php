@extends('admin.template.main')

@section('title', 'Editar categoria' . $category->categorianombre)

@section('content')
	{!! Form::open(['route' => ['admin.categories.update', $category],
	               'method' => 'PUT']) !!}
	    <div class="form-group">
			{!! Form::label('name', 'Nombre') !!}
			{!! Form::text('categorianombre',
							$category->categorianombre,
							['class' => 'form-control',
							 'placeholder' => 'Nombre de la categoria',
							 'required']) !!}
	    </div>

	    <div class="form-group">
			{!! Form::submit('Editar',
			                ['class' => 'btn btn-primary']) !!}
	    </div>

	{!! Form::close() !!}
@endsection