<a class="blog-item" href="{{ url('articles/' . $slug) }}">
    <div class="blog-item__pic">
        <img src="{{ asset($img) }}" alt="{{ $img_alt }}">
    </div>
    <div class="blog-item__info">
        <div class="blog-item__title">{{ $title }}</div>
        <div class="blog-item__date">{{ $date }}</div>
    </div>
</a>
