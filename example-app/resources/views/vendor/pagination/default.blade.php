@if ($paginator->hasPages())
    <nav class="pagination">
        <ul class="pagination__list pagination-list">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="pagination-list__item pagination-list__item--disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true"><</span>
                </li>
            @else
                <li class="pagination-list__item">
                    <a class="pagination-list__link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="pagination-list__item pagination-list__item--disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="pagination-list__item pagination-list__item--active" aria-current="page"><span>{{ $page }}</span></li>
                        @else
                            <li class="pagination-list__item"><a class="pagination-list__link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li  class="pagination-list__item">
                    <a class="pagination-list__link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">></a>
                </li>
            @else
                <li class="pagination-list__item pagination-list__item--disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true">></span>
                </li>
            @endif
        </ul>
    </nav>
@endif
