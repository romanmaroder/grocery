<?php

    use yii\helpers\Html;
    use yii\widgets\ActiveForm;

    /* @var $this yii\web\View */
    /* @var $model app\modules\admin\models\Category */
    /* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>
	<!---->
	<!--    --><? //= $form->field($model, 'parent_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

	<div class="form-qroup field-category-parent_id has-success">
		<label for="category-parent_id" class="control-label">Родительская категория</label>

		<select name="Category[parent_id]" id="category-parent_id" class="form-control">
			<option value="0">Основная категория</option>
			<?= \app\components\MenuWidget::widget([
					'tpl'=>'select',
					'model'=> $model,
					'cache_time'=> null,
			]) ?>
		</select>
	</div>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

	<div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
	</div>

    <?php ActiveForm::end(); ?>

</div>
