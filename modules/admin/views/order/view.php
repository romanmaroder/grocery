<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Order */

$this->title = "Заказ № {$model->id}";
$this->params['breadcrumbs'][] = ['label' => 'Список заказов', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>


<div class="row">
	<div class="col-md-12">

		<div class="box">
			<div class="box-header with-border">
                <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Вы уверены, что хотите удалить этот заказ?',
                        'method' => 'post',
                    ],
                ]) ?>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<div class="order-view">

                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'id',
                            [
                                'attribute' => 'created_at',
                                'format'    => ['datetime', 'php:d M / Y / D - H:i'],
                            ],
                            [
                                'attribute' => 'updated_at',
                                'format'    => ['datetime', 'php:d M / Y / D - H:i'],
                            ],
                            'qty',
                            [
                                'attribute' => 'total',
                                'format'    => 'currency',
                            ],

                            [
                                'attribute' => 'status',
                                'value'     =>  $model->status ? "<span class='text-green'>Обработан</span>" : "<span class='text-red'>Новый</span>",
                                'format'    => 'html',
                            ],

                            'name',
                            'email',
                            'phone',
                            'address',
                            'note:ntext',
                        ],
                    ]) ?>

				</div>

			</div>
			<!-- /.box-body -->
		</div>
	</div>
</div>


<div class="row">
	<div class="col-md-12">


		<?php $items = $model->orderProduct ?>
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Товары в заказе</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<table class="table table-bordered">
					<tbody>
					<tr>
						<th style="width: 10px">ID</th>
						<th>Наименование</th>
						<th>Количество</th>
						<th >Цена</th>
						<th >Сумма</th>
					</tr>

                    <?php foreach ( $items as $id => $item ): ?>
						<tr>
							<td><?= $item->id ?></td>
							<td><?= $item->title ?></td>
							<td><?= $item->qty ?>шт</td>
							<td><?= $item->price ?>$</td>
							<td><?= $item->total ?></td>
						</tr>
                    <?php endforeach; ?>

					</tbody>
				</table>
			</div>
			<!-- /.box-body -->
	</div>
</div>
</div>



