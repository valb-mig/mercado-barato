<section>
    <div class="flex w-full gap-2 my-2 text-center justify-content-start">
        <x-button.action id="add" type="success" onclick="$('#modal_add').fadeToggle()">
            @include('components.config.icon', [ 'icon'  => 'plus' ])
        </x-button.action>  
        <x-form.input id="search" type="text" icon="magnify" placeholder="Pesquisa" livewire="true"/>
    </div>
    
    <div>
        <div class="flex w-full h-full gap-2 p-2 border border-light-1 rounded">
            @foreach ($produtos as $produto)
                <a href="/produto/{{$produto->id}}" class="no-underline text-dark-0 relative bg-light-1 p-2 rounded border border-light-2">
                    <div class="absolute top-0 right-0">
                        <span class="flex items-center justify-center p-2 rounded bg-light-0 border border-light-2 w-[40px] h-[40px]">
                            {{$produto->produto_qtd}}x
                        </span>
                    </div>
                    <div>
                        <img width="250px" class="rounded" src="{{$produto->produto_base64}}"/>
                    </div>
                    <div class="flex flex-col w-full gap-2">
                        <div class="text-[2em]">
                            {{$produto->produto_nome}}
                        </div>
                        <table class="flex border-collapse bg-light-0 p-2 rounded">
                            <tr class="mb-4">
                                <td class="text-center text-[0.9em] bg-light-1 p-1 rounded">
                                    <span class="text-[1.2em]">
                                        <b>Preço</b>
                                    </span> 
                                </td>
                                <td>
                                    <small>R$ {{number_format($produto->produto_preco / 100, 2, ',', '.')}}</small>
                                </td>
                            </tr>
                            <tr class="mb-4">
                                <td class="text-center text-[0.9em] bg-light-1 p-1 rounded">
                                    <span class="text-[1.2em]">
                                        <b>Lote</b>
                                    </span> 
                                </td>
                                <td>
                                    <small>#{{$produto->id_lote}}</small>
                                </td>
                            </tr>
                            <tr class="mb-4">
                                <td class="text-center text-[0.9em] bg-light-1 p-1 rounded">
                                    <span class="text-[1.2em]">
                                        <b>Val</b>
                                    </span>
                                </td>
                                <td>
                                    <small>{{\Carbon\Carbon::parse($produto->produto_validade)->format('d/m/Y')}}</small>
                                </td>
                            </tr>
                        </table>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="container mt-4">
            {{-- {{ $produtos->links('components.config.layout.paginator') }} --}}
        </div>
    </div>
</section>