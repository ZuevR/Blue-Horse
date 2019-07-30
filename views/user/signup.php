<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Registration';

?>
<div class="site-sign-up">
  <h1 class="page-title"><?= Html::encode($this->title) ?></h1>

  <div class="row">
    <div class="col-6">

      <?php $form = ActiveForm::begin([
        'id' => 'sign-up-form',
        'options' => ['class' => 'site-form'],
        'layout' => 'horizontal',
        'fieldConfig' => [
          'template' => "<div class='row align-items-center'>" .
                          "<div class='col-3'>{label}</div>" .
                          "<div class='col-9'>{input}</div>" .
                        "</div>" .
                        "<div class='row align-items-center error'>" .
                          "<div class='offset-3'></div>" .
                          "<div class='col-9'>{error}</div>" .
                        "</div>",
          'labelOptions' => ['class' => ''],
        ],
      ]); ?>

      <?= $form->field($model, 'username')->label('Nickname *')->textInput(['autofocus' => true]) ?>

      <?= $form->field($model, 'email')->label('Email *')->input('email') ?>

      <?= $form->field($model, 'password')->label('Password *')->passwordInput() ?>

      <?= $form->field($model, 'password_repeat')->label('Repeat password *')->passwordInput() ?>

      <div class="form-group">
        <?= Html::submitButton('Ask to register', ['class' => 'site-button', 'name' => 'login-button']) ?>
      </div>

      <?php ActiveForm::end(); ?>
    </div>

    <div class="col-6">
      <div class="sign-up-info">
        <h2 class="info-title">Информация для новых пользователей</h2>
        <ul class="info-content">
          <li class="point">Для регистрации в системе заполните поля и нажмите кнопку “Запросить регистрацию“.</li>
          <li class="point">Поля отмеченные звездочкой обязательны к заполнению.</li>
          <li class="point">При заполнении поля “Nickname“ указывайте ник вашего основного персоонажа.</li>
          <li class="point important">Важно: В случае успешной отправки ваших данных, только администратор может добавить ваш аккаунт в систему!</li>
        </ul>
      </div>
    </div>

  </div>

</div>
