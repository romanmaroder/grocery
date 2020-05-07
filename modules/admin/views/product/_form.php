<?php
    use kartik\file\FileInput;
    use mihaildev\ckeditor\CKEditor;
    use mihaildev\elfinder\ElFinder;
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;

    /* @var $this yii\web\View */
    /* @var $model app\modules\admin\models\Product */
    /* @var $form yii\widgets\ActiveForm */

    mihaildev\elfinder\Assets::noConflict($this);
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

	<!--    --><? //= $form->field($model, 'category_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

	<div class="form-qroup field-product-category_id has-success">
		<label for="product-category_id" class="control-label">Родительская категория</label>

		<select name="Product[category_id]" id="product-category_id" class="form-control">

            <?= \app\components\MenuWidget::widget([
                'tpl'        => 'select_product',
                'model'      => $model,
                'cache_time' => null,
            ]) ?>
		</select>
	</div>

	<!--    --><? //= $form->field($model, 'content')->textarea(['rows' => 6]) ?>


    <?php /*echo $form->field($model, 'content')->widget(CKEditor::class, [
        'editorOptions' => [
            'preset' => 'full',
            //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
            'inline' => false, //по умолчанию false
        ],
    ]); */?>

    <?php echo $form->field($model, 'content')->widget(CKEditor::class, [

        'editorOptions' => ElFinder::ckeditorOptions(['elfinder', 'path' => 'some/sub/path'],[/* Some CKEditor Options */]),

    ]); ?>


    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'old_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

<!--    --><?//= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>

	<?php

        echo $form->field($model, 'file')->widget(FileInput::class, [
            'options' => ['accept' => 'image/*'],
            'pluginOptions' => [
                'showCaption' => false,
                'showUpload' => false,
            ],
        ]);
	?>


    <?= $form->field($model, 'is_offer')->dropDownList(['-', 'Акция']) ?>

	<div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
	</div>

    <?php ActiveForm::end(); ?>

</div>
