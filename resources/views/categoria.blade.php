@extends("app")

@section("contenido")
<a href="{{url('/categoria/nuevo')}}" >Nuevo</a>
	@each('tarjeta', $categorias, 'item')
	
@endsection