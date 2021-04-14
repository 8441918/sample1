<?php
    use yii\helpers\Url;
?>
<a class="btn btn-default" href="<?= Url::to(['project', 'id' => $model->keyword->id]) ?>" >
    <?=$model->keyword->name?> &raquo;
</a>

