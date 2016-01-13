@extends('layouts.master')

@section('title')
    {{ $podcast->title }} | @parent
@stop

@section('meta')
    {{-- @todo --}}
@stop

@section('content')

    <div id="blue">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                        <div class="back-link">
                            <a href="{{ route('homepage') }}"><i class="fa fa-chevron-left"></i></a>
                        </div>
                </div>
                <div class="col-md-6">
                    <h3 class="text-center podcast-title">
                        {{ $podcast->title }}
                        <small>Publié le : {{ $podcast->present()->published_at }} | Durée : {{ $podcast->duration }} | Tags : {{ $podcast->tags }}</small>
                    </h3>
                </div>
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /blue -->

    <div class="container mtb">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                @include('podcast::frontend._.player')
                {!! $podcast->description !!}
            </div>
        </div>
    </div><! --/container -->
@stop
