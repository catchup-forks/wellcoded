<div class="container mtb">
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3" style="padding-top: 100px;">
            @foreach($podcasts as $podcast)
            <h3 class="ctitle">
                <a href="{{ route('podcasts.show', [$podcast->id, $podcast->present()->slug]) }}">
                    {{ $podcast->title }}
                </a>
            </h3>

            <p><small>Publié le {{ $podcast->present()->published_at }}.</small></p>
            @include('podcast::frontend._.player')
            <p>
                {!! $podcast->present()->excerpt !!}
            </p>
            <p class="text-right">
                <a href="{{ route('podcasts.show', [$podcast->id, $podcast->present()->slug]) }}">
                    Voir plus <i class="fa fa-chevron-right"></i>
                </a>
            </p>
            @endforeach
        </div><! --/col-lg-8 -->

    </div><! --/row -->
</div><! --/container -->
