<?php
use yii\widgets\ListView;
/* @var $this yii\web\View */

$this->title = 'Привет';
//Yii::$app->session->setFlash('info', 'This is the message');
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Знакомимся</h1>

        <p class="lead">
            Так получилось, что я начинаю искать работу и этот сайт написан
            с единственной целью: рассказать о себе и выполненных мною проектах.
        </p>
        <p>
        что должна уметь страница
        <ul>
            <li>отображенние списка проектов</li>
            <li>информация по выбранному проекту</li>
            <li>форма добавления и редактирования проекта</li>
            <li>форма добавления и редактирования ключевых слов</li>
        </ul>
        </p>
        
        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">
            <?php 
                echo ListView::widget([
                    'options' => ['class' => 'row'],
                    'dataProvider'=>$dataProvider,
                    'itemView'=>'_projectItem'
                ]);
/*
            foreach ($projects AS $prj):
                echo $this->render('projectItem', ['project'=>$prj]); 
            endforeach;
 
 */
            ?>
    </div>
</div>
