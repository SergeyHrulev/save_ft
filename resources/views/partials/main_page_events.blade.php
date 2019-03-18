<div class="interesting-event__item">
    <div class="interesting-event__pic">
        <img src="{{ asset($img) }}" alt="{{ $alt }}">
    </div>
    <div class="interesting-event__info">
        <a class="interesting-event__name" href="{{ url('event/' . $slug) }}">{{ $title }}</a>
        <div class="interesting-event__date">{{ $created->formatLocalized('%Y %B %d') }}</div>
    </div>
</div>
