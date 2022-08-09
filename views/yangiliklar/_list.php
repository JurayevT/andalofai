<?php

use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Yangiliklar */
/* @var $form yii\widgets\ActiveForm */

$file='';

if(file_exists('img/yangiliklar/'.$model->foto))
{
    if(!empty($model->foto))
        $file=$model->foto;

}

$sImageFilePath='/img/yangiliklar/'.$file;

echo "
  <div class='row shadow kard mt-4 py-0'>
      <img class='kard-image col-12 col-md-6 col-lg-5' src='".$sImageFilePath."' alt='news photo'>
      <div class='kard-body col-12 col-md-6 col-lg-7'>
        <h4 class='card-title mt-lg-3 mt-md-0' >".$model->title."</h4>
        <a href='". '/web/index.php?r=yangiliklar/view&post_id=' .$model->post_id."'>
         <p class='card-text text-muted mt-3' style='text-indent: 1rem; text-align: justify'>".\yii\helpers\StringHelper::truncateWords($model->content, 40) ."</p>
        </a>
          <div class='mt-lg-5 mt-md-3'>
            <a href='". '/web/index.php?r=yangiliklar/view&post_id=' .$model->post_id."' class='btn btn-primary btn-lg kard-link'
            style='float: left'>Batafsil</a>
            <div style='float: right; font-size: 1.2rem; transform: translateY(50%)' class='kard-kurish text-success'><i class='fa fa-eye mr-1'></i>". $model->kurish_soni ."</div>
          </div>
      </div>
  </div>
";
?>