<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Zuev Roman
 *
 */
class MyAsset extends AssetBundle
{
  public $basePath = '@webroot';
  public $baseUrl = '@web';
  public $css = [
    'css/bootstrap-grid.min.css',
    'css/style.css',
  ];
  public $js = [
  ];
  public $depends = [
    'yii\web\YiiAsset',
  ];
}
