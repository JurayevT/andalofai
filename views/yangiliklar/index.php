<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Yangiliklar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yangiliklar-index">

    <h1 class="mb-5"><?= Html::encode($this->title) ?></h1>
    <?php
    if (! \Yii::$app->user->isGuest):
    ?>
    <p>
        <?= Html::a('Create Yangiliklar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

            'post_id',
//            'foto',
            'title',
            'izoh',
//            'content',
            'author',
            'kurish_soni',
            //'created_at',
            //'updated_at',

            [
                    'class' => 'yii\grid\ActionColumn',
//                'template' => '{view}{update}{delete}',
                    'buttons' => [
                        'view' => function($url, $model){
                            return Html::a("<span class='fa fa-eye mr-1'></span>",
                                ['yangiliklar/view', 'post_id' => $model->post_id]);
                        },
                        'update' => function($url, $model){
                            return Html::a("<span class='fa fa-pencil mr-1'></span>",
                                ['yangiliklar/update', 'post_id' => $model->post_id]);
                        },
                        'delete' => function($url, $model){
                            return Html::a("<span class='fa fa-trash'></span>",
                                ['yangiliklar/delete', 'post_id' => $model->post_id],
                                [ 'data-method' => 'post' ]
                            );
                        }
                ]
            ],
        ],
    ]); ?>
    <?php
    endif;
    ?>

    <?= \yii\widgets\ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class'=>'container'],
        'itemView' =>'_list',
        'summaryOptions' =>['class' => 'col-12 d-none'],
        'pager'=>[
            'class' => \yii\bootstrap4\LinkPager::class,
            'options' =>['class' => 'col-12 mt-2'],
            'maxButtonCount'=>10,
        ],
        'options' => ['class' => 'row']
    ]);?>

</div>
