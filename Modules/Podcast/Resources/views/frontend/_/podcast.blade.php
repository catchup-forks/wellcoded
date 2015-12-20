<h3><a href="{{ route('podcasts.show', [$podcast->id, $podcast->present()->slug]) }}">{{ $podcast->title }}</a></h3>

<div class="meta">
    Date: {{ $podcast->present()->published_at }}, Tags: {{ $podcast->tags }}
</div>

<div class="description">
    {!! $podcast->description !!}
</div>

<div class="player">
    <audio class="mejs-player" src="{{ $podcast->files->first()->path }}" data-mejsoptions='{"features": ["playpause","progress","current","duration","volume", "speed"]}'></audio>
</div>

<a href="{{ $podcast->files->first()->path }}">MP3</a>