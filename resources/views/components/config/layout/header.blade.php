<nav class="p-2 d-flex gap-2 align-items-center border-b-2 border-light-1 mb-2">
    <div class="d-flex w-100">
        <a class="navbar-brand" href="/home">Mercado Barato</a>
    </div>

    <div class="d-flex gap-2 align-items-center">
        <span class="btn btn-default">
            @include('components.config.icon', [
                'icon' => 'bell'
            ])
        </span>
        <div class="d-flex align-items-center gap-1 pl-2 bg-light-1 border-1 border-light-2 rounded">
            {{Auth::user()->username}}
            <span class="d-flex align-items-center justify-content-center rounded p-1 bg-light-2 text-light-0">
                @include('components.config.icon', [
                    'icon' => 'user'
                ])
            </span>
        </div>
    </div>
</nav>