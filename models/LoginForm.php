<?php

namespace app\models;

use yii\base\Model;

class LoginForm extends Model
{
    public $name;
    private $_user = false;

    public function rules()
    {
        return [
            [['name'], 'required'],
            ['name', 'validateUser'],
        ];
    }

    public function validateUser($attribute, $params)
    {
        if (!$this->getUser()) {
            $this->addError($attribute, 'Użytkownik o tej nazwie nie istnieje.');
        }
    }

    public function login()
    {
        if ($this->validate()) {
            return \Yii::$app->user->login($this->getUser(), 3600 * 24 * 30);
        }

        return false;
    }

    protected function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByUsername($this->name);
        }

        return $this->_user;
    }
}



