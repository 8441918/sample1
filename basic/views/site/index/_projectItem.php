<?php
use app\widgets\TagList;
?>
<div class="col-lg-4">
    <h2><?= $model['name'];?></h2>
    <p><?= $model['short_info'];?></p>
    <p><?= TagList::widget(['projId' => $model['id']]) ?></p>
</div>


