@props(['label', 'icon', 'type', 'id', 'name', 'placeholder', 'class'])

@push('scripts')
    <script src="/js/components/form-input.js"></script>
@endpush

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

<div class="input-group">
    <div class="input-group-prepend">
        @if (isset($icon))
            <span 
                class="input-group-text h-100"
                id="basic-addon"
                style="{{$border['with_icon']}}"
            >
                @include('components.config.icon', [
                    'icon'  => $icon,
                    'width' => '20px'
                ])
            </span>
        @endif
    </div>
    <input 
        type="{{ $type }}" 
        class="form-control {{ isset($class) && !empty($class) ? $class : '' }}"
        style="{{$border['input']}}" 
        placeholder="{{ $placeholder }}" 
        id="{{ $id }}" 
        name="{{ isset($name) ? $name : $id }}" 
        aria-label="{{ $id }}" 
        aria-describedby="basic-addon"
    />

    @if ($type == "password")
        <div 
            class="position-absolute top-0 end-0 h-100 px-2" 
            style="z-index: 999" 
            onmousedown="showPassword(true)"
            onmouseup="showPassword(false)"
        >
            <span
                class="h-100 d-flex align-items-center" 
                id="basic-addon"
            >
                @include('components.config.icon', [
                    'icon'  => 'eye-close',
                    'width' => '25px'
                ])
            </span>
        </div>
    @endif
</div>

@error($id)
    <span class="text-danger small">
        {{ $message }}
    </span>
@enderror