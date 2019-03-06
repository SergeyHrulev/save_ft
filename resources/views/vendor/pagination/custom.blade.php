@if($paginator->hasPages())
        <div class="pagination">
            @if ($paginator->onFirstPage())

                @else
                    <a class="pagination-prev pagination-nav" href="{{ $paginator->previousPageUrl() }}">Назад</a>
                @endif

            <div class="pagination-links">
                @foreach ($elements as $element)
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <a class="pagination-links__item pagination-links__item--active"><span>{{ $page }}</span></a>
                        @else
                            {{--@if($paginator->currentPage() == 1)--}}
                                    {{--<a class="pagination-links__item" href="{{ \Illuminate\Support\Facades\URL::current() }}"><span>{{ $page }}</span></a>--}}
                                {{--@else--}}
                                    <a class="pagination-links__item" href="{{ $page == 1 ? Request::url() : $url }}"><span>{{ $page }}</span></a>
                                {{--@endif--}}
                        @endif
                    @endforeach
                @endif
                @endforeach
                {{--<a class="pagination-links__item" href="#"><span>...</span></a>--}}
            </div>
                @if ($paginator->hasMorePages())
                    <a class="pagination-next pagination-nav" href="{{ $paginator->nextPageUrl() }}">Вперед</a>
                    @endif
        </div>
    @endif
