<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\StringHelper;

$this->title = 'AndALofAI';
?>
<div class="site-index pt-0">

    <div id="fon">
        <?= Html::img('@web/img/fon2.jpg', ['alt' => "Litsey fon"]); ?>
        <!-- <img src="/../../web/img/yangiliklar/fon2.jpg" alt="background image" /> -->
    </div>
<div class="container">
    <div class="jumbotron container-fluid mt-0 text-center bg-transparent">
        <h1 class="my-4 my-lg-5 text-primary" style="font-size: 2.2rem">Akademik litseyimizda mavjud ta'lim yo'nalishlari:</h1>
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#aniq_texnika" data-slide-to="0"></li>
                <li data-target="#aniq_iqtisod" data-slide-to="1"></li>
                <li data-target="#tabiy" data-slide-to="2" class="active"></li>
                <li data-target="#ijtimoiy" data-slide-to="3"></li>
                <li data-target="#xorijiy" data-slide-to="4"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item">
                    <?= Html::img('@web/img/slayd/aniq_texnika.jpg', ['alt' => "Aniq fanlar", 'class' => "car-img", 'width' => "100%"]); ?>
                    <div class="carousel-caption">
                        <h3>Aniq fanlar(texnika)</h3>
                        <p class="d-none d-md-block">Matematika va fizika fanlari chuqurlashtirib o'qitiladigon guruhlar</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <?= Html::img('@web/img/slayd/aniq_iqtisod.jpg', ['alt' => "Aniq fanlar", 'class' => "car-img", 'width' => "100%"]); ?>
                    <div class="carousel-caption">
                        <h3>Aniq fanlar(Iqtisod)</h3>
                        <p class="d-none d-md-block">Matematika va Ingliz tili fanlari chuqurlashtirib o'qitiladigon guruhlar</p>
                    </div>
                </div>
                <div class="carousel-item active">
                    <?= Html::img('@web/img/slayd/tabiy.jpg', ['alt' => "Tabiiy fanlar", 'class' => "car-img", 'width' => "100%"]); ?>
                    <div class="carousel-caption">
                        <h3>Tabiy fanlar</h3>
                        <p class="d-none d-md-block">Biologiya va Kimyo fanlari chuqurlashtirib o'qitiladigon guruhlar</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <?= Html::img('@web/img/slayd/ijtimoiy.jpg', ['alt' => "Ijtimoiy gumanitar", 'class' => "car-img", 'width' => "100%"]); ?>
                    <div class="carousel-caption">
                        <h3>Ijtimoiy gumanitar</h3>
                        <p class="d-none d-md-block">Tarix-Ona tili va Ingliz tili fanlari chuqurlashtirib o'qitiladigon guruhlar!!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <?= Html::img('@web/img/slayd/xorijiy.jpg', ['alt' => "Xorijiy filologiya", 'class' => "car-img", 'width' => "100%"]); ?>
                    <div class="carousel-caption">
                        <h3>Xorijiy filologiya</h3>
                        <p class="d-none d-md-block">Ingliz tili-Tarix va Ona tili fanlari chuqurlashtirib o'qitiladigon guruhlar!!</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>

    <div class="body-content">

    <h1 class="my-3 my-lg-4 text-primary text-center" style="font-size: 2.2rem">Video Yangiliklar:</h1>

    <div class="container py-3">
      	<iframe style="
        display: block;
        width: 70%;
        margin: 1rem auto;
        height: 450px;" class="navoiy1" src="https://youtu.be/etYqEU_oPuM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <p class="text-center" style="font-size:1.4rem;font-weight:500;">AQXAI qoshidagi akademik litseyi  "Ulug'imsan Vatanim" mavzusida tayyorlagan video roligi.
        </p>
    </div>

    <div class="container py-3">
      	<iframe style="
        display: block;
        width: 70%;
        margin: 1rem auto;
        height: 450px;" class="navoiy1" src="https://www.youtube.com/embed/5QUKwzWE6jM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <p class="text-center" style="font-size:1.4rem;font-weight:500;">AQXAI akademik litsey  "9-May Xotira va qadirlash kuni" dan lavha
        </p>
    </div>
      
    <div class="container py-3">
      	<iframe style="
        display: block;
        width: 70%;
        margin: 2rem auto;
        height: 450px;" class="navoiy1" src="https://www.youtube.com/embed/HNEBwdF_08Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <p class="text-center" style="font-size:1.4rem;font-weight:500;">
        AQXAI akademik litseyida "Andijon polkasi 100 yilligi" chellange holatida nishonlandi
    </p>
    </div>
    <div class="container py-3">
        <iframe style="
        display: block;
        width: 70%;
        margin: 2rem auto;
        height: 450px;" class="navoiy1" src="https://www.youtube.com/embed/d9ckmgOVzfo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <p class="text-center" style="font-size:1.4rem;font-weight:500;">
        Alisher Navoiy tavallud ayyomi munosabati bilan tayyorlandi
    </p>
</div>
    <div class="container py-3">
        <iframe style="
        display: block;
        width: 70%;
        margin: 2rem auto;
        height: 450px;" class="navoiy1" src="https://www.youtube.com/embed/dczVQ5srZ5k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <p class="text-center" style="font-size:1.4rem;font-weight:500;">
        Zahiriddin Muhammad Bobur tavallud ayyomi munosabati bilan tayyorlandi
    </p>
</div>
    <div class="lastServices container mt-4">
			<h1 class="text-primary text-center my-3 my-lg-4" style="font-size: 2.2rem">So'ngi yangiliklar:</h1>
			<div class="row pb-4">
			<?php
				
			$file = '';
			
			foreach ($yangilik4 as $model) {
				if(file_exists('img/yangiliklar/'.$model->foto))
				{
					if(!empty($model->foto))
						$file=$model->foto;
				}
				$sImageFilePath=Url::to(['/img/yangiliklar/'.$file]);
				echo "
				<div class='col-6 col-md-4 col-lg-3 px-1'>
					<div class='card p-0 mt-3 shadow' style='height: auto'>
					<img class='card-img-top' src='".$sImageFilePath."' alt='Card image cap' style='height: 170px'>
					<div class='card-body p-2 pt-3'>
						<h5 class='card-title mb-4'>".StringHelper::truncate($model->title, 16)."</h5>
						<a href='". '/yangiliklar/view/?post_id=' .$model->post_id."' class='btn btn-sm btn-primary'>Batafsil</a>
						<div style='float:right; font-size: .9rem; text-shadow: 0 1px 5px rgba(0, 0, 100, .3)' class='text-muted pt-2'>". \yii::$app->formatter->asRelativeTime($model->created_at) ."</div>
					</div>
					</div>
				</div>
				";
			}
			?></div>
		</div>

    </div>
  </div>
</div>
