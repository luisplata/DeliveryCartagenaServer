@extends("app")

@section("contenido")
<a href="{{url('/producto/nuevo')}}" >Nuevo</a>
	@each('tarjeta', $productos, 'item')
	
@endsection