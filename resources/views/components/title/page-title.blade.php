@props(['icon', 'title', 'desc'])

@php
    $desc = isset($desc) && !empty($desc) ? $desc : '';
@endphp

<h1 class="flex items-center mb-5">
    <div class="flex items-center gap-1">
        <span class="flex w-[5rem] h-[5rem] p-2 border-[1px] border-light-1 rounded">
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