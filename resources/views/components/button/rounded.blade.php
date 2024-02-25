@props(['id', 'onclick', 'class'])

<button id="{{$id}}" onclick="{{$onclick}}" class="d-flex justify-content-center bg-light-1 border-2 border-light-2 align-items-center rounded-circle {{$class}}">
    {{$slot}}
</button>