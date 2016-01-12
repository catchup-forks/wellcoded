@extends('layouts.master')

@section('title')
    The Wellcoded Podcast
@stop

@section('meta')
    {{-- @todo --}}
@stop

@section('content')
    @include('podcast::frontend._.podcast-index')
@stop
