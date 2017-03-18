<?php

use Illuminate\Database\Seeder;
use DeliveryCartagena\Producto;

class TablaProductos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		$producto = new Producto();
		$producto->nombre = "Jack Daniel";
		$producto->descripcion = "750 ml";
		$producto->precio = "80000";
		$producto->save();
    }
}
