<?php

namespace DeliveryCartagena\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use DeliveryCartagena\Producto;
use DeliveryCartagena\Categoria;
use DeliveryCartagena\Producto_Categoria;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$arrayDatabase = Producto_Categoria::getAll();
		//dd($arrayDatabase);
		//para hacer ehere
		/*
		$data = array_where($data, function ($key, $value) {
			return is_string($value);
		});
		
		foreach($arrayDatabase as $tupla){
			
		}
		*/
        return view("productos",["productos"=>$arrayDatabase]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view("producto.nuevo",["categorias"=>Categoria::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$producto = new Producto();
		$producto->nombre = $request->input("nombre");
		$producto->descripcion = $request->input("descripcion");
		$producto->precio = $request->input("precio");
		
		//dd($request->input("categorias_id"));
		
		if(Producto_Categoria::Guardar($producto,$request->input("categorias_id"))){
			return redirect('/producto');
		}else{
			return "No guardo";
		}	
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
