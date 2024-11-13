<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([[
            'nombre'=>'Ivan',
            'Apellido'=>'Guerra',
            'Correo'=>'Guerra@gmail.com',
            'telefono'=>'1234567891'
        ],[
            'nombre'=>'Alexis',
            'Apellido'=>'Guadarrama',
            'Correo'=>'Alexcrux@gmail.com',
            'telefono'=>'789456137'
        ],[
            'nombre'=>'Gabriel',
            'Apellido'=>'Manzano',
            'Correo'=>'Gabo@gmail.com',
            'telefono'=>'4657891322'
        ]]);
    }
}
