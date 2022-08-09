<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DarsJadvali */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dars Jadvalis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="dars-jadvali-view">

<?php
    if (!\Yii::$app->user->isGuest) {
?>

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'guruh',
            'dushanba1',
            'dushanba2',
            'dushanba3',
            'dushanba4',
            'seshanba1',
            'seshanba2',
            'seshanba3',
            'seshanba4',
            'chorshanba1',
            'chorshanba2',
            'chorshanba3',
            'chorshanba4',
            'payshanba1',
            'payshanba2',
            'payshanba3',
            'payshanba4',
            'juma1',
            'juma2',
            'juma3',
            'juma4',
            'shanba1',
            'shanba2',
            'shanba3',
            'shanba4',
        ],
    ]) 
    ?>
<?php
    }
?>

<h1 class="text-center text-primary mb-4"><?= $model->guruh ?>-GURUH</h1>

<div id="dushanba">
    <div class="card  text-center" style="font-weight: 600;">
      <!-- <div class="card-header  bg-primary"> -->
        <a class="card-link card-header bg-primary text-light" style="font-size: 1.5rem" data-toggle="collapse" href="#collapseOne">
          Dushanba
        </a>
      <!-- </div> -->
      <div id="collapseOne" class="collapse show" data-parent="#dushanba">
        <div class="card-body" style="font-size: 1.3rem">
          <ul class="list-group">
            <li class="list-group-item list-group-item-action text-primary"><?= $model->dushanba1; ?></li>
            <li class="list-group-item list-group-item-action text-primary"><?= $model->dushanba2; ?></li>
            <li class="list-group-item list-group-item-action text-primary"><?= $model->dushanba3; ?></li>
            <?php if ($model->dushanba4 != NULL) { ?>
            <li class="list-group-item list-group-item-action text-primary"><?= $model->dushanba4; ?></li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
</div>

<div id="seshanba">
    <div class="card  text-center" style="font-weight: 600;">
      <!-- <div class="card-header  bg-primary"> -->
        <a class="card-link card-header bg-primary text-light" style="font-size: 1.5rem" data-toggle="collapse" href="#collapseTwo">
          Seshanba
        </a>
      <!-- </div> -->
      <div id="collapseTwo" class="collapse show" data-parent="#seshanba">
        <div class="card-body" style="font-size: 1.3rem">
          <ul class="list-group">
            <li class="list-group-item list-group-item-action text-primary"><?= $model->seshanba1; ?></li>
            <li class="list-group-item list-group-item-action text-primary"><?= $model->seshanba2; ?></li>
            <li class="list-group-item list-group-item-action text-primary"><?= $model->seshanba3; ?></li>
            <?php if ($model->seshanba4 != NULL) { ?>
            <li class="list-group-item list-group-item-action text-primary"><?= $model->seshanba4; ?></li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
</div>

<div id="chorshanba">
    <div class="card  text-center" style="font-weight: 600;">
      <!-- <div class="card-header  bg-primary"> -->
        <a class="card-link card-header bg-primary text-light" style="font-size: 1.5rem" data-toggle="collapse" href="#collapseThree">
          Chorshanba
        </a>
      <!-- </div> -->
      <div id="collapseThree" class="collapse show" data-parent="#chorshanba">
        <div class="card-body" style="font-size: 1.3rem">
          <ul class="list-group">
            <li class="list-group-item list-group-item-action text-primary"><?= $model->chorshanba1; ?></li>
            <li class="list-group-item list-group-item-action text-primary"><?= $model->chorshanba2; ?></li>
            <li class="list-group-item list-group-item-action text-primary"><?= $model->chorshanba3; ?></li>
            <?php if ($model->chorshanba4 != NULL) { ?>
            <li class="list-group-item list-group-item-action text-primary"><?= $model->chorshanba4; ?></li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
</div>

<div id="payshanba">
    <div class="card  text-center" style="font-weight: 600;">
      <!-- <div class="card-header  bg-primary"> -->
        <a class="card-link card-header bg-primary text-light" style="font-size: 1.5rem" data-toggle="collapse" href="#collapseFour">
          Payshanba
        </a>
      <!-- </div> -->
      <div id="collapseFour" class="collapse show" data-parent="#payshanba">
        <div class="card-body" style="font-size: 1.3rem">
          <ul class="list-group">
            <li class="list-group-item list-group-item-action text-primary"><?= $model->payshanba1; ?></li>
            <li class="list-group-item list-group-item-action text-primary"><?= $model->payshanba2; ?></li>
            <li class="list-group-item list-group-item-action text-primary"><?= $model->payshanba3; ?></li>
            <?php if ($model->payshanba4 != NULL) { ?>
            <li class="list-group-item list-group-item-action text-primary"><?= $model->payshanba4; ?></li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
</div>

<div id="juma">
    <div class="card  text-center" style="font-weight: 600;">
      <!-- <div class="card-header  bg-primary"> -->
        <a class="card-link card-header bg-primary text-light" style="font-size: 1.5rem" data-toggle="collapse" href="#collapseFive">
          Juma
        </a>
      <!-- </div> -->
      <div id="collapseFive" class="collapse show" data-parent="#juma">
        <div class="card-body" style="font-size: 1.3rem">
          <ul class="list-group">
            <li class="list-group-item list-group-item-action text-primary"><?= $model->juma1; ?></li>
            <li class="list-group-item list-group-item-action text-primary"><?= $model->juma2; ?></li>
            <li class="list-group-item list-group-item-action text-primary"><?= $model->juma3; ?></li>
            <?php if ($model->juma4 != NULL) { ?>
            <li class="list-group-item list-group-item-action text-primary"><?= $model->juma4; ?></li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
</div>

<div id="shanba">
    <div class="card  text-center" style="font-weight: 600;">
      <!-- <div class="card-header  bg-primary"> -->
        <a class="card-link card-header bg-primary text-light" style="font-size: 1.5rem" data-toggle="collapse" href="#collapseSix">
          Shanba
        </a>
      <!-- </div> -->
      <div id="collapseSix" class="collapse show" data-parent="#shanba">
        <div class="card-body" style="font-size: 1.3rem">
          <ul class="list-group">
            <li class="list-group-item list-group-item-action text-primary"><?= $model->shanba1; ?></li>
            <li class="list-group-item list-group-item-action text-primary"><?= $model->shanba2; ?></li>
            <li class="list-group-item list-group-item-action text-primary"><?= $model->shanba3; ?></li>
            <?php if ($model->shanba4 != NULL) { ?>
            <li class="list-group-item list-group-item-action text-primary"><?= $model->shanba4; ?></li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
</div>

<!-- <div id="accordion">
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
          Collapsible Group Item #3
        </a>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordion">
        <div class="card-body">
          Lorem ipsum..
        </div>
      </div>
    </div>

</div> -->

</div>
