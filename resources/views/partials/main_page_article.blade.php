<a class="interesting-article__item" href="{{ url('/articles/' . $article->slug) }}">
    <div class="interesting-article__pic">
        <img src="{{ asset($article->img) }}" alt="{{ $article->alt }}">
    </div>
    <div class="interesting-article__info">
        <div class="interesting-article__title">{{ $article->title }}</div>
        <div class="interesting-article__date">{{ $article->updated_at }}</div>
    </div>
</a>
