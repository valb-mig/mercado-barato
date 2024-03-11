@props(['id', 'action', 'title'])

<div id="modal_{{$id}}" class="fixed inset-0 z-50 items-center justify-center hidden bg-black bg-opacity-50 backdrop-blur-[4px]">
    <div class="flex h-full justify-center items-center">
        <div class="bg-white border-2 border-gray-300 rounded">
            <div id="modal_header" class="flex items-center justify-between w-full bg-gray-100 p-2">
                <span id="title" class="flex items-center space-x-2">
                    @include('components.config.icon', [
                        'icon'  => "user",
                        'width' => "20px"
                    ])
                    {{$title}}
                </span>
            </div>
            <form action="{{$action}}" method="post" class="flex flex-col gap-2 p-2" enctype="multipart/form-data">
                @csrf
                <div id="modal_body" class="flex flex-col gap-2">
                    {{$slot}}
                </div>

                <hr>

                <div id="modal_footer" class="flex justify-end gap-2">
                    
                    <x-button.text
                        type="button"
                        onclick="$('#modal_{{$id}}').fadeToggle()"
                    >
                        Cancelar
                    </x-button.text>

                    <x-button.text
                        type="submit"
                        style="success"
                    >
                        Enviar
                    </x-button.text>

                </div>
            </form>
        </div>
    </div>
</div>
