<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('homepage') }}">WellCoded</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
            <ul class="nav navbar-nav">
                {{--<li class="{{ on_route('homepage') ? 'active' : '' }}">--}}
                    {{--<a href="{{ route('homepage') }}">Accueil <span class="sr-only">(current)</span></a>--}}
                {{--</li>--}}
                {{--<li class="{{ on_route('podcasts.*') ? 'active' : '' }}">--}}
                    {{--<a href="{{ route('podcasts.index') }}">Podcasts</a>--}}
                {{--</li>--}}
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
