<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'usu_nombre'=>'Diego',
        	'usu_apellido'=>'lemaa',
        	'usu_direccion'=>'nueva aurora',
        	'usu_telefono'=>'0985924671',
        	'usu_cedula'=>'1234567898',
        	'email'=>'diegoo@gmail.com',
        	'password'=>bcrypt('1234567898'),
        	'created_at'=>date('2022-03-21'),
        	
        ]);
    }
}
