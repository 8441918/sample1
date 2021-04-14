<?php
namespace app\widgets;
use yii\base\Widget;
use yii\data\ArrayDataProvider;
use app\models\ProjectKeyword;
use yii\widgets\ListView;

class TagList extends Widget
{
    public $projId;
    private $provider;
    public function init()
    {
        parent::init();
        $this->provider = new ArrayDataProvider([
            'allModels' => ProjectKeyword::findAll($this->projId),
            'pagination'=>false,
            /*'pagination' => [
                'pageSize' => 10,
            ]*/
        ]);
    }
    
    public function run()
    {
        echo ListView::widget([
                    'options' => [],
                    'itemOptions' => [
                        'tag' => 'span',
                    ],
                    'emptyText' => 'нет категорий',
                    'dataProvider'=>$this->provider,
                    'itemView'=>'_TagItem',
                    'summary' => '',
                ]);
    }
}

