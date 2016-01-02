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
                <h3>Podcasts</h3>
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /blue -->

    <div class="container mtb">
        <div class="row">

            <! -- BLOG POSTS LIST -->
            <div class="col-lg-8 col-lg-offset-2">
                @foreach($podcasts as $podcast)
                    @include('podcast::frontend._.podcast')
                @endforeach
            </div><! --/col-lg-8 -->

        </div><! --/row -->
    </div><! --/container -->
@stop

@section('scripts')
@endsection
