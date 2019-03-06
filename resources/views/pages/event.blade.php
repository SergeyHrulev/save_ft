@extends('layouts.app')
@section('content')

    <div class="promo promo-big promo-article">

        <div class="promo-pic">
            <img src="{{ asset($event[0]->img) }}" alt="{{ $event[0]->alt }}">
        </div>

        <div class="container">

            <div class="row">
                <div class="col-12 col-xl-10">
                    <div class="promo-text">
                        <div class="promo-date">{{ $event[0]->updated_at->format('Y m d') }}</div>
                        <h1>{{ $event[0]->title }}</h1>
                        <h3>{{ $event[0]->subtitle }}</h3>
                        <div class="share">
                            <div class="share-text">Поделиться</div>
                            <div class="share-content">
                                <a class="share-item" href="#" target="_blank">
                                    <img src="{{ asset('img/icon/vk-1.svg') }}" alt="">
                                </a>
                                <a class="share-item" href="#" target="_blank">
                                    <img src="{{ asset('img/icon/fb-1.svg') }}" alt="">
                                </a>
                                <a class="share-item" href="#" target="_blank">
                                    <img src="{{ asset('img/icon/tw-1.svg') }}" alt="">
                                </a>
                                <a class="share-item" href="#" target="_blank">
                                    <img src="{{ asset('img/icon/ok-1.svg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- /share -->
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

    {{ Breadcrumbs::render('event', $event) }}

    <div class="container">

        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <article class="article">
                    {!! $event[0]->text !!}
                </article>
                <div class="article-social">
                    <div class="share share--color">
                        <div class="share-text">Поделиться</div>
                        <div class="share-content">
                            <a class="share-item share-item--vk" href="#" target="_blank">
                                <img src="{{ asset('img/icon/vk-2.svg') }}" alt="">
                            </a>
                            <a class="share-item share-item--fb" href="#" target="_blank">
                                <img src="{{ asset('img/icon/fb-2.svg') }}" alt="">
                            </a>
                            <a class="share-item share-item--tw" href="#" target="_blank">
                                <img src="{{ asset('img/icon/tw-2.svg') }}" alt="">
                            </a>
                            <a class="share-item share-item--ok" href="#" target="_blank">
                                <img src="{{ asset('img/icon/ok-2.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- /share -->
                    <div class="rating">
                        <div class="rating-plus">
                            <img src="{{ asset('img/icon/like.svg') }}" alt="">
                        </div>
                        <div class="rating-number">+ 7</div>
                        <div class="rating-minus">
                            <img src="{{ asset('img/icon/dislike.svg') }}" alt="">
                        </div>
                    </div>
                    <!-- /rating -->
                </div>
                <!-- /article-social -->
            </div>
            <!-- /col -->
        </div>
        <!-- /row -->

    </div>
    <!-- /container -->

    <div class="similar">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2">
                    <div class="similar-caption">Интересное по теме</div>
                </div>
            </div>
        </div>
        <div class="similar-slider">
            @foreach($events as $item)
                @include('pages.article.event-slider', [
                'slug' => $item->slug,
                'img' => $item->img,
                'img_alt' => $item->alt,
                'title' => $item->title,
                'date' => $item->updated_at,
                ])
            @endforeach

        </div>
        <!-- /similar-slider -->

    </div>
    <!-- /similar -->
@endsection

