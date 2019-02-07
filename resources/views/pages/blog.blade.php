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
        @foreach($articles as $article)
            <a class="blog-item" href="{{ url('articles/' . $article->slug) }}">
                <div class="blog-item__pic">
                    <img src="{{ $article->preview }}" alt="{{ $article->alt }}">
                </div>
                <div class="blog-item__info">
                    <div class="blog-item__title">{{ $article->subtitle }}</div>
                    <div class="blog-item__date">{{ $article->updated_at->formatLocalized('%Y %B %d') }}</div>
                </div>
            </a>
            @endforeach

      <a class="blog-item" href="#">
        <div class="blog-item__pic">
          <img src="{{ asset('img/temp/art-1.jpg') }}" alt="">
            <div class="blog-item__title">BDO получила престижную премию Network of the Year</div>
        </div>
        <div class="blog-item__info">
          <div class="blog-item__title">BDO получила престижную премию Network of the Year</div>
          <div class="blog-item__date">25 июня 17:45</div>
        </div>
      </a>
      <a class="blog-item" href="#">
        <div class="blog-item__pic">
          <img src="assets/img/temp/art-2.jpg" alt="">
        </div>
        <div class="blog-item__info">
          <div class="blog-item__title">Lorem ipsum dolor sit amet.</div>
          <div class="blog-item__date">25 июня 17:45</div>
        </div>
      </a>
      <a class="blog-item" href="#">
        <div class="blog-item__pic">
          <img src="assets/img/temp/art-3.jpg" alt="">
        </div>
        <div class="blog-item__info">
          <div class="blog-item__title">Lorem ipsum dolor.</div>
          <div class="blog-item__date">25 июня 17:45</div>
        </div>
      </a>
      <a class="blog-item" href="#">
        <div class="blog-item__pic">
          <img src="assets/img/temp/art-4.jpg" alt="">
        </div>
        <div class="blog-item__info">
          <div class="blog-item__title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis aperiam, aliquam quod!</div>
          <div class="blog-item__date">25 июня 17:45</div>
        </div>
      </a>
      <a class="blog-item" href="#">
        <div class="blog-item__pic">
          <img src="assets/img/temp/art-1.jpg" alt="">
        </div>
        <div class="blog-item__info">
          <div class="blog-item__title">BDO получила престижную премию Network of the Year</div>
          <div class="blog-item__date">25 июня 17:45</div>
        </div>
      </a>
      <a class="blog-item" href="#">
        <div class="blog-item__pic">
          <img src="assets/img/temp/art-2.jpg" alt="">
        </div>
        <div class="blog-item__info">
          <div class="blog-item__title">Lorem ipsum dolor sit amet.</div>
          <div class="blog-item__date">25 июня 17:45</div>
        </div>
      </a>
      <a class="blog-item" href="#">
        <div class="blog-item__pic">
          <img src="assets/img/temp/art-3.jpg" alt="">
        </div>
        <div class="blog-item__info">
          <div class="blog-item__title">Lorem ipsum dolor.</div>
          <div class="blog-item__date">25 июня 17:45</div>
        </div>
      </a>
      <a class="blog-item" href="#">
        <div class="blog-item__pic">
          <img src="assets/img/temp/art-4.jpg" alt="">
        </div>
        <div class="blog-item__info">
          <div class="blog-item__title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis aperiam, aliquam quod!</div>
          <div class="blog-item__date">25 июня 17:45</div>
        </div>
      </a>
      <a class="blog-item" href="#">
        <div class="blog-item__pic">
          <img src="assets/img/temp/art-1.jpg" alt="">
        </div>
        <div class="blog-item__info">
          <div class="blog-item__title">BDO получила престижную премию Network of the Year</div>
          <div class="blog-item__date">25 июня 17:45</div>
        </div>
      </a>
      <a class="blog-item" href="#">
        <div class="blog-item__pic">
          <img src="assets/img/temp/art-2.jpg" alt="">
        </div>
        <div class="blog-item__info">
          <div class="blog-item__title">Lorem ipsum dolor sit amet.</div>
          <div class="blog-item__date">25 июня 17:45</div>
        </div>
      </a>
      <a class="blog-item" href="#">
        <div class="blog-item__pic">
          <img src="assets/img/temp/art-3.jpg" alt="">
        </div>
        <div class="blog-item__info">
          <div class="blog-item__title">Lorem ipsum dolor.</div>
          <div class="blog-item__date">25 июня 17:45</div>
        </div>
      </a>
      <a class="blog-item" href="#">
        <div class="blog-item__pic">
          <img src="assets/img/temp/art-4.jpg" alt="">
        </div>
        <div class="blog-item__info">
          <div class="blog-item__title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis aperiam, aliquam quod!</div>
          <div class="blog-item__date">25 июня 17:45</div>
        </div>
      </a>
      <a class="blog-item" href="#">
        <div class="blog-item__pic">
          <img src="assets/img/temp/art-1.jpg" alt="">
        </div>
        <div class="blog-item__info">
          <div class="blog-item__title">BDO получила престижную премию Network of the Year</div>
          <div class="blog-item__date">25 июня 17:45</div>
        </div>
      </a>
      <a class="blog-item" href="#">
        <div class="blog-item__pic">
          <img src="assets/img/temp/art-2.jpg" alt="">
        </div>
        <div class="blog-item__info">
          <div class="blog-item__title">Lorem ipsum dolor sit amet.</div>
          <div class="blog-item__date">25 июня 17:45</div>
        </div>
      </a>
      <a class="blog-item" href="#">
        <div class="blog-item__pic">
          <img src="assets/img/temp/art-3.jpg" alt="">
        </div>
        <div class="blog-item__info">
          <div class="blog-item__title">Lorem ipsum dolor.</div>
          <div class="blog-item__date">25 июня 17:45</div>
        </div>
      </a>
      <a class="blog-item" href="#">
        <div class="blog-item__pic">
          <img src="assets/img/temp/art-4.jpg" alt="">
        </div>
        <div class="blog-item__info">
          <div class="blog-item__title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis aperiam, aliquam quod!</div>
          <div class="blog-item__date">25 июня 17:45</div>
        </div>
      </a>
    </div>
    <!-- /blog-content -->

    <div class="pagination">
      <a class="pagination-prev pagination-nav" href="#">Назад</a>
      <div class="pagination-links">
        <a class="pagination-links__item" href="#"><span>1</span></a>
        <a class="pagination-links__item pagination-links__item--active" href="#"><span>2</span></a>
        <a class="pagination-links__item" href="#"><span>3</span></a>
        <a class="pagination-links__item" href="#"><span>4</span></a>
        <a class="pagination-links__item" href="#"><span>...</span></a>
        <a class="pagination-links__item" href="#"><span>8</span></a>
      </div>
      <a class="pagination-next pagination-nav" href="#">Вперед</a>
    </div>
    <!-- /pagination -->

  </div>
  <!-- /container -->
</div>
<!-- /blog -->
@stop
