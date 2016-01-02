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
                <div class="col-md-2">
                        <div class="back-link">
                            <a href="{{ route('podcasts.index') }}"><i class="fa fa-chevron-left"></i></a>
                        </div>
                </div>
                <div class="col-md-8">
                    <h3 class="text-center podcast-title">
                        {{ $podcast->title }}
                        <small>Posted: {{ $podcast->present()->published_at }}.</small>
                    </h3>
                </div>
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /blue -->

    <div class="container mtb">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                @include('podcast::frontend._.player')
                {!! $podcast->description !!}
            </div>
        </div>
    </div><! --/container -->
@stop
