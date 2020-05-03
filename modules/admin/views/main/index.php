<?php

    $this->title = 'Статистика магазина';
    $this->params['breadcrumbs'][] = $this->title;

?>

<div class="row">

<!--	Заказы-->
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-aqua">
			<div class="inner">
				<h3><?= $orders ?></h3>

				<p>Заказы</p>
			</div>
			<div class="icon">
				<i class="ion ion-bag"></i>
			</div>
			<a href="<?= \yii\helpers\Url::to(['order/index']) ?>" class="small-box-footer">Все заказы <i
						class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div>

<!--	Товары-->
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-green">
			<div class="inner">
				<h3><?= $products ?></h3>

				<p>Товары</p>
			</div>
			<div class="icon">
				<i class="fa fa-barcode"></i>
			</div>
			<a href="<?= \yii\helpers\Url::to(['product/index']) ?>" class="small-box-footer">Все товары <i
						class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div>


<!--	Категории-->
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-yellow">
			<div class="inner">
				<h3><?= $categories ?></h3>

				<p>Категорий</p>
			</div>
			<div class="icon">
				<i class="fa fa-list-ol"></i>
			</div>
			<a href="<?= \yii\helpers\Url::to(['category/index']) ?>" class="small-box-footer">Все категории <i
						class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div>

</div>