<?php
use app\widgets\TagList\TagList;
?>
<div class="col-lg-4">
    <h2><?= $model['name'];?></h2>
    <p><?= $model['short_info'];?></p>
    <p><?= TagList::widget(['projId' => $model['id']]) ?></p>
    <!--p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p-->
</div>


