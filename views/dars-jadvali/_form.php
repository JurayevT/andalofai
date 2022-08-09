<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DarsJadvali */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dars-jadvali-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'guruh') ?>

    <?= $form->field($model, 'dushanba1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dushanba2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dushanba3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dushanba4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seshanba1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seshanba2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seshanba3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seshanba4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chorshanba1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chorshanba2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chorshanba3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chorshanba4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'payshanba1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'payshanba2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'payshanba3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'payshanba4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'juma1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'juma2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'juma3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'juma4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shanba1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shanba2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shanba3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shanba4')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
