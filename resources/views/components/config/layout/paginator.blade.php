@if ($paginator->hasPages())

    <style>
        /* Adicione essas regras ao seu arquivo pagination.css */
        .custom-pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 15px;
        }

        .custom-pagination a,
        .custom-pagination span {
            display: inline-block;
            padding: 8px 16px;
            margin: 0 4px;
            border: 1px solid #ccc;
            color: #333;
            text-decoration: none;
            border-radius: 4px;
        }

        .custom-pagination a:hover {
            background-color: #eee;
        }

        .custom-pagination .active {
            color: #fff;
        }

        .custom-pagination .active span {
            background-color: #007bff;
        }

    </style>

    <ul class="pagination custom-pagination">
        {{-- Anterior Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <span aria-hidden="true">&laquo;</span>
            </li>
        @else
            <li>
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&laquo;</a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
            @endif

            {{-- Array of links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active" aria-current="page"><span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Próxima Page Link --}}
        @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&raquo;</a>
            </li>
        @else
            <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                <span aria-hidden="true">&raquo;</span>
            </li>
        @endif
    </ul>
@endif