<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace makingmanymoney\ampleadmin;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AmpleAdminAsset extends AssetBundle
{
    public $sourcePath = '@vendor/makingmanymoney/yii2-ampleadmin/';
    public $css = [
        'material/bootstrap/dist/css/bootstrap.min.css',
        'plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css',
        'material/css/animate.css',
        'material/css/style.css',
        'material/css/colors/blue-dark.css',
    ];
    public $js = [
        //'plugins/bower_components/jquery/dist/jquery.min.js',
        //'material/bootstrap/dist/js/bootstrap.min.js',
        'plugins/bower_components/sidebar-nav/dist/sidebar-nav.js',
        'material/js/jquery.slimscroll.js',
        'material/js/waves.js',
        'plugins/bower_components/waypoints/lib/jquery.waypoints.js',
        'plugins/bower_components/counterup/jquery.counterup.min.js',
        'plugins/bower_components/raphael/raphael-min.js',
        'plugins/bower_components/morrisjs/morris.js',
        'plugins/bower_components/chartist-js/dist/chartist.min.js',
        'plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js',
        'material/js/custom.js',
        'plugins/bower_components/flot/jquery.flot.js',
        'plugins/bower_components/flot/jquery.flot.pie.js',
        'plugins/bower_components/flot/jquery.flot.time.js',
        'material/js/cbpFWTabs.js',
        'plugins/bower_components/toast-master/js/jquery.toast.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}

