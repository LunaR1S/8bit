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
class LoginForm extends Model
{
    public $email;
    public $password;



    public function rules()
    {
        return [
            [['email'],'required'],
            [['password'],'required'],
            [['password'],'CheckAccount'],
        ];
    }

    public function CheckAccount($attribute, $params){
        if (!$this->hasErrors()) {

            if (!Userlist::find()->where(['email'=>$this->email, 'password'=>$this->password])->one()) {
                $this->addError($attribute, 'Email или пароль не верны.');
            }
        }
    }
    public function attributeLabels()
    {
        return [
            'email' => 'E-mail',
            'password' => 'Пароль',
        ];
    }
}
