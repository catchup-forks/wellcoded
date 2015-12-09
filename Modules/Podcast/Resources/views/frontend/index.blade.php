@extends('layouts.master')

@section('title')
    Les podcasts | @parent
@stop

@section('meta')
    {{-- @todo --}}
@stop

@section('content')
    <div class="row">


        <ul>
            @foreach($podcasts as $podcast)
                <h3>{{ $podcast->title }}</h3>
                <div class="description">
                    {!! $podcast->description !!}
                </div>

                <div class="player">
                    <audio src="{{ $podcast->files->first()->path }}" controls></audio>
                </div>

                <a href="{{ $podcast->files->first()->path }}">MP3</a>
            @endforeach
        </ul>

    </div>
@stop
