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
                <?= Html::a('Create Order', ['create'], ['class' => 'btn btn-success']) ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="order-index">

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'id',
                            'name',
                            'status',
                            'qty',
                            'total',
//                            'created_at',
                            [
                                'attribute' => 'created_at',
                                'format' => ['date', 'php:d M Y H:i']
                            ],
                            'updated_at',
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



