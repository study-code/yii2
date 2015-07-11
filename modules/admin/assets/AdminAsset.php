<?php
namespace app\modules\admin\assets;
use yii\web\AssetBundle;
/**
 * User: mo
 * Date: 2015-7-4
 * Time: 21:33
 */
class AdminAsset extends AssetBundle
{
//    public $basePath = '@webroot';
//    public $baseUrl = '@web';
    public $sourcePath = '@adminasset';
    public $css = [
        'css/site.css',
    ];
    public $js = [
        'js/validate.js',
        'http://cdn.staticfile.org/underscore.js/1.4.4/underscore-min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}