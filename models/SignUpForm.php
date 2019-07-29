<?php

namespace app\models;

use Yii;
use yii\base\Model;

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
  public function rules()
  {
    return [
      [['username', 'password', 'password_repeat', 'email'], 'required'],
      [['username', 'password', 'password_repeat', 'email'], 'trim'],

      ['password', 'string', 'min' => 6],
      ['password_repeat', 'required'],
      ['password_repeat', 'compare', 'compareAttribute'=>'password', 'message'=>"Passwords don't match" ],

      ['email', 'email']
    ];
  }

  /**
   * Finds user by [[username]]
   *
   * @return User|null
   */
  public function getUser()
  {
    if ($this->_user === false) {
      $this->_user = User::findByUsername($this->username);
    }

    return $this->_user;
  }
}
