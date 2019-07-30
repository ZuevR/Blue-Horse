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
    $model = new SignUpForm();

    if ($model->load(Yii::$app->request->post()) && $model->save()) {
      $this->redirect(['user/after']);
    }

    return $this->render('signup', [
      'model' => $model,
    ]);
  }


}
