<?php

/* @var $content string */

use yii\helpers\Html;
use app\assets\MyAsset;
use yii\widgets\Menu;

MyAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
  <meta charset="<?= Yii::$app->charset ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php $this->registerCsrfMetaTags() ?>
  <title><?= Html::encode($this->title) ?></title>
  <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
  <header class="header">
    <div class="container">
      <div class="header-inner">

        <div class="logo">
          <img src="/assets/images/logo.png" alt="logo">
        </div>

        <nav class="menu main">
          <?php echo Menu::widget([
            'items' => [
              ['label' => 'Home',  'url' => ['site/index']],
              ['label' => 'Store', 'url' => ['site/about']],
              ['label' => 'Parties', 'url' => ['site/services']],
              ['label' => 'Account Details', 'url' => ['site/contacts']],
              ['label' => 'About', 'url' => ['site/about']],
            ],
            'itemOptions' => ['class'=>'menu-item']
          ]);
          ?>
        </nav>

        <nav class="menu auth">
          <?php echo Menu::widget([
            'items' => [
              ['label' => 'Registration',  'url' => ['/user/signup']],
              ['label' => 'Login', 'url' => ['/site/login']],
            ],
            'itemOptions' => ['class'=>'menu-item colored']
          ]);
          ?>
        </nav>

      </div>
    </div>
  </header>
  <div class="main">
    <div class="container">
      <?= $content ?>
    </div>
  </div>
</div>

<footer class="footer">
  <div class="container">
    <div class="footer-inner">
      <p class="pull-left">&copy; Blue Horse <?= date('Y') ?></p>
      <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
  </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
