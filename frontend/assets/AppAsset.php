<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
         // 'css/site.css',
        'css/style.css',
        'fonts/material-icon/css/material-design-iconic-font.min.css',
        'css/sustyle.css',

        // 'lib/bootstrap/css/bootstrap.min.css',
        'lib/font-awesome/css/font-awesome.min.css',
        'lib/animate/animate.min.css',
        'lib/venobox/venobox.css',
        'lib/owlcarousel/assets/owl.carousel.min.css',
    ];
    public $js = [
        'lib/jquery/jquery.min.js',
        'lib/jquery/jquery-migrate.min.js',
        'lib/bootstrap/js/bootstrap.bundle.min.js',
        'lib/easing/easing.min.js',
        'lib/superfish/hoverIntent.js',
        'lib/superfish/superfish.min.js',
        'lib/wow/wow.min.js',
        'lib/venobox/venobox.min.js',
        'js/main.js',
        'vendor/jquery/jquery.min.js',
        'js/sumain.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
