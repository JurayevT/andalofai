<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dars Jadvali';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dars-jadvali-index">

    <?php 

    if (!\Yii::$app->user->isGuest) {

    ?>

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Dars Jadvali', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'guruh',
            'dushanba1',
            'dushanba2',
            // 'dushanba3',
            // 'dushanba4',
            'seshanba1',
            // 'seshanba2',
            // 'seshanba3',
            //'seshanba4',
            'chorshanba1',
            // 'chorshanba2',
            // 'chorshanba3',
            //'chorshanba4',
            'payshanba1',
            // 'payshanba2',
            // 'payshanba3',
            //'payshanba4',
            'juma1',
            //'juma2',
            //'juma3',
            //'juma4',
            'shanba1',
            //'shanba2',
            //'shanba3',
            //'shanba4',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php 
    }
    ?>

    <h2 class="text-center">Birinchi kurslar dars jadvali:</h2>
        <div class="list-group mt-4 text-center" style="font-size: 1.5rem; font-weight: 600;">
            <a href="<?= Url::to(['/dars-jadvali/guruh101']) ?>" class="list-group-item list-group-item-action">101-guruh</a>
            <a href="<?= Url::to(['/dars-jadvali/guruh102']) ?>" class="list-group-item list-group-item-action">102-guruh</a>
            <a href="<?= Url::to(['/dars-jadvali/guruh103']) ?>" class="list-group-item list-group-item-action">103-guruh</a>
            <a href="<?= Url::to(['/dars-jadvali/guruh104']) ?>" class="list-group-item list-group-item-action">104-guruh</a>
            <a href="<?= Url::to(['/dars-jadvali/guruh105']) ?>" class="list-group-item list-group-item-action">105-guruh</a>
            <a href="<?= Url::to(['/dars-jadvali/guruh106']) ?>" class="list-group-item list-group-item-action">106-guruh</a>
        </div>


    <h2 class="text-center mt-5">Ikkinchi kurslar dars jadvali:</h2>
        <div class="list-group mt-4 text-center" style="font-size: 1.5rem; font-weight: 600;">
            <a href="<?= Url::to(['/dars-jadvali/guruh201']) ?>" class="list-group-item list-group-item-action">201-guruh</a>
            <a href="<?= Url::to(['/dars-jadvali/guruh202']) ?>" class="list-group-item list-group-item-action">202-guruh</a>
            <a href="<?= Url::to(['/dars-jadvali/guruh203']) ?>" class="list-group-item list-group-item-action">203-guruh</a>
            <a href="<?= Url::to(['/dars-jadvali/guruh204']) ?>" class="list-group-item list-group-item-action">204-guruh</a>
            <a href="<?= Url::to(['/dars-jadvali/guruh205']) ?>" class="list-group-item list-group-item-action">205-guruh</a>
            <a href="<?= Url::to(['/dars-jadvali/guruh206']) ?>" class="list-group-item list-group-item-action">206-guruh</a>
        </div>

</div>
