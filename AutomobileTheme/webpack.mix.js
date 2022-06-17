const mix = require("laravel-mix");

if (mix == 'undefined') {
    const { mix } = require("laravel-mix");
}

require("laravel-mix-merge-manifest");

var publicPath = '../../../public/themes/automobile/assets';

if (mix.inProduction()) {
    publicPath = 'publishable/assets';
}

mix.setPublicPath(publicPath).mergeManifest();
mix.disableNotifications();

mix.js([__dirname + '/src/Resources/assets/js/app.js'], 'js/app.js')
    .copyDirectory(__dirname + '/src/Resources/assets/images', publicPath + "/images")
    .sass(__dirname + '/src/Resources/assets/sass/automobile.scss', publicPath + '/css/automobile.css')
    .options({
        processCssUrls: false
    });


if (! mix.inProduction()) {
    mix.sourceMaps();
}

if (mix.inProduction()) {
    mix.version();
}