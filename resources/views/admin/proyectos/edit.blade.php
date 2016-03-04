@extends('admin.template.main')

@section('title', 'Editar proyectos' . $proyecto->titulo)

@section('content')
	{!! Form::open(['route'  => ['admin.proyectos.update', $proyecto],
	               'method' => 'PUT']) !!}

    <div class="form-group">
      {!! Form::label('titulo', 'Título') !!}
      {!! Form::text('titulo',
                      null,
                      ['class'      => 'form-control',
                      'placeholder' => 'título',
                      'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('idea', 'Idea') !!}
      {!! Form::text('idea',
                      null,
                      ['class'      => 'form-control',
                      'placeholder' => 'Idea',
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
      {!! Form::label('estado', 'Estado') !!}
      {!! Form::number('estado',
                      null,
                      ['class'      => 'form-control',
                      'placeholder' => 'en curso / finalizado',
                      'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('ambito', 'Ambito') !!}
      {!! Form::number('ambito',
                      null,
                      ['class'      => 'form-control',
                      'placeholder' => 'privado / público',
                      'required'  ]) !  !}
    </div>

    <div class="form-group">
      {!! Form::radio('programadores', 'Programadores') !!}

    </div>

    <div class="form-group">
      {!! Form::radio('disenadores', 'Diseñadores') !!}

    </div>

    <div class="form-group">
      {!! Form::radio('marketing', 'Marketing') !!}

    </div>


		<div class="form-group">
			{!! Form::submit('Editar',
			                 ['class' => 'btn btn-primary']) !!}
		</div>
	{!! Form::close() !!}

@endsection
