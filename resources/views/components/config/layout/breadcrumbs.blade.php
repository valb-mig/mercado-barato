@push('styles')
    <link rel="stylesheet" href="{{ asset('css/components/layout/breadcrumbs.css') }}">
@endpush

<nav aria-label="breadcrumb" class="breadcrumbs">
    <ol class="breadcrumb m-1">
        @foreach ($paths as $name => $path)
            <li class="breadcrumb-item"><a class="text-decoration-none text-dark" href="{{$path}}">{{$name}}</a></li>
        @endforeach
    </ol>
</nav>