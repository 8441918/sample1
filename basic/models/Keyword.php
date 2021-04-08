<?php

namespace app\models;
use yii\db\ActiveRecord;

class Keyword extends ActiveRecord{
    public static function tableName()
    {
        return 'keyword';
    }
}
