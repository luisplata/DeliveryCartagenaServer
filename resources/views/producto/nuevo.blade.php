@extends("app")

@section("contenido")
	{!! Form::open(['url' => '/producto/nuevo/crear']) !!}
		{{Form::label('nombre', 'Nombre')}}
		{{Form::text('nombre')}}
		<br/>
		{{Form::label('descripcion', 'Descripcion')}}
		{{Form::text('descripcion')}}
		<br/>
		{{Form::label('precio', 'Precio')}}
		{{Form::number('precio')}}
		<br/>
		<select name="categorias_id">
			@foreach ($categorias as $categoria)
				<option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
			@endforeach
		</select>
		<br/>
		{{Form::submit('Guardar')}}
	{!! Form::close() !!}
@endsection