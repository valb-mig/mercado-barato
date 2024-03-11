<!-- text-input.blade.php -->
@props(['id', 'name', 'type', 'placeholder', 'class', 'livewire', 'icon', 'value'])

@push('scripts')
    <script src="/js/components/form-input.js"></script>
@endpush

@php
    $border = ['input' => 'border-radius: 5px !important;'];

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
            type="{{ isset($type) ? $type : 'text' }}" 
            class="{{ isset($class) && !empty($class) ? $class : '' }} w-full border border-light-2 @error($id) bg-red-0 border-red-1 @enderror"
            style="{{$border['input']}}" 
            placeholder="{{ $placeholder }}" 
            id="{{ $id }}" 
            name="{{ isset($name) ? $name : $id }}" 
            aria-label="{{ $id }}" 
            aria-describedby="basic-addon"
            @if(isset($livewire) && (bool)$livewire == true)
                wire:model.live="{{$id}}"
            @endif
            value="{{ isset($value) ? $value : old($id) }}"
        />

        @if (isset($type) && $type == "password")
            <div 
                class="absolute top-0 end-0 h-full px-2" 
                style="z-index: 999" 
                onmousedown="showPassword(true)"
                onmouseup="showPassword(false)"
            >
                <span
                    class="h-full flex items-center" 
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
</div>

@error($id)
    <span class="text-red-0 text-sm">
        {{ $message }}
    </span>
@enderror
