@extends('layouts.master')

@section('title')
    Les podcasts | @parent
@stop

@section('meta')
    {{-- @todo --}}
@stop

@section('content')
    <div class="row">
        @include('podcast::frontend._.podcast')
    </div>
@stop
