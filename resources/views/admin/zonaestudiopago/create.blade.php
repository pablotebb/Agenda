@extends('admin.template.main')

@section('title', 'Agregar zona de estudio de pago')

@section('content')
	{!! Form::open(['route'  => 'admin.zonaestudiopago.store',
	               'method' => 'POST']) !!}

		<div class="form-group">
			{!! Form::label('titulo', 'Título') !!}
			{!! Form::text('titulo',
			                null,
			                ['class'      => 'form-control',
			                'placeholder' => 'título',
			                'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('descripcion', 'Descripción') !!}
			{!! Form::text('descripcion',
			                null,
			                ['class'      => 'form-control',
			                'placeholder' => 'Descripción',
			                'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('github', 'Github') !!}
			{!! Form::text('github',
			                null,
			                ['class'      => 'form-control',
			                'placeholder' => 'https://github.com/...',
			                'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('videos', 'Videos') !!}
			{!! Form::number('videos',
			                null,
			                ['class'      => 'form-control',
			                'placeholder' => 'Número de videos',
			                'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::radio('visto', 'Visto') !!}

		</div>

    <div class="form-group">
      {!! Form::label('web', 'Web') !!}
      {!! Form::number('web',
      null,
      ['class'      => 'form-control',
      'placeholder' => 'web personal',
      'required']) !!}
    </div>

		<div class="form-group">
			{!! Form::label('repaso', 'Repaso') !!}
			{!! Form::number('repaso',
			                null,
			                ['class'      => 'form-control',
			                'placeholder' => 'indique el número',
			                'required']) !!}
		</div>


		<div class="form-group">
			{!! Form::submit('Registrar',
			                 ['class' => 'btn btn-primary']) !!}
		</div>
	{!! Form::close() !!}

@endsection
