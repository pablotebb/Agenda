@extends('admin.template.main')

@section('title', 'Crear Usuario')

@section('content')



    {{--
		Para el formulario vamos a utilizar el paquete
	    que bajamos con Composer: laravel.collective

	    Explicación del código que emplea:

		\{\!\! \!\!\} = \<\?php \?>  (simplemente se aplica)
		\{\{ \}\}   = \<\?php echo ""; \?> (se visualiza)
			(quitarle los \, los empleo porque en cuando
			el interpretador de Php ejecuta este comentario
			da error)

	--}}


	{{--
		Para ver la ruta que queremos, aplicamos desde
		consola: php artisan route:list. En este caso
		queremos la que pone como método POST, la de
		guardar formulario (store), y vemos que esa
		ruta se llama admin.users.store
	--}}

	{!! Form::open(['route' => 'admin.contactos.store',
	                'method' => 'POST']) !!}

		<div class="form-group">
			{!! Form::label('nombre', 'Nombre') !!}
			{!! Form::text('nombre',
			                null,
			                ['class' => 'form-control',
			                 'placeholder' => 'Nombre',
			                 'required']) !!}
			            {{--
							null sería el valor por defecto.
							form-control es la clase de Bootstrp
			            --}}
		</div>

		<div class="form-group">
			{!! Form::label('apellidos', 'Apellidos') !!}
			{!! Form::text('apellidos',
			                null,
			                ['class' => 'form-control',
			                 'placeholder' => 'Apellidos',
			                 'required']) !!}

		</div>

		<div class="form-group">
			{!! Form::label('profesion', 'Profesión') !!}
			{!! Form::text('profesion',
			                   ['class' => 'form-control',
			                    'placeholder' => 'Profesión',
			                    'required']) !!}

		</div>

		<div class="form-group">
			{!! Form::label('telefono', 'Teléfono') !!}
			{!! Form::number('telefono',
			                   ['class' => 'form-control',
			                    'placeholder' => 'Teléfono',
			                    'required']) !!}

		</div>

    <div class="form-group">
      {!! Form::label('direccion', 'Dirección') !!}
      {!! Form::text('direccion',
      ['class' => 'form-control',
      'placeholder' => 'Dirección',
      'required']) !!}

    </div>

    <div class="form-group">
      {!! Form::label('email', 'Email') !!}
      {!! Form::email('email',
      ['class' => 'form-control',
      'placeholder' => 'Email',
      'required']) !!}

    </div>

    <div class="form-group">
      {!! Form::label('linkedln', 'Linkedln') !!}
      {!! Form::text('linkedln',
      ['class' => 'form-control',
      'placeholder' => 'Linkedln',
      'required']) !!}

    </div>

    <div class="form-group">
      {!! Form::label('twitter', 'Twitter') !!}
      {!! Form::text('twitter',
      ['class' => 'form-control',
      'placeholder' => 'Twitter',
      'required']) !!}

    </div>

    <div class="form-group">
      {!! Form::label('facebook', 'Facebook') !!}
      {!! Form::text('facebook',
      ['class' => 'form-control',
      'placeholder' => 'Facebook',
      'required']) !!}

    </div>

    <div class="form-group">
      {!! Form::label('web', 'Web') !!}
      {!! Form::text('web',
      ['class' => 'form-control',
      'placeholder' => 'Web',
      'required']) !!}

    </div>

    <div class="form-group">
      {!! Form::label('github', 'Github') !!}
      {!! Form::text('github',
      ['class' => 'form-control',
      'placeholder' => 'Github',
      'required']) !!}

    </div>


		<div class="form-group">
			{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}




@endsection
