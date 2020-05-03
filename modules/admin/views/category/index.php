<?php

    use yii\helpers\Html;
    use yii\grid\GridView;

    /* @var $this yii\web\View */
    /* @var $dataProvider yii\data\ActiveDataProvider */

    $this->title = 'Категории';
    $this->params['breadcrumbs'][] = $this->title;
?>


<div class="row">
	<div class="col-md-12">

		<div class="box">
			<div class="box-header with-border">
                <?= Html::a('Добавить категорию', ['create'], ['class' => 'btn btn-success']) ?>
			</div>
			<!-- /.box-header -->
			<div class="box-body">

				<div class="category-index">

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'tableOptions' => [
                            'class' => 'table table-striped table-bordered text-center'
                        ],
                        'columns'      => [
                            ['class' => 'yii\grid\SerialColumn'],

                            //                            'id',
                            //                            'parent_id',
                            [
                                'attribute' => 'parent_id',
                                'value'     => function ($data) {
                                    return $data->category->title ? $data->category->title : '';
                                }
                            ],
                            'title',
                            //                            'description',
                            //                            'keywords',

                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]); ?>


				</div>

			</div>
			<!-- /.box-body -->

		</div>


	</div>
</div>






