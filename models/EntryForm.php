<?php

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model {
    public $name;
    public $email;
    
    public function rules() {
        return [ 
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}
/*    $model = new EntryForm();

$model->name = 'quit';
$model->email = 'kkcc';

if ($model->validate()) {
    //ok
} else {
    //fail
    $model->getErrors();
}



?>*/