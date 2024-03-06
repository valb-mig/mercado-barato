@props(['id', 'onclick', 'class', 'type'])

@php
    $styleClass = "w-[40px] h-[40px]";

    if(isset($class) && !empty($class))
    {
        $styleClass = $class;
    }

    $styleType = "hover:bg-light-2 hover:border-light-3 border-[1px]";

    if(isset($type) && !empty($type))
    {
        switch ($type) {
            case 'primary':
                $styleType = "hover:bg-light-2 hover:border-light-3 border-[1px]";
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
    id="{{$id}}" 
    onclick="{{$onclick}}" 
    class="flex justify-center items-center rounded transition-all bg-light-0 border-light-1 {{$styleType}} {{$styleClass}}"
>
    {{$slot}}
</button>