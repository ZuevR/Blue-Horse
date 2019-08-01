<?php

namespace app\controllers;

use app\models\forms\SignUpForm;
use Yii;

class UserController extends \yii\web\Controller
{
  public function actionIndex() {
    return $this->render('index');
  }

  public function actionSignup() {
    if (!Yii::$app->user->isGuest) {
      return $this->goHome();
    }

    $model = new SignUpForm();
    if ($model->load(Yii::$app->request->post()) && $model->save()) {
      return $this->render('after', [
        'username' => $model->username,
        'email' => $model->email
      ]);
    }

    return $this->render('signup', [
      'model' => $model,
    ]);
  }


}
