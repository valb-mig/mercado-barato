@props(['id', 'onclick', 'class', 'style', 'type', 'action'])

@php
    $styleClass = $class ?? "";

    $styleType = "text-dark-0 bg-light-0 border border-light-1 hover:bg-light-2 hover:border-light-3";

    if(isset($style) && !empty($style))
    {
        switch ($style) {
            case 'success':
                $styleType = "text-light-0 bg-green-0 border-green-1 hover:bg-light-2 hover:border-light-3 border-[1px]";
                break;
            case 'secondary':
                $styleType = "hover:text-white hover:bg-blue-0 hover:border-blue-1 border-[1px]";
                break;
            case 'success':
                $styleType = "hover:bg-light-2 hover:border-light-3 border-[1px]";
                break;
            case 'danger':
                $styleType = "hover:text-white hover:bg-red-0 hover:border-red-1 border-[1px]";
                break;
            case 'warning':
                $styleType = "hover:bg-light-2 hover:border-light-3 border-[1px]";
                break;
            default:
                break;
        }
    }
@endphp

<button 
    @isset($id)
        id="{{$id}}" 
    @endisset
    @isset($onclick)
        onclick="{{$onclick}}" 
    @endisset
    @isset($type)
        type="{{$type}}" 
    @endisset
    class="flex justify-center items-center p-2 rounded transition-all bg-light-0 border-light-1 {{$styleType}} {{$styleClass}}"
>
    {{ $slot }}
</button>