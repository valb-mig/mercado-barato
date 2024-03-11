@props(['paths'])

<nav aria-label="breadcrumb" class="border-b border-light-1 mb-2 p-1 text-sm">
    <ol class="breadcrumb flex ">
        @foreach ($paths as $path)
            <span class="text-light-1">/</span>
            <li class="breadcrumb-item">
                <a class="text-decoration-none text-light-2 hover:text-light-3" href="{{ $path['url'] }}">
                    {{ $path['label'] }}
                </a>            
            </li>
        @endforeach
    </ol>
</nav>
