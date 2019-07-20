<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 20.07.2019
 * Time: 15:34
 */

namespace app\models;


use yii\base\Model;

class UserForm extends Model
{

    public $email;
    public $full_name;
    public $password;
    public $repassword;
    public $descriptions;
    public $age;

    public function rules()
    {
        return [
            ['email', 'required'],
            ['full_name', 'required'],
            ['password', 'required'],
            ['repassword', 'required'],
            ['descriptions', 'required'],
            ['age', 'required'],
            [['age'], 'integer'],
            [['descriptions'], 'string'],
            [['full_name'], 'string', 'max' => 255],
            [['email'],'email'],
            [['repassword'],'CheckPassword'],
            [['email'],'CheckEmail'],
        ];
    }
    public function CheckPassword($attribute, $params){
        if (!$this->hasErrors()) {

            if ($this->password!=$this->repassword) {
                $this->addError($attribute, 'Пароли не совпадают.');
            }
        }
    }
    public function CheckEmail($attribute, $params){
        if (!$this->hasErrors()) {

            if (Userlist::find()->where(['email'=>$this->email])->one()) {
                $this->addError($attribute, 'Email уже занят.');
            }
        }
    }
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'full_name' => 'ФИО',
            'age' => 'Возраст',
            'descriptions' => 'О себе',
            'email' => 'E-mail',
            'password' => 'Пароль',
            'repassword' => 'Повторите пароль',
        ];
    }
}