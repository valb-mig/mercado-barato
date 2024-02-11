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
        $setores = ['Frutas', 'Limpeza', 'Frios'];
            
        foreach($setores as $setor)
        {
            DB::table('mb_setores')->insert([
                'setor_nome'   => $setor,
                'setor_gestor' => 0,
                'updated_at'   => now(),
                'created_at'   => now()
            ]);
        }
    }
}
