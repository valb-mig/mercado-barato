<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        @foreach ($paths as $name => $path)
            <li class="breadcrumb-item"><a href="{{$path}}">{{$name}}</a></li>
        @endforeach
    </ol>
</nav>