<?php

namespace DeliveryCartagena;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use DeliveryCartagena\Producto;
use DeliveryCartagena\Categoria;

class Producto_Categoria extends Model
{
    //
	protected $table = 'productos_categorias';
	
	public static function Guardar($producto, $categorias){
		DB::beginTransaction();
		try{
			//Se insertan en la tabla producto, y despues a la tabla productos_categorias
			
			if($producto->save()){
				//se guardo, ahora falta la otra tabla
				foreach($categorias as $categoria){
					$inventario = new Producto_Categoria();
					$inventario->productos_id = $producto->id;
					$inventario->categorias_id = $categoria;
					$inventario->save();
				}
			}
			DB::commit();
			return TRUE;
	 	}catch(\Exception $e){
		   DB::rollBack();
		   echo $e->getMessage();
		   return FALSE;
		}
        
	}
	
	public static function getAll(){
		$productos = DB::table('productos_categorias')
            ->join('productos', 'productos.id', '=', 'productos_categorias.productos_id')
			->join('categorias', 'categorias.id', '=', 'productos_categorias.categorias_id')
			//->groupBy('productos.id')
            ->select('productos.*', "categorias.id as categoria_id")
            ->get();
		return $productos;
	}
}
