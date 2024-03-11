@props(['id', 'icon', 'name', 'placeholder', 'class'])

@php
    $border = [
        'input' => 'border-radius: 5px !important;'
    ];

    if(isset($icon))
    {
        $border = [
            'with_icon' => 'border-radius: 5px 0 0 5px;',
            'input' => 'border-radius: 0 5px 5px 0;'
        ];
    }
@endphp

<div class="flex h-[40px] w-full">

    @if (isset($icon))
        <div class="flex justify-center bg-light-1 items-center w-[2.5em] h-full rounded-l border border-light-2 border-r-0">
                <span 
                    class="flex justify-center h-full"
                    id="basic-addon"
                    style="{{$border['with_icon']}}"
                >
                    @include('components.config.icon', [
                        'icon'  => $icon,
                        'width' => '20px'
                    ])
                </span>
        </div>
    @endif

    <div class="flex w-full relative">
        <input 
            type="file" 
            class="hidden"
            id="{{ $id }}" 
            name="{{ isset($name) ? $name : $id }}" 
            aria-label="{{ $id }}" 
            aria-describedby="basic-addon"
        />
        <label 
            for="{{ $id }}" 
            class="{{ isset($class) && !empty($class) ? $class : '' }} flex w-full items-center border border-light-2 bg-white rounded-r cursor-pointer"
        >
            <div class="ml-2">{{ $placeholder }}</div>
        </label>
    </div>
</div>