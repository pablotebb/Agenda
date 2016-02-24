@extends('admin.template.main')

@section('title', 'Editar contacto ' . $contacto->nombre)

@section('content')


	{!! Form::open(['route' => ['admin.contactos.update', $contacto],
	                'method' => 'PUT']) !!}

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
			               {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
		    </div>

  	{!! Form::close() !!}




@endsection
