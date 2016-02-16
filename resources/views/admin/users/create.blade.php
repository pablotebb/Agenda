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

	{!! Form::open(['route' => 'admin.users.store',
	                'method' => 'POST']) !!}

		<div class="form-group">
			{!! Form::label('name', 'Nombre') !!}
			{!! Form::text('name',
			                null,
			                ['class' => 'form-control',
			                 'placeholder' => 'Nombre completo',
			                 'required']) !!}
			            {{--
							null sería el valor por defecto.
							form-control es la clase de Bootstrp
			            --}}
		</div>

		<div class="form-group">
			{!! Form::label('email', 'Correo Electrónico') !!}
			{!! Form::email('email',
			                null,
			                ['class' => 'form-control',
			                 'placeholder' => 'example@gmail.com',
			                 'required']) !!}

		</div>

		<div class="form-group">
			{!! Form::label('password', 'Contraseña') !!}
			{!! Form::password('password',
			                   ['class' => 'form-control',
			                    'placeholder' => '**************',
			                    'required']) !!}

		</div>

		<div class="form-group">
			{!! Form::label('type', 'Tipo') !!}
			{!! Form::select('type',
				             ['member' => 'Miembro',
							  'admin' => 'Administrador'],
							  null,
			                 ['class' => 'form-control',
			                 'placeholder' => 'Seleccione una opción...',
			                 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}




@endsection