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
                <li>
                    @include('podcast::frontend._.podcast')
                </li>
            @endforeach
        </ul>

    </div>
@stop

@section('scripts')
@endsection