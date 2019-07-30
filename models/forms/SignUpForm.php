<?php

namespace app\models\forms;

use Yii;
use yii\base\Model;
use app\models\User;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class SignUpForm extends Model
{
  public $email;
  public $username;
  public $password;
  public $password_repeat;

  private $_user = false;

  /**
   * @return array the validation rules.
   */
  public function rules() {
    return [
      [['username', 'password', 'password_repeat', 'email'], 'required'],
      [['username', 'password', 'password_repeat', 'email'], 'trim'],

      ['password', 'string', 'min' => 6],

      ['password_repeat', 'required'],
      ['password_repeat', 'compare', 'compareAttribute' => 'password', 'message' => "«Password Repeat» не совпадает."],

      ['email', 'email'],
      ['email', 'unique', 'targetClass' => 'app\models\User'],
    ];
  }

  /**
   * Finds user by [[username]]
   *
   * @return User|bool
   */
//  public function getUser() {
//    if ($this->_user === false) {
//      $this->_user = User::findByUsername($this->username);
//    }
//
//    return $this->_user;
//  }

  public function save() {
    if ($this->validate()) {
      $user = new User();
      $user->email = $this->email;
      $user->name = $this->username;
      $user->hash_pass = Yii::$app->security->generatePasswordHash($this->password);

      return $user->save();
    }
    return false;
  }
}
