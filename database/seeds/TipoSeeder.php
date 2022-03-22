<?php

use Illuminate\Database\Seeder;


class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
 		
 		 {
        DB::table('tipo')->insert([
        	'tip_nombre'=>'Viveres'
        ]);


        DB::table('tipo')->insert([
        	'tip_nombre'=>'Ocio'
        ]);


        DB::table('tipo')->insert([
        	'tip_nombre'=>'Estudio'
        ]);


        DB::table('tipo')->insert([
        	'tip_nombre'=>'Juegos'
        ]);

    }
}
