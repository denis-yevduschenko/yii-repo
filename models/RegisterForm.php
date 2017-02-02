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
class RegisterForm extends Model{
    public $last_name;
    public $first_name;
    public $username;
    public $password;
    public $email;
    public $confirm_password;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['username', 'password', 'last_name', 'first_name', 'email','password', 'confirm_password'], 'required'],
            // password is validated by validatePassword()
            ['confirm_password', 'confirmPassword'],
            ['email', 'email'],
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function confirmPassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            if ($this->password !== $this->confirm_password) {
                $this->addError($attribute, 'Password doesn\'t match.');
            }
        }
    }
}
