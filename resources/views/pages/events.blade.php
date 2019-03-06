@extends('layouts.app')
@section('content')
<div class="promo promo-blog">
  <div class="promo-pic">
    <img src="{{ asset('img/promo-2.jpg') }}" alt="">
  </div>

  <div class="container">

    <div class="row">
      <div class="col-12 col-xl-10">
        <div class="promo-text">
          <div class="promo-date">{{ $events->first()->updated_at->formatLocalized('%Y %B %d') }}</div>
          <h1>{{ $events->first()->title }}</h1>
          <h3>{{ $events->first()->subtitle }}</h3>
        </div>
        <!-- /promo-text -->

      </div>
      <!-- /col -->
    </div>
    <!-- /row -->


  </div>
  <!-- /container -->
</div>
<!-- /promo -->
{{ Breadcrumbs::render('events') }}

<div class="blog">
  <div class="container">

    <div class="blog-content">
        @foreach($events as $event)
            <a class="blog-item" href="{{ url('event/' . $event->slug) }}">
                <div class="blog-item__pic">
                    <img src="{{ asset($event->img) }}" alt="">
                </div>
                <div class="blog-item__info">
                    <div class="blog-item__title">{{ $event->title }}</div>
                    <div class="blog-item__date">{{ $event->updated_at->formatLocalized('%Y %m %d') }}</div>
                </div>
            </a>
        @endforeach

    </div>
    <!-- /blog-content -->

    {{ $events->links('vendor.pagination.custom') }}

  </div>
  <!-- /container -->
</div>
<!-- /blog -->
@stop
