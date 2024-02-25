@props(['id', 'action', 'title'])

<div id="modal_{{$id}}" class="modal bg-[#00000055]">
    <div class="modal-dialog-centered d-flex justify-content-center">
        <div class="bg-light-0 border-2 border-light-1 rounded">
            <div id="modal_header" class="d-flex p-1 align-items-center justify-content-between w-100 bg-light-1">
                <span id="title" class="d-flex gap-2">
                    @include('components.config.icon', [
                        'icon'  => "user",
                        'width' => "20px"
                    ])
                    {{$title}}
                </span>
                <button class="btn btn-default" onclick="$('#modal_add').fadeToggle()">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <form action="{{$action}}" method="post" class="d-flex flex-column gap-2 p-2">
                @csrf
                <div id="modal_body" class="d-flex flex-column gap-2">
                    {{$slot}}
                </div>

                <hr>

                <div id="modal_footer" class="d-flex justify-content-end gap-2">
                    <button class="btn btn-default" type="button" onclick="$('#modal_add').fadeToggle()">
                        <i></i>Cancelar
                    </button>
                    <button class="btn btn-success" type="submit">
                        <i></i>Enviar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>