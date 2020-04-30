<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Order */

$this->title = "Редактировать заказ: {$model->id}";
$this->params['breadcrumbs'][] = ['label' => 'Список заказов', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => "Заказ № {$model->id}", 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>


<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
				<div class="box-body">
					<div class="order-update">

                        <?= $this->render('_form', [
                            'model' => $model,
                        ]) ?>

					</div>

				</div>

		</div>
	</div>
</div>




