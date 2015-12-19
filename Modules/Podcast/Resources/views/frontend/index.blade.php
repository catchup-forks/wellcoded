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
    <script type="text/javascript">
        $(document).ready(function(){
            $("#jquery_jplayer_1").jPlayer({
                ready: function () {
                    $(this).jPlayer("setMedia", {
                        title: "Bubble",
                        mp3: "{{ $podcast->files->first()->path }}"
                    });
                },
                cssSelectorAncestor: "#jp_container_1",
                supplied: "mp3",
                useStateClassSkin: true,
                autoBlur: false,
                smoothPlayBar: true,
                keyEnabled: true,
                remainingDuration: true,
                toggleDuration: true
            });
        });
    </script>
@endsection