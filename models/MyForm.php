<?php

namespace app\models;
use Yii;
use yii\base\Model;

class MyForm extends Model
{
    public $name;
    public $email;
    public $file;

    public function rules(){
        return[
             [['name', 'email'], 'required', 'message' => 'Обязательное поле для заполнения'],
             ['email', 'email', 'message' => 'Не корректный e-mail адрес'],
             [['file'], 'file', 'extensions' => 'jpg, png']

        ];
    }
}
?>