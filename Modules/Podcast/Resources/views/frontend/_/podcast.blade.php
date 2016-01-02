<a href="{{ route('podcasts.show', [$podcast->id, $podcast->present()->slug]) }}"><h3 class="ctitle">{{ $podcast->title }}</h3></a>

<p><csmall>Posted: {{ $podcast->present()->published_at }}.</csmall></p>

{!! $podcast->description !!}

<div class="player">
    <audio class="mejs-player" src="{{ $podcast->files->first()->path }}" data-mejsoptions='{"features": ["playpause","progress","current","duration","volume", "speed"]}'></audio>
</div>

<p><a href="{{ route('podcasts.show', [$podcast->id, $podcast->present()->slug]) }}">[Read More]</a></p>
