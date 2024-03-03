@props(['action', 'method', 'class'])

<div class="container p-[10px] rounded-[5px] border-2 border-light-1 bg-light-0">
    <form action="{{$action}}" method="post" class="d-flex flex-column gap-2" enctype="multipart/form-data">
        @csrf
        {{$slot}}
    </form>
</div>