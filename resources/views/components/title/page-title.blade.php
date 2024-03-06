@props(['icon', 'title', 'desc'])

@php
    $desc = isset($desc) && !empty($desc) ? $desc : '';
@endphp

<h1 class="d-flex align-items-center">
    <div class="d-flex align-items-center gap-1">
        <span class="flex w-[5rem] h-[5rem] p-2 border-1 border-light-1 rounded">
            @include('components.config.icon', [
                'icon'  => $icon,
                'width' => '100%'
            ])
        </span>
        <span class="text-[3rem]">
            {{$title}}
            @if (!empty($desc))
                <p class="text-[.8rem] truncate">"{{$desc}}"</p>
            @endif
        </span>
    </div>
</h1>