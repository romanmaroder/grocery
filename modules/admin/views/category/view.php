<?php

    use yii\helpers\Html;
    use yii\widgets\DetailView;

    /* @var $this yii\web\View */
    /* @var $model app\modules\admin\models\Category */

    $this->title = $model->title;
    $this->params['breadcrumbs'][] = ['label' => 'Категории', 'url' => ['index']];
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
                        'confirm' => 'Вы уверены, что хотите удалить эту категорию?',
                        'method'  => 'post',
                    ],
                ]) ?>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<div class="category-view">

                    <?= DetailView::widget([
                        'model'      => $model,
                        'attributes' => [
                            'id',
                            //'parent_id'
                            [
                                'attribute' => 'parent_id',
                                'value'     => isset($model->category->title) ? '<a href="' . \yii\helpers\Url::to(['category/view','id' => $model->category->id]) . '"><b>' . $model->category->title . '</b></a>' : "<i>Основная категория</i> ",
                                'format'    => 'html',
                            ],
                            'title',
                            'description',
                            'keywords',
                        ],
                    ]) ?>

				</div>
			</div>
		</div>
	</div>
</div>


