<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Notebook extends ActiveRecord {
    public static function tableName() {
        return 'notebook';
    }
    public function rules() {
        return [
            [['id'], 'integer'],
            [['title', 'body'], 'required'],
            [['title', 'body'], 'string', 'max' => 255],
            [['date'], 'safe'],
        ];
    }
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'title' => 'Tytuł',
            'body' => 'Treść',
            'date' => 'Data utworzenia',
        ];
    }
}
