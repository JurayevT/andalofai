<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DarsJadvali */

$this->title = 'Dars Jadvali Yaratish';
$this->params['breadcrumbs'][] = ['label' => 'Dars Jadvalis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dars-jadvali-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
