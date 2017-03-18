@extends("app")

@section("contenido")
	{!! Form::open(['url' => '/categoria/nuevo/crear']) !!}
		{{Form::label('nombre', 'Nombre')}}
		{{Form::text('nombre')}}
		<br/>
		{{Form::label('descripcion', 'Descripcion')}}
		{{Form::text('descripcion')}}
		<br/>
		<select name="padre">
			<option value="-1"> </option>
			@foreach ($categorias as $categoria)
				<option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
			@endforeach
		</select>
		<br/>
		{{Form::submit('Guardar')}}
	{!! Form::close() !!}
@endsection