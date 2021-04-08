<?php

namespace app\models;
use yii\db\ActiveRecord;

class Project extends ActiveRecord
{
    public static function tableName()
    {
        return 'project_list';
    }
    
    public function getKeywords()
    {
        return $this->hasMany(ProjectKeyword::className(), ['project_id' => 'id']);
    }
}

