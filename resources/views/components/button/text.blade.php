@props(['type', 'title', 'icon', 'onclick'])

@php
    $styleType = "hover:bg-light-2 hover:border-light-3 border-[1px]";

    if(isset($type) && !empty($type))
    {
        switch ($type) {
            case 'submit':
                $styleType = "hover:bg-light-2 hover:border-light-3 border-[1px]";
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
    {{$title}}
</button>