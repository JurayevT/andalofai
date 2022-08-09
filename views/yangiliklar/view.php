<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Yangiliklar */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Yangiliklars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="yangiliklar-view">

    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
<?php if (! \Yii::$app->user->isGuest): ?>
    <p>
        <?= Html::a('Update', ['update', 'post_id' => $model->post_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'post_id' => $model->post_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
<?php endif; ?>

    <div class="card shadow" style="width:100%">
        <img class="card-img-top" src="<?= '/img/yangiliklar/'.$model->foto; ?>" alt="Card image" style="width:100%">
        <div class="card-body pb-2">
            <h5 class="card-title" style="float: right"><?= $model->izoh; ?></h5>
            <p class="card-text" style="text-indent: 1rem; clear: both; text-align: justify"><?= $model->content; ?></p>
            <div class="text-muted mt-4">
                <div style="float: left">Muallif: <?= $model->author; ?></div>
                <div style="float: right">Yaratilgan vatq: <b><?= \Yii::$app->formatter->asRelativeTime($model->created_at); ?></b></div>
            </div>
        </div>
    </div>

<!--    --><?//= DetailView::widget([
//        'model' => $model,
//        'attributes' => [
//            'post_id',
//            'foto',
//            'title',
//            'izoh',
//            'content',
//            'author',
//            'kurish_soni',
//            'created_at',
//            'updated_at',
//        ],
//    ]) ?>

</div>
