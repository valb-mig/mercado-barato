<?php

namespace App\Livewire\Pages\Setor;
use App\Models\Produtos;

use Livewire\Component;
 
class SearchItems extends Component
{
    public  $search = "";
    private $id_setor;

    public function mount($id) 
    {
        $this->id_setor = $id;
        session(['id_setor' => $id]);
    }

    public function render() 
    {
        $this->id_setor = session('id_setor', $this->id_setor);

        $produtos = Produtos::where('id_setor', $this->id_setor)->get();

        if(strlen($this->search) > 0)
        {
            $produtos = Produtos::where('id_setor', $this->id_setor)
            ->where('produto_nome', 'like', '%' . $this->search . '%')
            ->get();
        }

        return view('livewire.pages.setor.search-items', [
            'produtos' => $produtos
        ]);
    }
}