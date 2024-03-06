@props(['id', 'title', 'class', 'icon'])

<section id="{{$id}}" class="{{$class}}">
    <span class="d-flex">
        <p class="d-flex gap-1 m-0 px-2 py-1 bg-light-1 rounded-top">
            @include('components.config.icon', ['icon'  => $icon ])
            {{$title}}
        </p>
    </span>

    <div class="d-flex border-1 border-light-1 w-100 rounded-[5px] rounded-tl-none">
        @if (empty($slot))
            Nenhuma informação localizada!        
        @else
            {{$slot}}
        @endif
    </div>
</section>