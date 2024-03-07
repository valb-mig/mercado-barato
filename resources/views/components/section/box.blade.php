@props(['id', 'title', 'class', 'icon'])

<section id="{{$id}}" class="{{$class}}">
    <span class="flex">
        <p class="flex gap-1 m-0 px-2 py-1 bg-light-1 rounded-top">
            @if (isset($icon) && !empty($icon))
                @include('components.config.icon', ['icon'  => $icon ])
            @endif
            {{$title}}
        </p>
    </span>

    <div class="flex border border-light-1 w-full rounded-[5px] rounded-tl-none">
        {{$slot}}
    </div>
</section>