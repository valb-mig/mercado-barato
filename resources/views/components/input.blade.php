@props(['label','icon','type','id','placeholder'])

<div>
    <label for="{{ $id }}" class="form-label d-flex align-items-center gap-2">
        @if (isset($icon))
            <i class="{{ $icon }}"></i>
        @endif
        <p class="mb-0">{{ $label }}</p>
    </label>
    <input type="{{ $type }}" class="form-control" id="{{ $id }}" name="{{ $id }}" placeholder="{{ $placeholder }}">
</div>