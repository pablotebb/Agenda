@extends('admin.template.main')

@section('title', 'Editar usuario ' . $user->nombre)

@section('content')


	{!! Form::open(['route' => ['admin.users.update', $user],
	                'method' => 'PUT']) !!}

		<div class="form-group">
			{!! Form::label('nombre', 'Nombre') !!}
			{!! Form::text('nombre',
			                $user->nombre,
			                ['class' => 'form-control',
			                 'placeholder' => 'Nombre completo',
			                 'required']) !!}
			            {{--
							$user->name, sería el valor del campo a mostrar
							form-control es la clase de Bootstrp
			            --}}
		</div>

		<div class="form-group">
			{!! Form::label('email', 'Correo Electrónico') !!}
			{!! Form::email('email',
			                $user->email,
			                ['class' => 'form-control',
			                 'placeholder' => 'example@gmai.com',
			                 'required']) !!}

		</div>

		<div class="form-group">
			{!! Form::label('type', 'Tipo') !!}
			{!! Form::select('type',
				             ['member' => 'Miembro',
			                  'admin' => 'Administrador'],
							  $user->type,
			                 ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}




@endsection
