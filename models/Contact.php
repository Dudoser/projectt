<?php

namespace app\models;

use yii\base\Model;

class Contact extends model
{
    

    public $name;
    public $email;
    public $phone;
    public $message;



    public function rules()
    {
        return [
            [['name', 'email', 'message' ], 'required'],
            ['email', 'email'],
            [['phone'], 'number'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'email' => 'E-mail',
            'phone' => 'Телефон',
            'message' => 'Сообщение'
        ];
    }
}
