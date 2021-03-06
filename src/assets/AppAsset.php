<?php

namespace app\assets;

/*
 * @link http://www.yiiframework.com/
 *
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

/**
 * Configuration for `backend` client script files.
 *
 * @since 4.0
 */
class AppAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@app/assets/web';

    public $css = [
        // Note: less files require a compiler (available by default on Phundament Docker images)
        // use .css alternatively
        'less/app.less',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
