@if(count($errors) > 0)
	{{--
	    la clase la sacamos de aquí:
		http://getbootstrap.com/components/#alerts
	--}}
	<div class="alert alert-danger" role="alert">
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
		  @endforeach
		</ul>
	</div>
@endif
