@extends('layouts.app')
@section('content')
<div class="promo promo-big promo-article">

  <div class="promo-pic">
    <img src="{{ asset($article[0]->img) }}" alt="">
  </div>

  <div class="container">

    <div class="row">
      <div class="col-12 col-xl-10">
        <div class="promo-text">
          <div class="promo-date">10 ноября 2018</div>
          <h1>Кризис хорошо или плохо</h1>
          <h3>Ведем бухгалтерию и кадровый учет, рассчитываем зарплату, сопровождаем ERP-системы для заказчиков, требующих безупречного качества</h3>
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

<div class="breadcrumbs">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-8 offset-lg-2">
        <div class="breadcrumbs-content">
          <a class="breadcrumbs-item" href="/">Финтекс</a>
          <a class="breadcrumbs-item" href="#">Блог</a>
          <a class="breadcrumbs-item" href="#">Запись в блоге</a>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container">

  <div class="row">
    <div class="col-12 col-lg-8 offset-lg-2">
      <article class="article">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam itaque, tenetur modi! Nisi necessitatibus laboriosam repudiandae reiciendis cumque quia incidunt soluta doloremque ipsa quidem, odit sit culpa, maiores blanditiis dolor!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem vel perferendis tenetur esse excepturi reiciendis corporis hic maiores quisquam facilis eius debitis repellat aut minus qui molestias, perspiciatis totam inventore voluptatum nisi laborum deleniti. Commodi quas quasi culpa laboriosam quo.</p>
        <img src="{{ asset('img/temp/blog-1.jpg') }}" alt="">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque in tempora maiores excepturi ipsa veritatis accusamus, voluptatem reprehenderit officiis molestias labore harum consequatur quisquam maxime deserunt ad, et praesentium minus ipsam. Illum praesentium, architecto natus doloremque, error, animi temporibus eos, voluptatem fugiat aspernatur voluptates quod enim asperiores corrupti repudiandae! Qui.</p>

        <blockquote class="quote">
          <div class="quote-pic">
            <img src="{{ asset('img/icon/quote.svg') }}" alt="">
          </div>
          <p class="quote-text">Прежде всего нужно забыть обо всех предрассудках и страхах и не бояться резать то, что раньше казалось недопустимым.</p>
        </blockquote>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error non maiores totam reiciendis temporibus accusamus! Ad ullam ratione voluptatum eaque soluta explicabo, laboriosam laborum ea error aut quisquam consectetur tempora quas nulla deserunt, doloremque ab mollitia. Quibusdam et molestias maiores!</p>
        <img src="{{ asset('img/temp/blog-2.jpg') }}" alt="">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, ipsam, in. Quos eveniet quod autem, dolore, laborum, cumque deserunt aperiam distinctio nemo vel iure labore. Dolores eum, quas, nihil aliquam molestiae ut voluptatem error inventore iusto molestias dignissimos blanditiis perspiciatis aliquid dolorem, id nesciunt cupiditate excepturi sapiente aspernatur, similique harum minima. Veritatis doloremque nihil, quia facere ea expedita perferendis, repellat.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error non maiores totam reiciendis temporibus accusamus! Ad ullam ratione voluptatum eaque soluta explicabo, laboriosam laborum ea error aut quisquam consectetur tempora quas nulla deserunt, doloremque ab mollitia. Quibusdam et molestias maiores!</p>
        <img src="{{ asset('img/temp/blog-3.jpg') }}" alt="">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, ipsam, in. Quos eveniet quod autem, dolore, laborum, cumque deserunt aperiam distinctio nemo vel iure labore. Dolores eum, quas, nihil aliquam molestiae ut voluptatem error inventore iusto molestias dignissimos blanditiis perspiciatis aliquid dolorem, id nesciunt cupiditate excepturi sapiente aspernatur, similique harum minima. Veritatis doloremque nihil, quia facere ea expedita perferendis, repellat.</p>
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

      <a class="blog-item" href="#">
        <div class="blog-item__pic">
          <img src="{{ asset('img/temp/art-1.jpg') }}" alt="">
        </div>
        <div class="blog-item__info">
          <div class="blog-item__title">BDO получила престижную премию Network of the Year</div>
          <div class="blog-item__date">25 июня 17:45</div>
        </div>
      </a>
      <a class="blog-item" href="#">
        <div class="blog-item__pic">
          <img src="{{ asset('img/temp/art-2.jpg') }}" alt="">
        </div>
        <div class="blog-item__info">
          <div class="blog-item__title">Lorem ipsum dolor sit amet.</div>
          <div class="blog-item__date">25 июня 17:45</div>
        </div>
      </a>
      <a class="blog-item" href="#">
        <div class="blog-item__pic">
          <img src="{{ asset('img/temp/art-3.jpg') }}" alt="">
        </div>
        <div class="blog-item__info">
          <div class="blog-item__title">Lorem ipsum dolor.</div>
          <div class="blog-item__date">25 июня 17:45</div>
        </div>
      </a>
      <a class="blog-item" href="#">
        <div class="blog-item__pic">
          <img src="{{ asset('img/temp/art-4.jpg') }}" alt="">
        </div>
        <div class="blog-item__info">
          <div class="blog-item__title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis aperiam, aliquam quod!</div>
          <div class="blog-item__date">25 июня 17:45</div>
        </div>
      </a>
      <a class="blog-item" href="#">
        <div class="blog-item__pic">
          <img src="{{ asset('img/temp/art-1.jpg') }}" alt="">
        </div>
        <div class="blog-item__info">
          <div class="blog-item__title">BDO получила престижную премию Network of the Year</div>
          <div class="blog-item__date">25 июня 17:45</div>
        </div>
      </a>
      <a class="blog-item" href="#">
        <div class="blog-item__pic">
          <img src="{{ asset('img/temp/art-2.jpg') }}" alt="">
        </div>
        <div class="blog-item__info">
          <div class="blog-item__title">Lorem ipsum dolor sit amet.</div>
          <div class="blog-item__date">25 июня 17:45</div>
        </div>
      </a>
      <a class="blog-item" href="#">
        <div class="blog-item__pic">
          <img src="{{ asset('img/temp/art-3.jpg') }}" alt="">
        </div>
        <div class="blog-item__info">
          <div class="blog-item__title">Lorem ipsum dolor.</div>
          <div class="blog-item__date">25 июня 17:45</div>
        </div>
      </a>
      <a class="blog-item" href="#">
        <div class="blog-item__pic">
          <img src="{{ asset('img/temp/art-4.jpg') }}" alt="">
        </div>
        <div class="blog-item__info">
          <div class="blog-item__title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis aperiam, aliquam quod!</div>
          <div class="blog-item__date">25 июня 17:45</div>
        </div>
      </a>
      <a class="blog-item" href="#">
        <div class="blog-item__pic">
          <img src="{{ asset('img/temp/art-1.jpg') }}" alt="">
        </div>
        <div class="blog-item__info">
          <div class="blog-item__title">BDO получила престижную премию Network of the Year</div>
          <div class="blog-item__date">25 июня 17:45</div>
        </div>
      </a>
      <a class="blog-item" href="#">
        <div class="blog-item__pic">
          <img src="{{ asset('img/temp/art-2.jpg') }}" alt="">
        </div>
        <div class="blog-item__info">
          <div class="blog-item__title">Lorem ipsum dolor sit amet.</div>
          <div class="blog-item__date">25 июня 17:45</div>
        </div>
      </a>
      <a class="blog-item" href="#">
        <div class="blog-item__pic">
          <img src="{{ asset('img/temp/art-3.jpg') }}" alt="">
        </div>
        <div class="blog-item__info">
          <div class="blog-item__title">Lorem ipsum dolor.</div>
          <div class="blog-item__date">25 июня 17:45</div>
        </div>
      </a>
      <a class="blog-item" href="#">
        <div class="blog-item__pic">
          <img src="{{ asset('img/temp/art-4.jpg') }}" alt="">
        </div>
        <div class="blog-item__info">
          <div class="blog-item__title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis aperiam, aliquam quod!</div>
          <div class="blog-item__date">25 июня 17:45</div>
        </div>
      </a>
      <a class="blog-item" href="#">
        <div class="blog-item__pic">
          <img src="{{ asset('img/temp/art-1.jpg') }}" alt="">
        </div>
        <div class="blog-item__info">
          <div class="blog-item__title">BDO получила престижную премию Network of the Year</div>
          <div class="blog-item__date">25 июня 17:45</div>
        </div>
      </a>
      <a class="blog-item" href="#">
        <div class="blog-item__pic">
          <img src="{{ asset('img/temp/art-2.jpg') }}" alt="">
        </div>
        <div class="blog-item__info">
          <div class="blog-item__title">Lorem ipsum dolor sit amet.</div>
          <div class="blog-item__date">25 июня 17:45</div>
        </div>
      </a>
      <a class="blog-item" href="#">
        <div class="blog-item__pic">
          <img src="{{ asset('img/temp/art-3.jpg') }}" alt="">
        </div>
        <div class="blog-item__info">
          <div class="blog-item__title">Lorem ipsum dolor.</div>
          <div class="blog-item__date">25 июня 17:45</div>
        </div>
      </a>
      <a class="blog-item" href="#">
        <div class="blog-item__pic">
          <img src="{{ asset('img/temp/art-4.jpg') }}" alt="">
        </div>
        <div class="blog-item__info">
          <div class="blog-item__title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis aperiam, aliquam quod!</div>
          <div class="blog-item__date">25 июня 17:45</div>
        </div>
      </a>
  </div>
  <!-- /similar-slider -->

</div>
<!-- /similar -->
@stop
