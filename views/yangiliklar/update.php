<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Yangiliklar */

$this->title = 'Update Yangiliklar: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Yangiliklars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'post_id' => $model->post_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="yangiliklar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
