var gulp = require("gulp");
var shell = require('gulp-shell');
var elixir = require('laravel-elixir');
var themeInfo = require('./theme.json');



elixir.extend('stylistPublish', function() {
    new elixir.Task('stylistPublish', function() {
        return gulp.src('').pipe(shell("php ../../artisan stylist:publish "+themeInfo.name));
    }).watch(["**/*.less", "**/*.js"]);
});

elixir.config.assetsPath = 'resources';

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function (mix) {

    /**
     * Compile less
     */
    mix.less([
        "main.less"
    ], './assets/css')
    .stylistPublish();

    /**
     * Concat scripts
     */
    mix.scripts([
        '/vendor/jquery/dist/jquery.js',
        '/vendor/bootstrap/dist/js/bootstrap.min.js',
        '/vendor/prism/prism.js',
        '/vendor/mediaelement/build/mediaelement-and-player.min.js',
        '/js/bootswatch.js'
    ], './assets/js', 'resources');

    /**
     * Copy Bootstrap fonts
     */
    mix.copy(
        'resources/vendor/bootstrap/fonts',
        'assets/fonts'
    );

    /**
     * Copy Fontawesome fonts
     */
    mix.copy(
        'resources/vendor/font-awesome/fonts',
        'assets/fonts'
    );

    mix.copy(
        [   'resources/vendor/mediaelement/build/bigplay.svg',
            'resources/vendor/mediaelement/build/bigplay.png',
            'resources/vendor/mediaelement/build/background.png',
            'resources/vendor/mediaelement/build/loading.gif',
            'resources/vendor/mediaelement/build/background.png',
            'resources/vendor/mediaelement/build/controls.svg',
            'resources/vendor/mediaelement/build/controls.png',
            'resources/vendor/mediaelement/build/background.png',
            'resources/vendor/mediaelement/build/background.png',
            'resources/vendor/mediaelement/build/background.png',
            'resources/vendor/mediaelement/build/background.png',
            'resources/vendor/mediaelement/build/background.png',
            'resources/vendor/mediaelement/build/background.png',
            'resources/vendor/mediaelement/build/background.png',
            'resources/vendor/mediaelement/build/jumpforward.png',
            'resources/vendor/mediaelement/build/skipback.png'],
        'assets/img/medialement'
    )
});
