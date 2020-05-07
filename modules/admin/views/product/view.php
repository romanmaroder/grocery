<?php

    use yii\helpers\Html;
    use yii\widgets\DetailView;

    /* @var $this yii\web\View */
    /* @var $model app\modules\admin\models\Product */

    $this->title = $model->title;
    $this->params['breadcrumbs'][] = ['label' => 'Товары', 'url' => ['index']];
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
                    'data'  => [
                        'confirm' => 'Вы уверены, что хотите удалить этот товар?',
                        'method'  => 'post',
                    ],
                ]) ?>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<div class="product-view">

                    <?= DetailView::widget([
                        'model'      => $model,
                        'attributes' => [
                            'id',
                            //                            'category_id',
                            [
                                'attribute' => 'category_id',
                                'value'     => "<i>{$model->category->title}</i>",
                                'format'    => 'html',
                            ],
                            'title',
                            'content:html',
                            'price',
                            'old_price',
                            'description',
                            'keywords',
                            //                            'img',
                            [
                                'attribute' => 'img',
                                'value'     => "/$model->img",
                                'format'    => ['image', ['width' => '100', 'height' => '100']],
                            ],
                            //                            'is_offer',
                            [
                                'attribute' => 'is_offer',
                                'value'     => $model->is_offer ? 'Акция' : ' - ',
                            ]
                        ],
                    ]) ?>

				</div>
			</div>
		</div>
	</div>
</div>




