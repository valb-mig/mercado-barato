@props(['id', 'name', 'class', 'livewire', 'label'])

<div class="flex items-center">
    <input 
        type="checkbox"
        class="{{ isset($class) && !empty($class) ? $class : '' }} border border-light-2 @error($id) bg-red-0 border-red-1 @enderror"
        id="{{ $id }}"
        name="{{ isset($name) ? $name : $id }}"
        aria-describedby="basic-addon"
        @if(isset($livewire) && (bool)$livewire == true)
            wire:model="{{ $id }}"
        @endif
    />

    @if(isset($label))
        <label for="{{ $id }}" class="ml-2">{{ $label }}</label>
    @endif
</div>

@error($id)
    <span class="text-red-0 text-sm">
        {{ $message }}
    </span>
@enderror
