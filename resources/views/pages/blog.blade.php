@extends('layouts.app')
@section('content')
<div class="promo promo-blog">

  <div class="promo-pic">
    <img src="{{ asset('img/promo-2.jpg') }}" alt="">
  </div>

  <div class="container">
{{--{{ dd($articles) }}--}}
    <div class="row">
      <div class="col-12 col-xl-10">
        <div class="promo-text">
          <div class="promo-date">{{ $articles->first()->updated_at->formatLocalized('%Y %B %d') }}</div>
          <h1>{{ $articles->first()->title }}</h1>
          <h3>{{ $articles->first()->subtitle }}</h3>
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

{{ Breadcrumbs::render('articles') }}

<div class="blog">
  <div class="container">
    <div class="blog-content">
        @isset($articles)
        @foreach($articles as $article)
            <a class="blog-item" href="{{ url('articles/' . $article->slug) }}">
                <div class="blog-item__pic">
                    <img src="{{ $article->preview }}" alt="{{ $article->alt }}">
                </div>
                <div class="blog-item__info">
                    <div class="blog-item__title">{{ $article->subtitle }}</div>
                    <div class="blog-item__date">{{ $article->updated_at->formatLocalized('%Y %m %d') }}</div>
                </div>
            </a>
            @endforeach
        @endisset

    </div>
    <!-- /blog-content -->
    {{ $articles->links('vendor.pagination.custom') }}

    <!-- /pagination -->

  </div>
  <!-- /container -->
</div>
<!-- /blog -->
@stop
