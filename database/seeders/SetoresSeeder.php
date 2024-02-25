<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SetoresSeeder extends Seeder
{
    use WithoutModelEvents;
    
    public function run(): void
    {
        $setores = [
            [
                'nome'  => 'Frutas',
                'icone' => 'fruit',
                'capacidade' => 100
            ], 
            [
                'nome'  => 'Limpeza',
                'icone' => 'clean',
                'capacidade' => 100
            ], 
            [
                'nome'  => 'Frios',
                'icone' => 'freeze',
                'capacidade' => 100
            ]
        ];
            
        foreach($setores as $setor)
        {
            DB::table('mb_setores')->insert([
                'setor_nome'       => $setor['nome'],
                'setor_gestor'     => 0,
                'setor_icone'      => $setor['icone'],
                'setor_capacidade' => $setor['capacidade'],
                'updated_at'       => now(),
                'created_at'       => now()
            ]);
        }
    }
}
