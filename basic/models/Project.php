<?php

namespace app\models;
use yii\db\ActiveRecord;

class Project extends ActiveRecord
{
    public static function tableName()
    {
        return 'ProjectList';
    }
    
    public function getKeywords()
    {
        return $this->hasMany(ProjectKeyword::className(), ['projectId' => 'id']);
    }
}

