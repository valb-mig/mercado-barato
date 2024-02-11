@push('styles')
    <link rel="stylesheet" href="{{ asset('css/components/layout/header.css') }}">
@endpush

<nav class="p-2 d-flex gap-2 align-items-center border-b-2 border-light-1 mb-2">
    <div class="d-flex w-100 justify-content-between">
        <a class="navbar-brand" href="#">Mercado Barato</a>
    </div>

    <div class="d-flex gap-2 align-items-center">
        <span class="btn btn-default">
            <i class="fa fa-bell"></i>
        </span>

        <div class="d-flex align-items-center p-2">
            {{$user->username}}
            <span class="d-flex align-items-center justify-content-center">
                <i class="fa fa-user"></i>
            </span>
        </div>
    </div>
</nav>