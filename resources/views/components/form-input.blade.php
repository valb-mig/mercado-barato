@props(['label','icon','type','id','placeholder'])

@php
    $border = [
        'input' => 'border-radius: 5px !important;'
    ];

    if(isset($icon))
    {
        $border = [
            'icon'  => 'border-radius: 5px 0 0 5px;',
            'input' => ''
        ];
    }
@endphp

<div class="input-group mb-3">
    <div class="input-group-prepend">
        @if (isset($icon))
            <span 
                class="input-group-text h-100" 
                id="basic-addon"
                style="{{$border['icon']}}"
            >
                <i class="{{ $icon }}" style="color: #404040;"></i>
            </span>
        @endif
    </div>
    <input 
        type="{{ $type }}" 
        class="form-control"
        style="{{$border['input']}}" 
        placeholder="{{ $placeholder }}" 
        id="{{ $id }}" 
        name="{{ $id }}" 
        aria-label="{{ $id }}" 
        aria-describedby="basic-addon">
</div>