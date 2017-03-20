<?php

use Illuminate\Database\Seeder;
use DeliveryCartagena\Categoria;

class TablaCategoria extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		$categoria = new Categoria();
		$categoria->nombre = "root";
		$categoria->descripcion = "Root";
		$categoria->padre = -1;
		$categoria->save();
    }
}
