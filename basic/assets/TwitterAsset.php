<?php

namespace app\assets;
use yii\web\AssetBundle;

class TwitterAsset extends AssetBundle{
  public $basePath = '@webroot';
  public $baseUrl = '@web';

  public $css = [
    'css\master.css'
  ];

  public $js = [
    'js\vue.min.js',
    'js\script_necessary.js'
  ];

  public $depends = [
    'yii\web\JqueryAsset',
    'app\assets\SlickAsset'
  ];
}

?>
