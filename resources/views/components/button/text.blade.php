@props(['type', 'style', 'icon', 'onclick'])

@php
    $styleType = "hover:bg-light-2 hover:border-light-3 border-[1px]";

    if(isset($style) && !empty($style))
    {
        switch ($style) {
            case 'success':
                $styleType = "text-light-0 bg-green-0 border border-green-1 hover:bg-green-1 hover:border-green-0 border-[1px]";
                break;
            default:
                break;
        }
    }
@endphp

<button 
    class="p-2 rounded {{$styleType}}" 
    type="{{$type}}" 

    @if (isset($onclick) && !empty($onclick))
        onclick="{{$onclick}}"
    @endif
>
    @if (isset($icon) && !empty($icon))
    @endif
    {{$slot}}
</button>