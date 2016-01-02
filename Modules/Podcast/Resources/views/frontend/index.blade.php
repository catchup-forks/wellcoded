@extends('layouts.master')

@section('title')
    Les podcasts | @parent
@stop

@section('meta')
    {{-- @todo --}}
@stop

@section('content')
    <div id="blue">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Podcasts</h3>
                </div>
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /blue -->

    <div class="container mtb">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                @foreach($podcasts as $podcast)
                    <h3 class="ctitle">
                        <a href="{{ route('podcasts.show', [$podcast->id, $podcast->present()->slug]) }}">
                            {{ $podcast->title }}
                        </a>
                    </h3>

                    <p><small>Posted: {{ $podcast->present()->published_at }}.</small></p>
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
@stop
