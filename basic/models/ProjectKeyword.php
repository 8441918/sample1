<?php

namespace app\models;
use yii\db\ActiveRecord;

class ProjectKeyword extends ActiveRecord{
    public static function tableName()
    {
        return 'ProjectKeyword';
    }
    
    public function getKeyword()
    {
        return $this->hasOne(Keyword::className(), ['id' => 'keywordid']);
    }
}
