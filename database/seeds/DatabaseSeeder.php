<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TablaUsers::class);
		$this->call(TablaProductos::class);
		$this->call(TablaCategoria::class);
    }
}

