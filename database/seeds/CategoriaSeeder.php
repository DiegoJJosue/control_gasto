<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Categorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria')->insert([
        	'cat_nombre'=>'Administrador'
        ]);
    }
}
