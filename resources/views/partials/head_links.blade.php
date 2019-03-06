@if($paginator->hasPages())
    @if($paginator->onFirstPage())
        <link rel="next" href="{{ $paginator->nextPageUrl() }}">
        @elseif(!$paginator->hasMorePages())
        <link rel="prev" href="{{ $paginator->previousPageUrl() }}">
        @else
        <link rel="next" href="{{ $paginator->nextPageUrl() }}">
        <link rel="prev" href="{{ $paginator->previousPageUrl() }}">
        @endif
    @endif
