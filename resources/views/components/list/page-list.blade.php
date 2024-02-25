@props(['header','body','items'])

<div class="d-flex flex-column w-100 table-responsive rounded">
    <table class="border-1 border-light-1">
        <thead class="bg-light-1">
            <tr>
                @foreach ($header as $value)
                    <th scope="col" class="p-2 {{$value['class']}}">{{$value['data']}}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @if(count($items) > 0)

                @foreach ($body as $item)
                    <tr>
                        @foreach ($item as $value)
                            <td class="{{$value['class']}}">{!!$value['data']!!}</td>
                        @endforeach
                    </tr>
                @endforeach

            @else
                <tr>
                    <td colspan="5" class="text-center">
                        Nenhum produto cadastrado
                    </td>
                </tr>
            @endif
        </tbody>        
    </table>
    <div class="container mt-4">
        {{ $items->links('components.config.layout.paginator') }}
    </div>
</div>