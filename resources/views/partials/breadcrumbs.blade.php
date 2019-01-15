@if (count($breadcrumbs))

    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-content">
                @foreach ($breadcrumbs as $breadcrumb)

                    @if ($breadcrumb->url && !$loop->last)
                        <a class="breadcrumbs-item" href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>
                    @else
                        <a class="breadcrumbs-item">{{ $breadcrumb->title }}</a>
                    @endif

                @endforeach
            </div>
        </div>
    </div>

@endif

