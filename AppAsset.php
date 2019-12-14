<?php

namespace technic\test;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $sourcePath = '@vendor/technic/yii2-test/assets';

    public $css = [
        'css/style.css',
    ];
}
