<?php

    use yii\helpers\Html;
    use yii\grid\GridView;

    /* @var $this yii\web\View */
    /* @var $dataProvider yii\data\ActiveDataProvider */

    $this->title = 'Список заказов';
    $this->params['breadcrumbs'][] = $this->title;
?>


<div class="row">
	<div class="col-md-12">

		<div class="box">
			<div class="box-header with-border">
                <?= Html::a('Создать заказ', ['create'], ['class' => 'btn btn-success']) ?>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<div class="order-index">

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'columns'      => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'id',
                            'name',
                            [
                                'attribute' => 'status',
                                'value'     => function ($data) {
                                    return $data->status ? "<span class='text-green'>Обработан</span>" : "<span class='text-red'>Новый</span>";
                                },
                                'format'    => 'html',
                            ],
                            'qty',
                            [
                                'attribute' => 'total',
                                'format'    => 'currency',
                            ],

                            [
                                'attribute' => 'created_at',
                                'format'    => ['datetime', 'php:d M / Y / D - H:i'],
                            ],
                            [
                                'attribute' => 'updated_at',
                                'format'    => ['datetime', 'php:d M / Y / D - H:i'],
                            ],
                            //'email:email',
                            //'phone',
                            //'address',
                            //'note:ntext',


                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]); ?>

				</div>
			</div>
			<!-- /.box-body -->

		</div>


	</div>
</div>



