<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Order */

$this->title = "Редактировать заказ: {$model->id}";
$this->params['breadcrumbs'][] = ['label' => 'Список заказов', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="order-update">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
