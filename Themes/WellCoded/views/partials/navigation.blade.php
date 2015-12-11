<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ URL::to('/') }}">{{ Setting::get('core::site-name') }}</a>
        </div>
        <div class="navbar-collapse collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="{{ on_route('homepage') ? 'active' : '' }}">
                    <a href="{{ route('homepage') }}">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="{{ on_route('podcasts.*') ? 'active' : '' }}">
                    <a href="{{ route('podcasts.index') }}">Podcasts</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
