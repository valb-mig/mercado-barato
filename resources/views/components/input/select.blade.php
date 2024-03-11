@props(['id', 'name', 'icon', 'placeholder', 'class', 'options', 'selected'])

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

    <select id="{{ $id }}" name="{{ isset($name) ? $name : $id }}" class="{{ isset($class) && !empty($class) ? $class : '' }} w-full border border-light-2 p-2 @error($id) bg-red-0 border-red-1 @enderror" style="{{$border['input']}}">
        <option disabled value>{{$placeholder}}</option>
        @foreach ($options as $key => $value)
            <option value="{{$key}}" @if(isset($selected) && $selected == $key) selected @endif>{{$value}}</option>
        @endforeach
    </select>
</div>
