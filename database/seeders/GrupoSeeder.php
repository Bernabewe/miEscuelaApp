<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Grupo;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grupo::create([
            'especialidad_id'   => 3,
            'clave'             => '3AMO',
            'turno'             => 1,
            'descripcion'       => 'Grupo de ofimática vespertino',
            'semestre'          => 3
        ]);
    }
}
