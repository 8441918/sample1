<?php

namespace app\models;
use yii\db\ActiveRecord;

class ProjectKeyword extends ActiveRecord{
    public static function tableName()
    {
        return 'project_keyword';
    }
    
    public function getKeyword()
    {
        return $this->hasOne(Keyword::className(), ['id' => 'keyword_id']);
    }
}
