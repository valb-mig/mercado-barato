@props(['id', 'title', 'class'])

<section id="{{$id}}" class="{{$class}}">
    <span class="d-flex">
        <p class="d-flex gap-1 m-0 px-2 py-1 bg-light-1 rounded-top">
            {{$title}}
        </p>
    </span>

    <div class="d-flex border-1 border-light-1 w-100 rounded-[5px] rounded-tl-none">
        {{$slot}}
    </div>
</section>